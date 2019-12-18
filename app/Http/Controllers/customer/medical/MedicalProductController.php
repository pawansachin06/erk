<?php

namespace App\Http\Controllers\customer\medical;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Medical;
use App\Category;
use App\NewsCategory;
use App\OtherCategory;
use App\ProdPurchase;
use Carbon\Carbon;

class MedicalProductController extends Controller {

    public function index() {
        $medical = Medical::all();
        return view('customer.medical.view', compact('medical'));
    }

    public function allPost() {
        $medical = Medical::all();
        $category = Category::all();
        $news_category = NewsCategory::all();
//        $single_post = Medical::find($id);
        $other_category = OtherCategory::all();
        return view('customer.medical.product', compact(['medical', 'category', 'news_category', 'other_category']));
    }

    public function singlePost($id) {
        $allmedical = Medical::all();
        $category = Category::all();
        $news_category = NewsCategory::all();
        $single_post = Medical::find($id);
        $other_category = OtherCategory::all();

        if (Auth::user()) {   // Check is user logged in
            $dt = Carbon::now();
            $prod_purchase = ProdPurchase::
                    where('prod_purchase.user_id', Auth::user()->id)
                    ->where('prod_purchase.prod_id', $id)
                    ->where('prod_purchase.status', 1)
                    ->whereRaw('"' . $dt . '" between `valid_from` and `valid_to`')
                    ->get();
        } else {
            $prod_purchase = '';
        }

        return view('customer.medical.single', compact(['allmedical', 'single_post', 'category', 'news_category', 'other_category', 'prod_purchase']));
    }

}
