<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_category_id',
        'user_id',
        'title',
        'slug',
        'content',
        'thumbnail',
        'status',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    /**
     * Berita dibuat oleh admin.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Berita memiliki satu kategori.
     */
    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'news_category_id');
    }
}
