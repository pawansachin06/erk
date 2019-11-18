<?php

namespace App\Http\Controllers\customer\doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doctor;
use App\Medical;
use App\Category;
use App\NewsCategory;
use App\OtherCategory;

class DoctorController extends Controller {

    public function index() {
        $doctor = Doctor::all();
        $category = Category::all();
        $news_category = NewsCategory::all();
        $doctor = Doctor::all();
        $medical = Medical::all();
        $other_category = OtherCategory::all();
        return view('customer.doctor.doctor', compact('doctor', 'medical', 'category', 'news_category', 'other_category'));
    }

    public function singeDoctor($id) {
        $single_doctor = Doctor::find($id);
        $medical = Medical::all();
        $category = Category::all();
        $news_category = NewsCategory::all();
        $other_category = OtherCategory::all();
        return view('customer.doctor.single-doctor', compact('single_doctor','medical', 'category', 'news_category', 'other_category'));
    }

}
