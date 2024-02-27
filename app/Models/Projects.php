<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Projects extends Model
{
    protected $fillable = [
        // other attributes you've already made fillable
        'Name','Customer'
        // ...
    ];
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customers::class, 'Customer');
    }
    use HasFactory;
}

