<?php

namespace App\Http\Controllers\admin\news;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\NewsPost;
use App\NewsCategory;

class PostController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.news.post.view');
    }

    public function create() {
        return view('admin.news.post.add');
    }

    public function update(Request $request) {
        $post = NewsPost::find($request->id)->update($request->all());
    }

    public function delete($id) {
        $post = NewsPost::find($id);
        $post->delete();
    }

    public function store(Request $request) {
        $post = new NewsPost();
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->description = $request->description;
        $post->image = $request->image_url;
        $post->save();
    }

    public function loadAllPost() {
        $post = NewsPost::with('category_name');
        $post = $post->orderBy('created_at', 'DESC')->get();
        $response = ['records' => $post];
        return response()->json($response);
    }

    public function edit($id) {
        $post = NewsPost::find($id);
        return view('admin.news.post.edit', compact('post'));
    }

    public function load() {
        $category = new NewsCategory();
        $category = $category->orderBy('created_at', 'DESC')->get();
        $response = ['records' => $category];
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
            $path = $request->file('image')->store("news/post/$year/$month");
            return Response::json(array(
                        'success' => true,
                        'errors' => $validator->getMessageBag()->toArray(),
                        'data' => array('url' => $path)
                            ), 200);
        }
    }

}
