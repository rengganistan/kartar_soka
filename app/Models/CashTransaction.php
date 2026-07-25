<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CashTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_transaksi',
        'category_id',
        'user_id',
        'tanggal',
        'deskripsi',
        'jumlah',
        'bukti_transaksi',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'jumlah' => 'decimal:2',
    ];

    /**
     * Relasi ke kategori transaksi.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relasi ke admin.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
