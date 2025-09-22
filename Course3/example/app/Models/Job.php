<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listing';

    // arbitrary
    // protected $fillable = ['employer_id', 'title', 'salary']; // sometimes it can be disabled, even if it takes to danger places
    protected $guarded = []; // the fields that must be guarded

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }
}