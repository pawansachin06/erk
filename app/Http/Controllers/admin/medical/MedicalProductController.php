<?php

namespace App\Http\Controllers\admin\medical;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Medical;

class MedicalProductController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.medical.view');
    }

    public function create() {
        return view('admin.medical.add');
    }

    public function store(Request $request) {
        $medical = new Medical();
        $medical->title = $request->title;
        $medical->description = $request->description;
        $medical->category = $request->category;
        $medical->button = $request->button;
        $medical->link = $request->link;
        $medical->image = $request->image_url;
        $medical->save();
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
            $path = $request->file('image')->store("medical/$year/$month");
            return Response::json(array(
                        'success' => true,
                        'errors' => $validator->getMessageBag()->toArray(),
                        'data' => array('url' => $path)
                            ), 200);
        }
    }

    public function loadAllMedical() {
        $medical = new Medical();
        $medical = $medical->orderBy('created_at', 'DESC')->get();
        $response = ['records' => $medical];
        return response()->json($response);
    }

    public function edit($id) {
        $medical = Medical::find($id);
        return view('admin.medical.edit', compact('medical'));
    }

    public function deleteMedical($id) {
        $medical = Medical::where('id', $id);
        $medical->delete();
    }

    public function update(Request $request) {
        $medical = Medical::find($request->id)->update($request->all());
    }

}
