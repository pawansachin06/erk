<?php

namespace App\Http\Controllers\admin\other;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OtherCategory;
use App\OtherPost;

class CategoryController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.other.category.view');
    }

    public function create() {
        return view('admin.other.category.add');
    }

    public function store(Request $request) {
        $category = new OtherCategory();
        $category->name = $request->name;
        $category->save();
    }

    public function edit($id) {
        $category = OtherCategory::find($id);
        return view('admin.other.category.edit', compact('category'));
    }

    public function update(Request $request) {
        $category = OtherCategory::find($request->id)->update($request->all());
    }

    public function delete($id) {
        $category = OtherCategory::find($id);
        $other_post = OtherPost::where('category_id', $id);
        $category->delete();
        $other_post->delete();
    }

    public function loadAllCategory() {
        $category = new OtherCategory();
        $category = $category->orderBy('created_at', 'DESC')->get();
        $response = ['records' => $category];
        return response()->json($response);
    }

}
