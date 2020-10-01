<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Testimoni;
use App\Kontak;
use DB;

class SettingController extends Controller
{
    public function slider(){
        $slider = Slider::all();

        return view('backend.setting.slider', compact('slider'));
    }

    public function testi(){
        $testi = Testimoni::all();

        return view('backend.setting.testimoni', compact('testi'));
    }

    public function testicreate()
    {
        return view('backend.setting.createtestimoni');
    }
    
    public function slidercreate()
    {
        return view('backend.setting.createSlider');
    }
    
    public function testiedit($id)
    {
        $testi = Testimoni::find($id);

        return view('backend.setting.updateTestimoni', compact('testi'));
    }
    
    public function slideredit($id)
    {
        $slide = Slider::find($id);

        return view('backend.setting.updateSlider', compact('slide'));
    }
    
    public function testistore(request $request)
    {
        if ($request->hasFile('foto')) {
            $foto_produk = str_random(12) .".". $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move(public_path('images/testi'), $foto_produk);
            // $form->ktp =  $ktp; 
            // $form->save();
        }

        // dd('mantap');

        Testimoni::create([
            'nama'=>request('nama_client'),
            'pict'=> $foto_produk,
            'sebagai'=>request('jabatan'),
            'testi'=>request('testi'),
        ]);
        
        // dd('cool');
        return redirect()->back()->with('pesan','testimoni ditambahkan');
    }
    
    public function sliderstore(request $request)
    {
        if ($request->hasFile('foto')) {
            $foto_produk = str_random(12) .".". $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move(public_path('images/testi'), $foto_produk);
            // $form->ktp =  $ktp; 
            // $form->save();
        }

        // dd('mantap');

        Slider::create([
            'title'=>request('title'),
            'pict'=> $foto_produk,
            'content'=>request('content'),
        ]);
        
        return redirect('settings/slider')->with('pesan','slider ditambahkan');
    }

    public function testiupdate(Request $request, $id)
    {
        $testimonial = Testimoni::find($id);
        
        if ($request->hasFile('foto')) {
            $foto_produk = str_random(12) .".". $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move(public_path('images/slider'), $foto_produk);
            $testimonial->pict =  $foto_produk; 
            $testimonial->save();
        }
        
        $testimonial->update([
            'nama'=>request('nama_client'),
            'pict'=> $testimonial->pict,
            'sebagai'=>request('jabatan'),
            'testi'=>request('testi'),
        ]);

         return redirect('settings/testimoni')->with('pesan','testimoni diupdate');
            // return redirect()->back()->with('pesan','testimoni diupdate');
    }
    
    public function sliderupdate(Request $request, $id)
    {
        $xslider = Slider::find($id);
        
        if ($request->hasFile('foto')) {
            $foto_produk = str_random(12) .".". $request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->move(public_path('images/slider'), $foto_produk);
            $xslider->pict =  $foto_produk; 
            $xslider->save();
        }
        
        $xslider->update([
            'title'=>request('title'),
            'pict'=> $xslider->pict,
            'content'=>request('content'),
        ]);

         return redirect('settings/slider')->with('pesan','slider diupdate');
            // return redirect()->back()->with('pesan','testimoni diupdate');
    }

    public function testidelete($id)
    {
        $testimonial = Testimoni::find($id);

        $testimonial->delete();

        return redirect()->back()->with('pesan','testimoni dihapus');
    }
    
    public function sliderdelete($id)
    {
        $slidex = Slider::find($id);

        $slidex->delete();

        return redirect()->back()->with('pesan','slider dihapus');
    }
}
