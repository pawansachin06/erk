<?php

namespace App\Http\Controllers\customer\website_dynamics;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewsCategory;
use App\NewsPost;
use App\Medical;
use App\Post;
use App\Category;
use App\OtherCategory;
use App\WebsiteDynamics;

class WebsiteDynamicsController extends Controller {

    public function index() {

    }

    public function post($id) {
        
    }

    public function singlePost($id) {
        $single_post = NewsPost::with('category_name');
        $single_post = $single_post->find($id);
        $medical = Medical::all();
        $allcategory = NewsCategory::all();
        $category = Category::all();
        $website_dynamics = WebsiteDynamics::where('id', $id)->get();
        $other_category = OtherCategory::all();
        return view('customer.websitedynamics.single-post', compact('allcategory', 'website_dynamics', 'single_post', 'medical','category', 'other_category'));
    }

}
