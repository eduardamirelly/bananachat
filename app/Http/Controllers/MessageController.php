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
        $messages_chat = Message::where([
            ['from_user_id', '=', Auth::id()],
            ['to_user_id', '=', $userId]
        ])->orWhere([
            ['from_user_id', '=', $userId],
            ['to_user_id', '=', Auth::id()]
        ])->orderBy('created_at', 'ASC')->get();
    
        //pegar as mensagens entre o usuário logado e o chat clicado

        //pegar as mensagens que o usuário autenticado enviou para tal chat
        //pegar as mensagens que o usuário autenticado recebeu de tal chat

        // $mes = Message::where(function($query, $userId) {
        //     $query->where(['from_user_id' => Auth::id()])
        //           ->where(['to_user_id' => $userId]);
        // })->orderBy('created_at', 'ASC')->get();

        return response()->json([
            'messages_chat' => $messages_chat,
            'success' => true,
        ]);
    }
}
