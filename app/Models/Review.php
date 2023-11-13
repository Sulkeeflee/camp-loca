<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    protected $fillable = ['user_id', 'campground_id', 'body', 'rating'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
}

