<?php

namespace App\Http\Controllers\chat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\Alipay;
use App\Category;
use App\NewsPost;
use App\Medical;
use App\Slider;
use App\Doctor;
use App\NewsCategory;
use App\OtherCategory;
use App\WebsiteDynamics;
use App\About;
use App\User;
use App\ProdPurchase;
use App\Events\MessageSent;
use App\Events\InitiateChat;

class ChatController extends Controller {

    public function index(Request $request) {
        $text = $request->msgtext;
        $guestName = $request->guestName;
        $userType = $request->userType;
        event(new MessageSent($text, $guestName, $userType));
    }
    
    public function initiateChat(Request $request) {
        $guestName = $request->guestName;
        event(new InitiateChat($guestName));
    }

}
