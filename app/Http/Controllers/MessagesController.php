<?php

namespace App\Http\Controllers;

use App\Message;

class MessagesController extends Controller
{
    public function showMessages($id)
    {
        $messages = Message::where('apartment_id', $id)->get();
        return view('showMessages', compact('messages'));
    }
}
