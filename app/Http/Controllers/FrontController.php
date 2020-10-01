<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Produk;
use App\Pemesanan;
use App\Slider;
use App\Testimoni;
use App\Kontak;
use App\User;
use Response;
use DB;
use Storage;
use File;

use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd( Auth::user()->role , Auth::user()->name, Auth::user()->no_hp  );
        // $user_id = Auth::user()->id;
        // $pesan = Pemesanan::where('user_id','=',$user_id)->first();
        // dd($pesan->status);
        $produk = Produk::select('*')->orderBy('created_at', 'desc')->paginate(3);

        $slider = $this->slider();
        $testi = $this->testi();

        return view('frontend.index', compact('produk', 'slider','testi'));        
    }

    
    public function slider(){
        $control =  DB::table('control')->select('slider')->first();
        $slider = Slider::limit($control->slider)->orderBy('id', 'desc')->get();
        
        return $slider;
    }

    public function testi(){
        $control =  DB::table('control')->select('testimoni')->first();
        $testi = Testimoni::limit($control->testimoni)->orderBy('id', 'desc')->get();
        
        return $testi;
    }

    // public function kontak(){
    //     $control =  DB::table('control')->select('kontak')->first();
    //     $slider = Kontak::limit($control->slider)->get();
        
    //     return $slider;
    // }

    public function allproduk()
    {
        // $produk = Produk::select('*')->orderBy('created_at', 'desc')->paginate(3);

        $produk = Produk::paginate(21);

        return view('frontend.allproduk', compact('produk'));        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
