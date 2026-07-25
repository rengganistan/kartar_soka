<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'organization_structure_id',
        'nama',
        'nik',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'foto',
        'status',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    /**
     * Satu anggota memiliki satu jabatan.
     */
    public function organizationStructure()
    {
        return $this->belongsTo(OrganizationStructure::class);
    }
}
