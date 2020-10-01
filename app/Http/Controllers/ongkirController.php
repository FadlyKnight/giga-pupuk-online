<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Alamat;
use App\Jasa;
use App\Keranjang;
use App\Pemesanan;
use App\Produk;
use App\Diskon;
use App\Http\Requests;

class ongkirController extends Controller
{
    public function tampil(Request $request,Alamat $alamat, Keranjang $keranjang, Produk $produk, Pemesanan $pemesanan)
    {
        $user_id = Auth::user()->id;
        $tot = $request->tot1;
        $al = $alamat->where('id_user', $user_id)->get();

        //menghitung jumlah berat barang yang dibeli------------------------------------------
        $pemesanan = Pemesanan::where([
            ['user_id',$user_id],
            ['status','=', NULL],
            ])
        ->select('*')
        ->first();

        $produk = Produk::where([
            ['Stok', '=', 'Tersedia']
        ])->select('*')->get();

        foreach ($produk as  $value) {
            $simpan[] = $value->id;
        }

        $keranjang = Keranjang::WhereIn(
            'produk_id',$simpan,
            )->where( 'pemesanan_id','=',$pemesanan->id)
            ->get();

        $jumlah=0;
        foreach ($keranjang as $value) {
            $berat = $produk->where('id', $value->produk_id)->first()->berat;
            $j = $value->jumlah * $berat;
            $jumlah+= $j; 
        }
        // ------------------------------------------------------------------------------------

        $user = User::find(Auth::user()->id);
        $lastData = Pemesanan::latest()->first();
        $kode_verifikasi = $lastData->kode_verifikasi;
        
        $cart = Keranjang::where('pemesanan_id',$pemesanan->id);
        // dd($pemesanan->id);
        
        return view('frontend.ongkir', compact('tot', 'al','jumlah','user','kode_verifikasi','cart'));
    }

    public function hargaJasa(Request $request, Jasa $jasa)
    {
        $harga = $jasa->where('id','=',$request->id_j)->first()->harga_jasa;
        return $harga;
        // return $request->id_j;
    }

    public function jumlahDiskon(Request $request, Diskon $diskon)
    {
        $jDiskon = $diskon->where('kode_diskon','=',$request->k_dis)->first();
        
        return $jDiskon;
        // return $request->id_j;
    }
    
    public function pesan(Request $request, Pemesanan $pemesanan, Diskon $diskon, Alamat $alamat)
    {

        // dd( $request->jasa );
        // dd( explode("-",$request->jasa) );
        $jasa_ex = explode("-",$request->jasa);
        $user_id = Auth::user()->id;
        $pemesanan1 = Pemesanan::where([
            ['user_id',$user_id],
            ['status','=', NULL],
            ])
        ->select('*')
        ->first();

        $lastData = Pemesanan::latest()->first();

		$kode_verifikasi = $lastData->kode_verifikasi;
        
		if($kode_verifikasi >= 999)
		{
			$kode_verifikasi = 1;
		} else {
			$kode_verifikasi = $kode_verifikasi+1;
        }
        // dd($kode_verifikasi);
        
        // $id_js = $alamat->where('id' ,'=', $request->alamat)->first()->jasa_id;

        $pemesanan->where('id', '=', $pemesanan1->id)
        ->update([
            'jasa_id' => $jasa_ex[0],
            'alamat_id' => $jasa_ex[1],
            'total_harga' => $request->total,
            'status' => 'Checkout',
            'status_pesan' => 'Default',
            'kode_verifikasi' => $kode_verifikasi,
        ]);

        $diskon->where('kode_diskon','=',$request->kod)->update(['status_diskon' => 'Sudah']);

        Pemesanan::create([
            'user_id' => $user_id
        ]);

        return redirect('/history/pesan')->with('sukses', 'Silahkan Lakkukan pembayaran');
        // return 'mantap';
        // return view('frontend.ongkir', compact('tot', 'al','jumlah'));
    }
    
}
