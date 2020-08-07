<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function create(Request $request) {
        $messages = new Message();
        $messages->title = $request->input('title');
        $messages->content = $request->input('content');

        $messages->save();

        return redirect('/');
    }

    public function view($id) {
        $message = Message::findOrFail($id);

       return view('message', [
           'message' => $message
       ]);
    }
}
