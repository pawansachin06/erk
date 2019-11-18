<?php

namespace App\Http\Controllers\admin\admin_email;

use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Email;

class EmailController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        return view('admin.admin_email.view');
    }

    public function loadEmail() {
        $email = Email::all();
        $response = ['records' => $email];
        return response()->json($response);
    }

    public function edit($id) {
        $email = Email::find($id);
        return view('admin.admin_email.edit', compact('email'));
    }

    public function update(Request $request) {
        $email = Email::find($request->id)->update($request->all());
    }

}
