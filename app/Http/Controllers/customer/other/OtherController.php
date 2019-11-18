<?php

namespace App\Http\Controllers\customer\other;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use App\OtherPost;
use App\Medical;
use App\NewsCategory;
use App\OtherCategory;

class OtherController extends Controller {

    public function index() {
        $category = OtherCategory::all();
        $medical = Medical::all();        
        return view('customer.other.category', compact('category', 'medical'));
    }

    public function post($id) {
        $allcategory = Category::all();
        $medical = Medical::all();
        $news_category = NewsCategory::all();
        $other_category = OtherCategory::all();
        $post = OtherPost::where('category_id', $id)->get();
        return view('customer.other.post', compact('allcategory', 'news_category', 'post', 'medical', 'other_category'));
    }

    public function singlePost($id) {
        $single_post = OtherPost::with('category_name');
        $single_post=$single_post->find($id);
        $medical = Medical::all();
        $allcategory = Category::all();
        $news_category = NewsCategory::all();
        $other_category = OtherCategory::all();
        $post = OtherPost::where('category_id', $id)->get();
        return view('customer.other.single-post', compact('allcategory', 'post', 'single_post', 'medical','news_category', 'other_category'));
    }

}
