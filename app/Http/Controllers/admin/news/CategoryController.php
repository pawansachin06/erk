<?php

namespace App\Http\Controllers\admin\news;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewsCategory;
use App\NewsPost;

class CategoryController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.news.category.view');
    }

    public function create() {
        return view('admin.news.category.add');
    }

    public function store(Request $request) {
        $category = new NewsCategory();
        $category->name = $request->name;
        $category->save();
    }

    public function edit($id) {
        $category = NewsCategory::find($id);
        return view('admin.news.category.edit', compact('category'));
    }

    public function update(Request $request) {
        $category = NewsCategory::find($request->id)->update($request->all());
    }

    public function delete($id) {
        $category = NewsCategory::find($id);
        $news_post = NewsPost::where('category_id', $id);
        $news_post->delete();
        $category->delete();
    }

    public function loadAllCategory() {
        $category = new NewsCategory();
        $category = $category->orderBy('created_at', 'DESC')->get();
        $response = ['records' => $category];
        return response()->json($response);
    }

}
