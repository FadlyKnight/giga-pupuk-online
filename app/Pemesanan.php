<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    
    protected $table = "pemesanan";

    protected $fillable = [
        'user_id', 'jasa_id', 'total_harga',
        'status', 'alamat_id', 'diskon_id',
        'status_publish',
    ];

    public function user()
    {
        return $this->belongsTo(User::Class);
    }

    public function jasa()
    {
        return $this->belongsTo(Jasa::Class);
    }

    public function alamat()
    {
        return $this->belongsTo(Alamat::Class);
    }

    public function diskon()
    {
        return $this->belongsTo(Diskon::Class);
    }
}
