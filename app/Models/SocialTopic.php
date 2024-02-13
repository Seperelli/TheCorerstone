<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialTopic extends Model
{
    protected $fillable = [
        // other attributes you've already made fillable
        'description'
        // ...
    ];
    use HasFactory;
}
