<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;


    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
