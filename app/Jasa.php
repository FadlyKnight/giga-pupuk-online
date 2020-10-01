<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    
    protected $table = "jasa";

    protected $fillable = [
        'tujuan', 'harga_jasa',
     ];
   
     public function pemesanan()
     {
        return $this->hasMany(Pemesanan::class);
         // $this->hasOne(Keranjang::class, 'Keranjangs', 'id');
     }
     public function alamat()
     {
        return $this->hasMany(Alamat::class);
         // $this->hasOne(Keranjang::class, 'Keranjangs', 'id');
     }
}
