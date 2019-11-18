<?php

namespace App\Http\Controllers\admin\other;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OtherPost;
use App\OtherCategory;

class PostController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.other.post.view');
    }

    public function create() {
        return view('admin.other.post.add');
    }

    public function update(Request $request) {
        $post = OtherPost::find($request->id)->update($request->all());
    }

    public function delete($id) {
        $post = OtherPost::find($id);
        $post->delete();
    }

    public function store(Request $request) {
        $post = new OtherPost();
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->description = $request->description;
        $post->save();
    }

    public function loadAllPost() {
        $post = OtherPost::with('category_name');
        $post = $post->orderBy('created_at', 'DESC')->get();
        $response = ['records' => $post];
        return response()->json($response);
    }

    public function edit($id) {
        $post = OtherPost::find($id);
        return view('admin.other.post.edit', compact('post'));
    }

    public function load() {
        $category = new OtherCategory();
        $category = $category->orderBy('created_at', 'DESC')->get();
        $response = ['records' => $category];
        return response()->json($response);
    }

}
