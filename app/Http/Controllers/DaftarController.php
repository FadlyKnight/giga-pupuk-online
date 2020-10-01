<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Produk;
use App\Pemesanan;
use DB;
use Illuminate\Support\Facades\Auth;

class DaftarController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }    

    public function daftar(Request $request)
    {
        // dd('hei');
        $produk = Produk::all();
        $password = $request->input('password');
        $no_hp = $request->input('no_hp');

        $user_count = User::where('no_hp', $no_hp)->orWhere('email', $request->email)->get();
        // dd($user_count->count());

        if ( $user_count->count() > 0 ) {
            return redirect()->back()->with('Error','Email / No Handphone telah digunakan');
        }

        // $password = 
        User::create([
            'name' => request('name'),
            'no_hp' => request('no_hp'),
            'role' => request('role'),
            'email' => request('email'),
            'password'=> bcrypt($password),
        ]);
        // dd( User::latest()->first()->id );

        $id_user = User::latest()->first()->id;

        Pemesanan::create([
            'user_id' => $id_user
        ]);

        
        $auth = Auth::attempt(['no_hp' => $no_hp, 'password' => $password]);
        $role = Auth::user()->role;
        
        if ($role == 'Admin') {
            return redirect('/produk');
        } elseif ( $role == 'Members' ) {
            return redirect('/')->with('success','Selamat Datang');
        }
        // return view('frontend.index', compact('produk','auth', 'role'));
    }

    public function getlogin(Request $request)
    {
        $produk = Produk::all();
        $password = $request->input('password');
        $no_hp = $request->input('no_hp');

        $auth = Auth::attempt(['no_hp' => $no_hp, 'password' => $password]);
        
        if (Auth::check() == false) {
            return redirect()->back()->with('error','Login Gagal ! Password / Username tidak dietahui');
        }
        
        $role = Auth::user()->role;
        $user_id = Auth::user()->id;
        // $pesan1 = Pemesanan::where('user_id','=',$user_id)->first();
        
        $pesan2 = Pemesanan::where('user_id','=',$user_id)->get();

        // dd($pesan, $pesan2);
        // dd($pesan);
        $sts = 0;
        foreach ($pesan2 as $key => $pesan) {
            if ($pesan->status == NULL ){
                $sts = 1;
            }
        }
        if ( $sts == 0 ) {
            Pemesanan::create([
                'user_id' => $user_id
            ]);

            // $id_user = User::latest()->first()->id;

            // $pesan3 = Pemesanan::where([
            //     ['user_id','=',$user_id],
            //     ['status','=', NULL ],
            //     ])->first();
            // $pesan2 = Pemesanan::latest()->first();
            // dd($pesan2, 'buat baru');

        } else {
            $pesan3 = Pemesanan::find($pesan->id);
            // dd($pesan2,'Untuk UPDATE CUK');
            // $ubahpesan->update([
            // ])
        }
       
        $role = Auth::user()->role;
        
        if ($role == 'Admin') {
            return redirect('/produk');
        } elseif ( $role == 'Members' ) {
            return redirect('/')->with('sukses','Selamat Datang '.Auth::user()->name.'');
        }
        // return redirect('/')->with('greetings','Selamat Datang');
        // return response()->json($pesan2);
        // return $pesan2->json();
        
        // return redirect('/')->with('Berhasil','Anda Berhasil Login');
        // return view('frontend.index', compact('produk','auth', 'role'));
    }
}
