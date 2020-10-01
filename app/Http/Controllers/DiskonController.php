<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diskon;

class DiskonController extends Controller
{
    public function index()
    {
        $diskon = Diskon::all();

        return view('backend.diskon.index', compact('diskon'));
    }

    public function create()
    {        
        // $diskon = Diskon::all();
        return view('backend.diskon.create');
    }

    public function store(request $request)
    {
        $expired = date('Y-m-d', strtotime($request->expired));
        Diskon::create([
            'jumlah_diskon' => request('jumlah_diskon'),
            'kode_diskon' => request('kode_diskon'),
            'status_diskon' => 'Belum',
            'expired' => $expired,
        ]);

        return redirect()->back();
        // return view('backend.diskon.create');
    }

    public function update($id,request $request)
    {
        $diskon = Diskon::find($id);

        $expired = date('Y-m-d', strtotime($request->expired));
        $diskon->update([
            'jumlah_diskon' => request('jumlah_diskon'),
            'kode_diskon' => request('kode_diskon'),
            'status_diskon' => 'Belum',
            'expired' => $expired,
        ]);

        return redirect()->back();
        // return view('backend.diskon.create');
    }

    public function destroy($id)
    {
        $diskon = Diskon::find($id);
        $diskon->delete();
        
        return redirect()->back();
        // return view('backend.diskon.create');
    }

}
