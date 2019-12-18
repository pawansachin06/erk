<?php

namespace App\Http\Controllers\customer\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
use App\ProdPurchase;

class AccountController extends Controller {

    public function index() {
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
        $prod_purchase = new ProdPurchase();
        $prod_purchase = $prod_purchase
                        ->leftJoin('medicals','medicals.id','=','prod_purchase.prod_id')
                        ->select('prod_purchase.*','medicals.title')
                        ->where('prod_purchase.user_id', $user->id)
                        ->where('prod_purchase.status', 1)
                        ->orderBy('prod_purchase.id', 'ASC')
                        ->get();

        return view('account', compact('user', 'website', 'category', 'news_post', 'medical', 'slider', 'doctor', 'news_category', 'other_category', 'prod_purchase'));
    }

    public function userEdit(Request $request) {
        print_r($request->all());

        $user = User::find($request->id)->update([
            'name' => $request->username,
            'email' => $request->useremail
        ]);
    }

}
