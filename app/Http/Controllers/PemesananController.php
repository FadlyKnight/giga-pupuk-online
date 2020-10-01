<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;
use App\Keranjang;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keranjang2 = Keranjang::all();

        $keranjang = Keranjang::join('pemesanan', 'pemesanan.id', '=', 'keranjang.pemesanan_id')
        // ->select('*')
        // ->distinct()
        ->get();

        // dd(
        // $keranjang->groupBy('pemesanan_id')->count()
        // , $keranjang->where('status', 'Checkout')->groupBy('pemesanan_id') ,
        // $keranjang2->groupBy('pemesanan_id') ,
        // );

        // foreach ($keranjang->groupBy('pemesanan_id') as $key => $value) {
        //     dd( $value[$value->count() - 1 ]->produk->nama_produk  );
        // }
        // dd($keranjang);
        return view('backend.pemesanan.index', compact('keranjang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Pemesanan::where('id', '=', $id)
        ->update([
            'status_pesan' => $request->status,
        ]);
        
        return redirect()->back();
        //  w
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pemesanan::where('id', '=', $id)
        ->delete();
        
        return redirect()->back();
    }
}
