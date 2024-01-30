<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $fillable = [
        // other attributes you've already made fillable
        'Name'
        // ...
    ];
    use HasFactory;
}

