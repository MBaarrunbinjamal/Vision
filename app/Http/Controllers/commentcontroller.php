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

    // Load user relation
    $comment->load('user');

    return response()->json([
        'success'   => 'Thank you for your comment!',
        'comment'   => [
            'id'        => $comment->id,
            'username'  => $comment->user->name,
            'message'   => $comment->message,
            'created_at'=> $comment->created_at->format('F d, Y \a\t h:i A'),
        ]
    ]);
}

public function destroy($id)
{
    $comment = Comment::findOrFail($id);

    // only allow the owner to delete
    if ($comment->user_id !== Auth::id()) {
        return response()->json([
            'error' => 'Unauthorized action.'
        ], 403);
    }

    $comment->delete();

    return response()->json([
        'success' => 'Comment deleted!',
        'id' => $id
    ]);
}



}