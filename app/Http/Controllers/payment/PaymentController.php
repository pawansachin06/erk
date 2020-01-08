<?php

namespace App\Http\Controllers\payment;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\Alipay;
use App\Category;
use App\NewsPost;
use App\Medical;
use App\Slider;
use App\Doctor;
use App\NewsCategory;
use App\OtherCategory;
use App\WebsiteDynamics;
use App\About;
use App\User;
use App\ProdPurchase;

class PaymentController extends Controller {

    public function uuid() {
        $data = openssl_random_pseudo_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0010
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    public function paymentReturn() {
        $user = Auth::user();
        $about = new About();
        $news_post = new NewsPost();
        $news_post = $news_post->orderBy('created_at', 'DESC')->limit(3)->get();
        $website = new WebsiteDynamics();
        $website = $website->orderBy('created_at', 'DESC')->limit(3)->get();
        $medical = new Medical();
        $medical = $medical->orderBy('created_at', 'DESC')->get();
        $slider = new Slider();
        $slider = $slider->orderBy('created_at', 'DESC')->get();
        $doctor = new Doctor();
        $doctor = $doctor->orderBy('created_at', 'DESC')->get();
        $news_category = new NewsCategory();
        $news_category = $news_category->orderBy('created_at', 'ASC')->get();
        $other_category = new OtherCategory();
        $other_category = $other_category->orderBy('created_at', 'ASC')->get();
        $category = Category::with('posts_name')->get();

        //Update product purchase table that payment is successfully done.
        ProdPurchase::where('sale_id', $_GET['sale_id'])
                ->update(['status' => 1]);

        return view('return', compact('user', 'website', 'category', 'news_post', 'medical', 'slider', 'doctor', 'news_category', 'other_category'));
    }

    public function paymentNotify() {
        $tid = $_POST['out_trade_no'];
        $tno = $_POST['trade_no'];
        $total_amount = $_POST['total_fee']; // don't forget to substract Alipay Transaction fee
        $alipay = new Alipay();
        $message = "";
// @todo: Verify system transaction ID hasn't been used by looking it up in your DB.
        try {
            if ($alipay->verifyPayment($_POST) === false) { // Transaction isn't complete
                $message = "Unable to verify payment.";
                return false;
            }
        } catch (Exception $e) { // Connection error
            $message = $e->getMessage();
            return false;
        } catch (AlipayException $e) { // Hash or invalid transaction error
            $message = $e->getMessage();
            return false;
        }
        return view('notify')->with("message", $message);
    }

    public function payment(Request $request) {
        $sale_id = uniqid();
        $prod_id = $request->pid;
        $amount = $request->amt;
        $description = $request->title;
        $plan = $request->plan;
        $uuid = $this->uuid();

        if ($plan == "1 Month") {
            $val_to = date('Y-m-d', strtotime('+1 months'));
        } else if ($plan == "3 Month") {
            $val_to = date('Y-m-d', strtotime('+3 months'));
        } else if ($plan == "6 Month") {
            $val_to = date('Y-m-d', strtotime('+6 months'));
        } else if ($plan == "1 Year") {
            $val_to = date('Y-m-d', strtotime('+12 months'));
        }

        //Save product purchase record.
        $this->savePayment($sale_id, $prod_id, $val_to);

        $return_url = url("account/payment/return/?sale_id=$sale_id");
        $notify_url = url("account/payment/notify/?id=$uuid");
        $alipay = new Alipay();
        $approve = $alipay->createPayment($sale_id, $amount, "USD", $description, $return_url, $notify_url);
        return redirect($approve);
    }

    public function savePayment($sale_id, $prod_id, $val_to) {

        $prod_purchase = new ProdPurchase();
        $prod_purchase->sale_id = $sale_id;
        $prod_purchase->user_id = Auth::user()->id;
        $prod_purchase->prod_id = $prod_id;
        $prod_purchase->valid_from = date("Y-m-d");
        $prod_purchase->valid_to = $val_to;
        $prod_purchase->status = 0;
        $prod_purchase->save();
    }

}
