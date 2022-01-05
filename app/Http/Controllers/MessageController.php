<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    function list_messages(){
        $messages = Message::all();

        return view('pages.chat-dashboard', ['messages' => $messages]);
    }

    function create_message(Request $request){
        $message = new Message;
        $message->content = $request->message;

        $message->save();

        return redirect('chat');
    }

}
