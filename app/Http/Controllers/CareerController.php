<?php

namespace App\Http\Controllers;

use App\Models\studymaterials;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CareerController extends Controller
{
  public function store(Request $req)
    {
        $req->validate([
            'career' => 'required|string|max:255',
        ]);

 
      $rec=new User();
      $rec->careeer=$req->career;
        $rec->where('id', Auth::id())->update(['careeer' => $req->career]);

      return redirect('/');
    }
   public function uploadstudymaterial(Request $req)
{
    $req->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'file' => 'nullable|file|mimes:pdf,doc,docx,mp4,jpg,png',
        'link' => 'nullable|url',
        'category' => 'required|string|max:50',
        'career_choice' => 'required|string|max:255',
    ]);

    $table = new studymaterials();
    $table->title = $req->title;
    $table->description = $req->description;
    $table->link = $req->link;
    $table->category = $req->category;
    $table->careeer = $req->career_choice;

    // handle file upload
    if ($req->hasFile('file')) {
        $file = $req->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $fileName);
        $table->file = $fileName;   // ✅ use correct column
    }

    $table->save();

    return response()->json(['message' => 'Study material uploaded successfully']);
}
public function getStudyMaterialsByCareer()
{
  $rec=studymaterials::where('careeer', Auth::user()->careeer)->get();
  return view('clients.carrerselect',compact('rec')); 
}
}