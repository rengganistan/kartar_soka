<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis',
    ];

    /**
     * Satu kategori memiliki banyak transaksi kas.
     */
    public function cashTransactions()
    {
        return $this->hasMany(CashTransaction::class);
    }
}
