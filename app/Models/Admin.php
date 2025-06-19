<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Optionally, hide password and remember_token when serializing
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
