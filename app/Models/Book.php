<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // User.php


public function users()
{
    return $this->belongsToMany(User::class);
}
   
    
    protected $fillable = ['title', 'description', 'cover_image_path', 'price'];

  
}

