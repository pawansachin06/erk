<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\NewsPost;
use App\Medical;
use App\Slider;
use App\Doctor;
use App\NewsCategory;
use App\OtherCategory;
use App\WebsiteDynamics;
use App\About;
use App\Post;
use App\User;

class FrontController extends Controller {

    public function front() {
        $about = new About();
        $news_post = new NewsPost();
        $news_post = $news_post->orderBy('created_at', 'DESC')->limit(5)->get();
        $posts = new Post();
        $posts = $posts->orderBy('created_at', 'DESC')->limit(5)->get();
        $website = new WebsiteDynamics();
        $website = $website->orderBy('created_at', 'DESC')->limit(5)->get();
        $medical = new Medical();
        $medical = $medical->orderBy('created_at', 'DESC')->get();
        $slider = new Slider();
        $slider = $slider->orderBy('created_at', 'DESC')->get();
        $doctor = new Doctor();
        $doctor = $doctor->orderBy('created_at', 'DESC')->get();
        $user = new User();
        $user = $user->orderBy('created_at', 'DESC')->get();
        $news_category = new NewsCategory();
        $news_category = $news_category->orderBy('created_at', 'ASC')->get();
        $other_category = new OtherCategory();
        $other_category = $other_category->orderBy('created_at', 'ASC')->get();
        $category = Category::with('posts_name')->get();
        return view('front', compact('user', 'website', 'category', 'news_post', 'medical', 'slider', 'doctor', 'news_category', 'other_category', 'posts'));
    }

    public function about() {
        $about = new About();
        $about = $about->orderBy('created_at', 'DESC')->get();
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
        return view('about', compact('about', 'website', 'category', 'news_post', 'medical', 'slider', 'doctor', 'news_category', 'other_category'));
    }

}
