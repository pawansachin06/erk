<?php

namespace App\Http\Controllers\customer\medical;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Medical;
use App\Category;
use App\NewsCategory;
use App\OtherCategory;

class MedicalProductController extends Controller {

    public function index() {
        $medical = Medical::all();
        return view('customer.medical.view', compact('medical'));
    }

    public function singlePost($id) {
        $allmedical = Medical::all();
        $category = Category::all();
        $news_category = NewsCategory::all();
        $single_post = Medical::find($id);
        $other_category = OtherCategory::all();
        return view('customer.medical.single', compact(['allmedical','single_post','category','news_category', 'other_category']));
    }

}
