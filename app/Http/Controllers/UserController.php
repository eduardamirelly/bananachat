<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard(){
        $myInfo = User::find(Auth::id());
        $users = User::where('id', '!=', Auth::id())->get();
        return view('pages.chat-dashboard', ['users' => $users, 'myInfo' => $myInfo]);
    }

    public function conversations(){

    }
}
