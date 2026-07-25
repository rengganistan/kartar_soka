<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NewsCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'warna',
    ];

    /**
     * Satu kategori memiliki banyak berita.
     */
    public function news()
    {
        return $this->hasMany(News::class);
    }
}
