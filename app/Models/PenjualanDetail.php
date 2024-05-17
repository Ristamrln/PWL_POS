<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PenjualanDetail extends Model
{
    use HasFactory;
    protected $table = 't_penjualan_detail';
    protected $primaryKey = 'detail_id';

    protected $fillable = ['penjualan_id', 'barang_id', 'harga', 'jumlah'];

    public function penjualan(): HasMany{
        return $this->hasMany(Penjualan::class, 'penjualan_id', 'penjualan_id');
    }

    public function barang(): BelongsTo{
        return $this->belongsTo(Barang::class, 'barang_id', 'barang_id');
    }
}