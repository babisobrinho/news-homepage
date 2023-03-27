<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'image',
        'category_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($article) {
            // delete the image file when the article is being deleted
            Storage::delete('public/' . $article->image);
        });
    }

    public function scopeNew($query)
    {
        return $query->orderByDesc('created_at');
    }

    // one-to-many relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
