<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    //
    protected $fillable = [
        'id_user', 'jasa_id', 'detail', 'status_publish'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::Class);
    }
    public function jasa()
    {
        return $this->belongsTo(Jasa::Class);
    }

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
        // $this->hasOne(Keranjang::class, 'Keranjangs', 'id');
    }
}
