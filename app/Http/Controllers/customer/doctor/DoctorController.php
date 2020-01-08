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
        return view('customer.doctor.single-doctor', compact('single_doctor', 'medical', 'category', 'news_category', 'other_category'));
    }

    public function frontEdit(Request $request) {
//        print_r($request->all());
//        exit;
        $year = date('Y');
        $month = date('m');
        $imagedata = base64_decode($request->fileupload);
        $filename = md5(date("dmYhisA"));
        $file_name = public_path('/images/') . $filename . '.png';
        file_put_contents($file_name, $imagedata);
        $single_doctor = Doctor::find($request->id)->update([
            'name' => $request->name,
            'title' => $request->title,
            'company_name' => $request->companyName,
            'description' => $request->description,
            'image' => $request->imageidsave
        ]);
    }

}
