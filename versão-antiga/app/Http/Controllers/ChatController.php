<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Chat;

class ChatController extends Controller
{
    function list_chats(){
        $chats = Chat::all();
        return view('pages.chat-dashboard', ['chats' => $chats]);
    }

    function list_messages(Request $request){
        $chats = Chat::all();
        $messages = Message::where('chat_id', $request->id);

        return view('pages.chat-dashboard', ['chats' => $chats], ['messages' => $messages]);
    }
    
}
