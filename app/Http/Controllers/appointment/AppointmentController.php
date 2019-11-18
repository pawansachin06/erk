<?php

namespace App\Http\Controllers\appointment;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Email;
use App\Category;
use App\NewsPost;
use App\Medical;
use App\Slider;
use App\Doctor;
use App\NewsCategory;
use App\OtherCategory;

class AppointmentController extends Controller {

    public function index() {
        $news_post=new NewsPost();
        $news_post=$news_post->orderBy('created_at', 'DESC')->limit(3)->get();
        $medical=new Medical();
        $medical=$medical->orderBy('created_at', 'DESC')->get(); 
        $slider = new Slider();
        $slider = $slider->orderBy('created_at', 'DESC')->get();
        $doctor = new Doctor();
        $doctor = $doctor->orderBy('created_at', 'DESC')->get();
        $news_category = new NewsCategory();
        $news_category = $news_category->orderBy('created_at', 'ASC')->get();
        $other_category = new OtherCategory();
        $other_category = $other_category->orderBy('created_at', 'ASC')->get();
        $category = Category::with('posts_name')->get();
        return view('appointment', compact('category','news_post', 'medical', 'slider', 'doctor','news_category','other_category'));        
    }

    public function store(Request $request) {
        $email = Email::first();
        $admin_email = [$email->email];
        Mail::send('email.enquiry', ['email_data' => $request->all()], function($message) use($admin_email) {
            $message->to($admin_email, 'Erkclouds')->subject('Erkclouds Reuqest');
        });
        return Redirect::to('/');
    }

}
