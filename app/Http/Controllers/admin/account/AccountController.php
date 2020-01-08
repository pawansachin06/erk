<?php

namespace App\Http\Controllers\admin\account;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\NewsCategory;
use App\NewsPost;
use App\Slider;
use App\Account;
use App\User;

class AccountController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.account.view');
    }

    public function create() {
        return view('admin.account.add');
    }

    public function store(Request $request) {
        $account = new Account();
        $account->image = $request->image_url;
        $account->save();
    }

    public function edit($id) {
        $account = Account::find($id);
        return view('admin.account.edit', compact('account'));
    }

    public function update(Request $request) {
        $account = Account::find($request->id)->update($request->all());
    }

    public function delete($id) {
        $account = Account::find($id);
        Storage::delete($account->image);
        $account->delete();
    }

    public function deleteImage(Request $request) {
        Storage::delete($request->image_url);
    }

    public function deleteFrontImage(Request $request) {
//        $image_path = explode("http://localhost/erkclouds/storage/app/", $request->image_url);
        $image_path = explode(storage_path('app'), $request->image_url);
        Storage::delete($image_path);
        $users = User::find($request->id);
        $users->image = '';
        $users->save();
    }

    public function loadAllAccount() {
        $account = new Account();
        $account = $account->orderBy('created_at', 'ASC')->get();
        $response = ['records' => $account];
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
            $path = $request->file('image')->store("account/$year/$month");
            return Response::json(array(
                        'success' => true,
                        'errors' => $validator->getMessageBag()->toArray(),
                        'data' => array('url' => $path)
                            ), 200);
        }
    }

    public function userEdit(Request $request) {
        $user = User::find($request->id)->update([
            'name' => $request->username,
            'email' => $request->useremail
        ]);
    }

}
