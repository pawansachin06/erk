<?php

namespace App\Http\Controllers\customer\news;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewsCategory;
use App\NewsPost;
use App\Medical;
use App\Post;
use App\Category;
use App\OtherCategory;

class NewsController extends Controller {

    public function index() {
        $category = NewsCategory::all();
        $medical = Medical::all();
        $posts = Post::get();
        return view('customer.news.category', compact('category', 'medical', 'posts'));
    }

    public function post($id) {
        $allcategory = NewsCategory::all();
        $medical = Medical::all();
        $category = Category::all();
        $post = NewsPost::where('category_id', $id)->get();
        $other_category = OtherCategory::all();
        return view('customer.news.post', compact('allcategory', 'category', 'post', 'medical', 'other_category'));
    }

    public function singlePost($id) {
        $single_post = NewsPost::with('category_name');
        $single_post = $single_post->find($id);
        $medical = Medical::all();
        $allcategory = NewsCategory::all();
        $category = Category::all();
        $post = NewsPost::where('category_id', $id)->get();
        $other_category = OtherCategory::all();
        return view('customer.news.single-post', compact('allcategory', 'post', 'single_post', 'medical','category', 'other_category'));
    }

}
