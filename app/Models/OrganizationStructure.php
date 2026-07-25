<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrganizationStructure extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_jabatan',
        'slug',
        'deskripsi',
        'urutan',
        'aktif',
    ];

    protected $casts = [
        'aktif' => 'boolean',
    ];

    /**
     * Satu jabatan dimiliki banyak anggota.
     */
    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
