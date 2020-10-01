<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{    
    protected $table = "keranjang";

    protected $fillable = [
        'pemesanan_id', 'produk_id',
        'sub_total', 'jumlah',
    ];

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::Class);
    }

    public function produk()
    {
        return $this->belongsTo(Produk::Class);
    }

}
