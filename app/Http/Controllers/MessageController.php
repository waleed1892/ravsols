<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Post;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index()
    {
//        $posts = ::paginate();
        return view('post.index')->with(['posts' => $posts]);
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
        return response()->json('Message sent successfully');
    }
}
