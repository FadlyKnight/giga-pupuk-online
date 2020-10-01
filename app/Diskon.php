<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    
    protected $table = "diskon";

    protected $fillable = [
        'jumlah_diskon',
        'kode_diskon',
        'status_diskon',
        'expired',
     ];
     
     public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
        // $this->hasOne(Keranjang::class, 'Keranjangs', 'id');
    }
}
