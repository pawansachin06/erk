<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\User;

class AdminController extends Controller {

    public function admin() {
        if (Auth::user()) {
           return Redirect::to('/admin');
        } else {
            return Redirect::to('/login');
        }
    }

}
