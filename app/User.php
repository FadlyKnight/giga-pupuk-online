<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role', 'name', 'email', 'password',
        'no_hp', 'alamat', 'nama_lengkap',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasRole($role)
    {
        // dd($role);
        if ($this->role  == $role ) {
            return true;
        }
            return false;
        
    }

    public function pemesanan()
    {
       //return $this->hasOne(Bis::class);
        return $this->hasMany(Pemesanan::class);
    }

    public function alamat()
    {
        return $this->hasMany(Alamat::class);
    }

}

