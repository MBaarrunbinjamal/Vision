<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    //
    protected $fillable = ['name', 'email', 'review', 'image', 'status'];
}
