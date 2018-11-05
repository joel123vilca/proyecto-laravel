<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $messages = [
            ['id'=>1,
            'content'=>'este es mi primer mensaje',
            'imagen'=>'http://lorempixel.com/600/338?4'
        ],
        ['id'=>2,
        'content'=>'este es mi segundo mensaje',
        'imagen'=>'http://lorempixel.com/600/338?2'
    ]];
        return view('welcome',[
            'messages'=>$messages,
        ]);
    }
}
