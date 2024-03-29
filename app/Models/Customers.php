<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customers extends Model
{
    protected $fillable = [
        // other attributes you've already made fillable
        'CompanyName','Town','Street','Number','Mail','Tel','Contact','BTW','postcode'
        // ...
    ];
    use HasFactory;
}
