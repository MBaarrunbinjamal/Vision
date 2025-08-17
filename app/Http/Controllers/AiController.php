<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chat;
use Illuminate\Support\Facades\Http;

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
public function bringapi(){
    $rec=chat::get();
    return view('admin.question',compact('rec'));
}
public function deleteQuestion($id)
{
    $chat = chat::find($id);

    if (!$chat) {
        return response()->json(['success' => false, 'message' => 'Record not found.']);
    }

    $chat->delete();

    return response()->json(['success' => true, 'message' => 'Question deleted successfully.']);
}
public function getData()
{
    $rec = chat::all();
    return view('clients.counselor', compact('rec')); 
}}

