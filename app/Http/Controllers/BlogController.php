<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addblog(Request $req){

 $file = $req->file('image');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);
        $fileName = time() . '_' . $file->getClientOriginalName();
$table=new blog();
$table->heading=$req->heading;
$table->blog=$req->blog;
        $table->image = $fileName;
$table->save();
    return response()->json(['message' => 'Your blogs has been saved']);
    }
    public function getblogs(){
        $rec=blog::get();
        return view('clients.blog',compact('rec'));
    }
  public function fullblog($bid)
{
    $rec = Blog::findOrFail($bid);
    $comments = Comment::with('user')->where('blog_id', $bid)->latest()->get();

    return view('clients.blog-single', compact('rec', 'comments'));
}
}
