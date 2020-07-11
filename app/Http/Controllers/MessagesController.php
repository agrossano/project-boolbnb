<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth')->only('showMessages');
    }

//---Visualizzazione Msg relativi all'appartamento------------------------------
    public function showMessages($id)
    {
        $messages = Message::where('apartment_id', $id)->get();
        return view('Messages.showMessages', compact('messages'));
    }

//---Creazione nuovo msg relativo all'appartamento------------------------------
    public function createMessage($id)
    {
        $apartment_id = $id;
        return view('Messages.createMessage', compact('apartment_id'));
    }

    public function storeMessage(Request $request, $id)
    {
        $validateData = $request->validate(
            [
                'text' => 'required',
                'email' => 'required|email'
            ]
        );
        $message = new Message();

        $message->text = $validateData['text'];
        $message->email = $validateData['email'];
        $message->is_read = 0;
        $message->apartment_id = $id;

        $message->save();

        return redirect()->route('createMessage', $id)->withSuccess('Message Send');
    }
}
