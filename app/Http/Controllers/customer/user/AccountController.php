<?php

namespace App\Http\Controllers\customer\user;

use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
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
use App\Account;
use App\ProdPurchase;

class AccountController extends Controller {

    public function index() {
        $user = Auth::user();
//        $single_post = Medical::find($id);
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
        $prod_purchase = new ProdPurchase();
        $prod_purchase = $prod_purchase
                ->leftJoin('medicals', 'medicals.id', '=', 'prod_purchase.prod_id')
                ->select('prod_purchase.*', 'medicals.title', 'medicals.link', 'medicals.id as MedId')
                ->where('prod_purchase.user_id', $user->id)
                ->where('prod_purchase.status', 1)
                ->orderBy('prod_purchase.id', 'ASC')
                ->get();

        return view('account', compact('user', 'website', 'category', 'news_post', 'medical', 'slider', 'doctor', 'news_category', 'other_category', 'prod_purchase'));
    }

    public function userEdit(Request $request) {
        $year = date('Y');
        $month = date('m');
        $imagedata = base64_decode($request->fileupload);
        $filename = md5(date("dmYhisA"));
        $file_name = public_path('/images/') . $filename . '.png';
        file_put_contents($file_name, $imagedata);
        $user = User::find($request->id)->update([
            'name' => $request->username,
            'email' => $request->useremail,
            'age' => $request->userage,
            'image' => $request->imageidsave
        ]);
    }

    public function deleteFrontImage(Request $request) {
//        $image_path = explode("http://localhost/erkclouds/storage/app/", $request->image_url);
        $image_path = explode(storage_path('app'), $request->image_url);
        Storage::delete($image_path);
        $users = User::find($request->id);
        $users->image = '';
        $users->save();
    }

    public function uploadAccountImage(Request $request) {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = "oqtic-" . time() . '.' . $image->getClientOriginalExtension();
            $year = date('Y');
            $month = date('m');
            $path = $request->file('file')->store("user/$year/$month");
            return Response::json(array(
                        'success' => true,
                        'errors' => '',
                        'data' => array('url' => url('/storage') . '/app/' . $path, 'path' => $path)
                            ), 200);
        }
    }

}
