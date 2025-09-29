<?php

namespace App\Http\Controllers;

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
}
