<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Message;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{

    public function index()
    {
        $messages = Message::paginate();
        return view('message.index')->with(['messages' => $messages]);
    }



    public function send(Request $request)
    {

//        dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ], [
            'required' => 'Please fill in your :attribute'
        ]);
        $message = new Message($request->all());
        $message->save();
//        $details = [
//            'name' => $message->name,
//            'message' => $message->message,
//            'email' => $message->email,
//        ];
//
//
        Mail::to('muaaz9911@gmail.com')->send(new ContactMail($request));

        return response()->json('Message sent successfully');
    }
}
