<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CVs extends Model
{
    //
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'summary',
        'education',
        'experience',
        'skills',
        'template',
    ];
}
