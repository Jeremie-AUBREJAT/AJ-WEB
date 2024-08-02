<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['name', 'email', 'review', 'rating', 'approved'];

    protected $casts = [
        'approved' => 'boolean',
    ];
}
