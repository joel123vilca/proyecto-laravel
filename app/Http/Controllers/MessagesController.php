<?php

namespace App\Http\Controllers;
use App\Message;
use App\Http\Requests\CreateMessageRequest;
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

    public function create(CreateMessageRequest $request){
       
    //     $this->validate($request, ['message' => ['required','max:20']],
    //     ['message.required'=>'por favor escribe tu message',
    //     'message.max'=>'el mensaje no supera 20 caracteres'
    //     ]
    // );
        $message = Message::create([
            'content'=>$request->input('message'),
            'image'=>'http://lorempixel.com/600/338?'.mt_rand(0,1000)
        ]);
        
        return redirect('/messages/'.$message->id);
    }
}
