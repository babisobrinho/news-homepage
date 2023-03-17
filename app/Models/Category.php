<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // one-to-many relationship
    public function articles()
    {
        return $this->hasMany(Article::class);
    }

}
