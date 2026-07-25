<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'description',
        'location',
        'activity_date',
        'poster',
        'status',
    ];

    protected $casts = [
        'activity_date' => 'date',
    ];

    /**
     * Kegiatan dibuat oleh admin.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Satu kegiatan memiliki banyak galeri.
     */
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
