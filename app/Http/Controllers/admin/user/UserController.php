<?php

namespace App\Http\Controllers\admin\user;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\User;

class UserController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.user.view');
    }

    public function store(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->save();
    }

    public function uploadAccountImage(Request $request) {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = "oqtic-" . time() . '.' . $image->getClientOriginalExtension();
            $year = date('Y');
            $month = date('m');
            $path = $request->file('file')->store("user/$year/$month");
            return Response::json(array(
                        'success' => true,
                        'errors' => '',
                        'data' => array('url' => url('/storage') . '/app/' . $path, 'path' => $path)
                            ), 200);
        }
    }

    public function uploadDoctorImage(Request $request) {
        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $name = "oqtic-" . time() . '.' . $image->getClientOriginalExtension();
            $year = date('Y');
            $month = date('m');
            $path = $request->file('file')->store("doctor/$year/$month");
            return Response::json(array(
                        'success' => true,
                        'errors' => '',
                        'data' => array('url' => url('/storage') . '/app/' . $path, 'path' => $path)
                            ), 200);
        }
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
            $path = $request->file('image')->store("user/$year/$month");
            return Response::json(array(
                        'success' => true,
                        'errors' => $validator->getMessageBag()->toArray(),
                        'data' => array('url' => $path)
                            ), 200);
        }
    }

    public function loadAllUser() {
        $user = new User();
        $user = $user->where('role', 1)->orderBy('created_at', 'DESC')->get();

        $response = ['records' => $user];
        return response()->json($response);
    }

    public function edit($id) {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function deleteUser($id) {
        $user = User::where('id', $id);
        $user->delete();
    }

    public function update(Request $request) {
        $user = User::find($request->id)->update($request->all());
    }

}
