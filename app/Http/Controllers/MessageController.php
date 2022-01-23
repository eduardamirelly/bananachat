<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function sendMessage(Request $request){

        $request->validate([
            'content' => 'required',
            'to_user_id' => 'required',
        ]);

        $message = Message::create([
            'content' => $request->content,
            'from_user_id' => Auth::id(),
            'to_user_id' => $request->to_user_id
        ]);

        return response()->json([
            'message_obj' => $message,
            'success' => true,
        ]);
    }

    public function chat($userId){
        $messages = Message::where('to_user_id', $userId)->orderBy('created_at', 'ASC')->get();

        return response()->json([
            'messages' => $messages,
            'success' => true,
        ]);

    }
}
