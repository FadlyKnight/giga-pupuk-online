<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pemesanan;
use App\Keranjang;

class HistoryController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::where([
            ['user_id', Auth::user()->id],
            ['status','Checkout'],
            ['status_publish','=',NULL]
        ])->get();

        // foreach ($pemesanan as $key => $value) {
        //     if ($key == 0) {
        //         continue;
        //     }
        //     $simpan[] = $value->alamat;
            
        //     $keranjang = Keranjang::select('*');

        //     foreach($keranjang->where('pemesanan_id',$value->id)->get() as $k)
        //     {
        //         dd($k->produk->nama_produk);
        //     }
        // }
        // dd($pemesanan);
        
        $keranjang = Keranjang::join('pemesanan','pemesanan.id','=','keranjang.pemesanan_id')->get();

        // dd($keranjang->where('pemesanan_id',8));
        // dd($keranjang->where('pemesanan_id',8)->get());

        return view('frontend.history', compact('pemesanan', 'keranjang'));
    }

    public function destroy(request $request ,$id)
    {
        $pemesanan = Pemesanan::where([
            ['id', $id],
            ['user_id', Auth::user()->id],
            ['status','Checkout'],
            ['status_publish','=',NULL]
        ])->first();

        $pemesanan->update([
            'status_publish' => 'Trash',
        ]);
        // $pemesanan
        // foreach ($pemesanan as $key => $value) {
        //     $simpan[] = $value->alamat;
        // }
        // dd($pemesanan);
        return redirect()->back()->with('sukses', 'Data Berhasil dihapus');
    }
}
