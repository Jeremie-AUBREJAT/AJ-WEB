<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'owner_name',
        'owner_address',
        'phone_number',
        'email',
    ];

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
