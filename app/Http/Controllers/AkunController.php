<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{
    
    public function akun(request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('frontend.akun', compact('user'));      
    }

    public function akunedit(request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user->update([
          'name' => request('name'),
          'nama_lengkap' => request('nama_lengkap'),
          'no_hp' => request('no_hp'),
          'email' => request('email'),
        ]);

        return redirect()->back()->with('sukses','Akun Berhasil diupdate');
        // return view('frontend.akun', compact('user'));      
    }
}
