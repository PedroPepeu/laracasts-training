<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notepad extends Model
{
    use HasFactory;

    protected $table = 'notepads';

    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    protected $guarded = [];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
