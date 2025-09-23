<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

// before or after Eloquent(Two Key Eloquent Relationship)

class User extends Model
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    // protected $fillable = [
    //     'first_name',
    //     'last_name',
    //     'email',
    //     'password',
    // ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
