<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_organisasi',
        'logo',
        'favicon',
        'alamat',
        'email',
        'telepon',
        'visi',
        'misi',
        'facebook',
        'instagram',
        'youtube',
        'maps',
        'copyright',
    ];
}
