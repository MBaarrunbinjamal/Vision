<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chat;
class AiController extends Controller
{
    //
    public function store(Request $req)
{
    $req->validate([
        'question' => 'required|string|max:255',      // 255 character max for the question
        'explaination' => 'required|string|max:10000'           // no limit for explanation
    ]);

    $chat = new Chat();
    $chat->question = $req->question;
    $chat->explaination = $req->explaination;
    $chat->save();

    return response()->json(['message' => 'Your question has been received!']);
}

public function returns(){
    $rec=chat::get();
    return response()->json([$rec]);
}

}


