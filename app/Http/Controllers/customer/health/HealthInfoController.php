<?php

namespace App\Http\Controllers\customer\health;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use App\Medical;
use App\NewsCategory;
use App\OtherCategory;

class HealthInfoController extends Controller {

    public function index() {
        $category = Category::all();
        $medical = Medical::all();        
        return view('customer.health.category', compact('category', 'medical'));
    }

    public function post($id) {
        $allcategory = Category::all();
        $post = Post::where('category_id', $id)->get();
        $medical = Medical::all();
        $news_category = NewsCategory::all();
        $other_category = OtherCategory::all();
        return view('customer.health.post', compact('allcategory', 'news_category', 'post', 'medical', 'other_category'));
    }

    public function singlePost($id) {
        $single_post = Post::with('category_name');
        $single_post=$single_post->find($id);
        $medical = Medical::all();
        $allcategory = Category::all();
        $news_category = NewsCategory::all();
        $post = Post::where('category_id', $id)->get();
        $other_category = OtherCategory::all();
        return view('customer.health.single-post', compact('allcategory', 'post', 'single_post', 'medical','news_category', 'other_category'));
    }

}
