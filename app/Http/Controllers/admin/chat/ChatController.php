<?php

namespace App\Http\Controllers\admin\chat;

use Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ChatController extends Controller {

    public function __construct() {
        $this->middleware('admin');
    }

    public function view() {
        return view('admin.chat.view');
    }
}
