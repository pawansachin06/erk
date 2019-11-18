<?php

namespace App\Http\Controllers\admin\health;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;

class CategoryController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.health.category.view');
    }

    public function create() {
        return view('admin.health.category.add');
    }

    public function store(Request $request) {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
    }

    public function edit($id) {
        $category = Category::find($id);
        return view('admin.health.category.edit', compact('category'));
    }

    public function update(Request $request) {
        $category = Category::find($request->id)->update($request->all());
    }

    public function delete($id) {
        $category = Category::find($id);
        $post = Post::where('category_id', $id);
        $category->delete();
        $post->delete();
    }

    public function loadAllCategory() {
        $category = new Category();
        $category = $category->orderBy('created_at', 'DESC')->get();
        $response = ['records' => $category];
        return response()->json($response);
    }

}
