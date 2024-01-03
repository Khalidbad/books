<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    protected $fillable = ['title', 'description', 'cover_image_path', 'price'];

    
}

