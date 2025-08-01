<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class commentcontroller extends Controller
{
public function store(Request $req)
{
    $req->validate([
        'message' => 'required|string|max:1000',
        'blog_id' => 'required|exists:blogs,id',
    ]);

    $comment = Comment::create([
        'message' => $req->message,
        'user_id' => Auth::id(),
        'blog_id' => $req->blog_id,
    ]);

    // Load user relationship
    $comment->load('user');

    return response()->json([
        'success' => 'Thank you for your comment!',
        'username' => $comment->user->name,
        'message' => $comment->message,
    ]);
}


}