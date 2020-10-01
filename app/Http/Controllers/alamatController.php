<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Alamat;
use App\Jasa;
use App\Http\Requests;

class alamatController extends Controller
{
    public function tampil(Alamat $alamat)
    {
        $user_id = Auth::user()->id;
        $alamat = $alamat->where([
            ['id_user',$user_id],
            ['status_publish','!=', 'Trash'],
            ])->get();
        $isi = Jasa::all();


        foreach ($alamat as $key => $value) {
            $simpan[] = $value->detail;
        }
        // dd($simpan);
        // $alamat_edit = $alamat->where('id',$alamat->id)->first();
        // $isi1 = $jasa->all();

        return view('frontend.alamat', compact('isi','alamat'));
    }
    
    public function tambahTampil(Jasa $jasa)
    {
        $isi = $jasa->all();
        return view('frontend.tambahAlamat', compact('isi'));

    }

    public function tambah(Request $request, Alamat $alamat)
    {
        $user_id = Auth::user()->id;
        $alamat->create([ 
            'id_user'      => $user_id,
            'jasa_id'      => $request->id_jasa,
            'detail'      => $request->detail,
            'status_publish'      => 'Publish',
        ]);

        return redirect()->back()->with('sukses','Alamat Berhasil ditambahkan');
        // return redirect('/alamat');
    }

    public function hapus(Request $request, Alamat $alamat)
    {
        $alamat = Alamat::find($alamat->id);
        
        $alamat->update([
            'status_publish' => 'Trash'
        ]);
        // $alamat->destroy();

        return redirect('/alamat')->with('sukses','Alamat Berhasil Dihapus');
    }

    public function edit(Alamat $alamat, Jasa $jasa)
    {    
        $isi = $alamat->where('id',$alamat->id)->first();
        $isi1 = $jasa->all();

        return view('frontend.editAlamat', compact('isi', 'isi1'));
    }

    public function update(Request $request, Alamat $alamat)
    {
        $alamat->where('id', $alamat->id)->update(['jasa_id'=>$request->id_jasa, 'detail'=>$request->detail]);
        return redirect('/alamat');
    }

}
