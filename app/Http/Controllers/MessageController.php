<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;

class MessageController extends Controller
{
    function list_messages(){
        $messages = Message::all();
        return view('pages.chat-dashboard', ['messages' => $messages]);
    }

    function create_message(Request $request){
        $message = new Message;
        $message->content = $request->message;
        $message->from = auth()->user()->id;
        $message->from_name = auth()->user()->name;

        $message->save();

        return redirect('dashboard');
    }

}
