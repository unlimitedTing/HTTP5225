<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'year', 'genre', 'rating', 'author_id'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}

