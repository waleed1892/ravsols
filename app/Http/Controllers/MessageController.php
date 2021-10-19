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
        $messages = Message::paginate(10);
        return view('message.index')->with(['messages' => $messages]);
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ], [
            'required' => 'Please fill in your :attribute'
        ]);
        $message = new Message($request->all());
        $message->save();

        Mail::to('muaaz9911@gmail.com')->send(new ContactMail($request));
        return response()->json('Message sent successfully');
    }

    public function show($id)
    {
        $inquiry = Message::find($id);
        return view('message.view')->with('inquiry', $inquiry);
    }

    public function destroy($id)
    {
        $mes = Message::find($id);
        $mes->delete();
        return redirect(route('inquires.index')) ->with('success', 'Record deleted successfully');;
    }
}

