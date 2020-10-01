<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    
    protected $table = "kontak";

    protected $fillable = [
        'telepon', 'email', 'alamat',
     ];
}
