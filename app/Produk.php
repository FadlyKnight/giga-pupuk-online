<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    
    protected $table = "produk";

    protected $fillable = [
        'nama_produk', 'deskripsi', 'gambar',
        'satuan', 'berat', 'harga', 'stok',
     ];
   
     public function Keranjang()
     {
        return $this->hasMany(Keranjang::class);
         // $this->hasOne(Keranjang::class, 'Keranjangs', 'id');
     }

}
