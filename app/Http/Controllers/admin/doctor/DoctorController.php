<?php

namespace App\Http\Controllers\admin\doctor;

use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Doctor;

class DoctorController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.doctor.view');
    }

    public function create() {
        return view('admin.doctor.add');
    }

    public function store(Request $request) {

        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->title = $request->title;
        $doctor->description = $request->description;
        $doctor->company_name = $request->company_name;
        $doctor->image = $request->image_url;
        $doctor->save();
    }

    public function edit($id) {
        $doctor = Doctor::find($id);
        return view('admin.doctor.edit', compact('doctor'));
    }

    public function update(Request $request) {
        $doctor = Doctor::find($request->id)->update($request->all());
    }

    public function delete($id) {
        $doctor = Doctor::find($id);
        $doctor->delete();
    }

    public function loadAllDoctor() {
        $doctor = new Doctor();
        $doctor = $doctor->orderBy('created_at', 'DESC')->get();
        $response = ['records' => $doctor];
        return response()->json($response);
    }

    public function frontEdit(Request $request) {
        $single_doctor = Doctor::find($request->id)->update([
            'name' => $request->name,
            'title' => $request->title,
            'company_name' => $request->companyName,
            'description' => $request->description
        ]);
    }

    public function uploadBlogImage(Request $request) {
        $data = Input::all();
        $validator = Validator::make($data, [
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($validator->fails()) {
            return Response::json(array(
                        'success' => false,
                        'errors' => $validator->getMessageBag()->toArray(),
                        'data' => array()
                            ), 422);
        } else {
            $year = date('Y');
            $month = date('m');
            $path = $request->file('image')->store("doctor/$year/$month");
            return Response::json(array(
                        'success' => true,
                        'errors' => $validator->getMessageBag()->toArray(),
                        'data' => array('url' => $path)
                            ), 200);
        }
    }

}
