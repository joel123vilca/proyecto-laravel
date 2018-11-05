<?php

namespace App\Http\Controllers;
use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show(Message $message){
        //ir a buscar el message por id una view de un message
        //$message = Message::find($id);

        return view('messages.show',[
            'message' => $message,
        ]);
    }
}
