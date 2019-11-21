<?php

namespace App\Http\Controllers\admin\about;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\About;

class AboutController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function store(Request $request) {
        $about = new About();
        $about->image = $request->image_url;
        $about->title = $request->title;
        $about->description = $request->description;
        $about->save();
    }

    public function edit($id) {
        $about = About::find($id);
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request) {
        $about = About::find($request->aboutdata['id'])->update([
            'title' => $request->aboutdata['title'],
            'description' => $request->aboutdata['description'],
            'image' => $request->aboutdata['image'],
            'repeater' => json_encode($request->fielddata)
        ]);
    }

    public function delete($id) {
        $about = About::find($id);
        $about->delete();
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
            $path = $request->file('image')->store("about/$year/$month");
            return Response::json(array(
                        'success' => true,
                        'errors' => $validator->getMessageBag()->toArray(),
                        'data' => array('url' => $path)
                            ), 200);
        }
    }

}
