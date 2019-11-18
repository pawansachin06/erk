<?php

namespace App\Http\Controllers\admin\health;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class PostController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.health.post.view');
    }

    public function create() {
        return view('admin.health.post.add');
    }

    public function update(Request $request) {
        $post = Post::find($request->id)->update($request->all());
    }

    public function delete($id) {
        $post = Post::find($id);
        $post->delete();
    }

    public function store(Request $request) {
        $post = new Post();
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->description = $request->description;
        $post->save();
    }

    public function loadAllPost() {
        $post = Post::with('category_name');
        $post = $post->orderBy('created_at', 'DESC')->get();
        $response = ['records' => $post];
        return response()->json($response);
    }

    public function edit($id) {
        $post = Post::find($id);
        return view('admin.health.post.edit', compact('post'));
    }

    public function load() {
        $category = new Category();
        $category = $category->orderBy('created_at', 'DESC')->get();
        $response = ['records' => $category];
        return response()->json($response);
    }

}
