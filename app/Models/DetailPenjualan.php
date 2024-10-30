<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;
    protected $fillable = [
    'id_produk',
    'jumlah_produk',
    'subtotal',
    
    ];
    
    public function DetailPenjualan()
    {
        return $this->belongsTo(DetailPenjualan::class, 'id_produk', 'produk');
    }
}
