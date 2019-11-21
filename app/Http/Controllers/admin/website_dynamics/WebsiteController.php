<?php

namespace App\Http\Controllers\admin\website_dynamics;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\WebsiteDynamics;


class WebsiteController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.website_dynamics.view');
    }

    public function create() {
        return view('admin.website_dynamics.add');
    }

    public function store(Request $request) {
        $website = new WebsiteDynamics();
        $website->website_image = $request->image_url;
        $website->website_title = $request->title;
        $website->website_description = $request->description;
        $website->save();
    }

    public function edit($id) {
        $website = WebsiteDynamics::find($id);
        return view('admin.website_dynamics.edit', compact('website'));
    }

    public function update(Request $request) {
        $website = WebsiteDynamics::find($request->id)->update($request->all());
    }

    public function delete($id) {
        $website = WebsiteDynamics::find($id);
        $website->delete();
    }

    public function loadAllWebsite() {
        $website = new WebsiteDynamics();
        $website = $website->orderBy('created_at', 'ASC')->get();
        $response = ['records' => $website];
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
            $path = $request->file('image')->store("website_dynamics/$year/$month");
            return Response::json(array(
                        'success' => true,
                        'errors' => $validator->getMessageBag()->toArray(),
                        'data' => array('url' => $path)
                            ), 200);
        }
    }

}
