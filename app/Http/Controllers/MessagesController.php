<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function showMessages($id)
    {
        $messages = Message::where('apartment_id', $id)->get();
        return view('MessagesViews.showMessages', compact('messages'));
    }

    public function createMessage($id)
    {
        $apartment_id = $id;
        return view('MessagesViews.createMessage', compact('apartment_id'));
    }

    public function storeMessage(Request $request, $id)
    {
        $validateData = $request->validate(
            [
                'apartment_id' => 'required|integer',
                'text' => 'required',
                'email' => 'required|email|unique',
                'is_read' => 'false'
            ]
        );
        $message = new Message();

        $message->text = $validateData['text'];
        $message->email = $validateData['email'];
        $message->is_read = $validateData['is_read'];
        $message->apartment_id = $validateData['apartment_id'];

        $message->save();

        return redirect()->route('showMessages')->withSuccess('Message Send');

    }
}
