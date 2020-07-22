<?php

namespace App\Http\Controllers;

use App\Apartment;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth')->only('showMessages');
    }

//---Visualizzazione Msg relativi all'appartamento------------------------------
    public function showMessages()
    {
        $user = Auth::user();
        $messages = $user->messages()->orderBy('created_at', 'desc')->get();
        Message::where('is_read', 0)->update(['is_read' => 1]);
        return view('Messages.showMessages', compact('messages', 'user'));
    }

//---Creazione nuovo msg relativo all'appartamento------------------------------
    public function createMessage($id)
    {
        $user = Auth::user();
        $apartment = Apartment::findOrFail($id);
        return view('Messages.createMessage', compact('apartment', 'user'));
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

        return redirect()->route('showApartment', $id)->withSuccess('Message Send');
    }
}
