<?php

namespace App\Http\Controllers\admin\slider;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\NewsCategory;
use App\NewsPost;
use App\Slider;

class SliderController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.slider.view');
    }

    public function create() {
        return view('admin.slider.add');
    }

    public function store(Request $request) {
        $slider = new Slider();
        $slider->image = $request->image_url;
        $slider->save();
    }

    public function edit($id) {
        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request) {
        $slider = Slider::find($request->id)->update($request->all());
    }

    public function delete($id) {
        $slider = Slider::find($id);
        $slider->delete();
    }

    public function loadAllSlider() {
        $slider = new Slider();
        $slider = $slider->orderBy('created_at', 'ASC')->get();
        $response = ['records' => $slider];
        return response()->json($response);
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
            $path = $request->file('image')->store("slider/$year/$month");
            return Response::json(array(
                        'success' => true,
                        'errors' => $validator->getMessageBag()->toArray(),
                        'data' => array('url' => $path)
                            ), 200);
        }
    }

}
