<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Darryldecode\Cart\CartCondition;
use Illuminate\Support\Facades\Auth;

use Cart;
use App\Keranjang;
use App\User;
use App\Pemesanan;
use App\Produk;
use App\Http\Requests;

class CartController extends Controller
{
    public function tambah(Request $request)
    {
        
        // $produk_id = $id;
        $produk_id = $request->id;
        // dd($produk_id);
        // $produk_id = intval($produk_id);
        $sub_total = Produk::where('id',$produk_id)
        ->select('*')->first();
        // dd($sub_total->harga);
        $user_id = Auth::user()->id;
        $pemesanan = Pemesanan::where([
            ['user_id',$user_id],
            ['status','=', NULL],
            ])
        ->select('*')
        ->first();

        
        // dd($pemesanan->id, $produk_id );
        // CEK KERANJANG dengan Pemesanan dan Produk yang sama 
        $produk_keranjang = Keranjang::where([
                    ['pemesanan_id','=',$pemesanan->id],
                    ['produk_id','=',$produk_id],
                    ]);
        
        // dd($produk_keranjang->count());            
        if ($produk_keranjang->count() > 0 ) {
            $jumlah = $produk_keranjang->first()->jumlah; 
            $jumlah = $jumlah + 1;
            
            $sub_total = $produk_keranjang->first()->sub_total; 
            $sub_total = $sub_total + $sub_total;
            // dd($sub_total);
            $produk_keranjang->update([
                'jumlah' => $jumlah,
                // 'sub_total' => $sub_total,
            ]);

            // return redirect()->back();
        } else {
            // dd($pemesanan->id, $produk_id);
            Keranjang::Create([
                'produk_id' => $produk_id,
                'pemesanan_id' => $pemesanan->id,
                'jumlah' => 1,
                'sub_total' => $sub_total->harga,

            ]);   
        }

        // return redirect()->back();
    }

    public function tampil()
    {
        // $sub_total = Produk::where('id',$produk_id)
        // ->select('*')->first();

        // dd($sub_total->harga);
        $user_id = Auth::user()->id;
        $pemesanan = Pemesanan::where([
            ['user_id',$user_id],
            ['status','=', NULL],
            ])
        ->select('*')
        ->first();

        $produk = Produk::where([
            ['Stok', '=', 'Tersedia']
        ])->select('*')->get();

        // foreach ($produk as $value) {
        //     $k = Keranjang::where([
        //         ['pemesanan_id','=',$pemesanan->id],
        //         ['produk_id','=',$value->id],
        //         ])->first();

        //         $keranjang[] = $k;
        // };

        foreach ($produk as  $value) {
            $simpan[] = $value->id;
        }
        
        // CEK KERANJANG dengan Pemesanan dan Produk yang sama 
        $keranjang = Keranjang::WhereIn(
                    'produk_id',$simpan,
                    )->where( 'pemesanan_id','=',$pemesanan->id)
                    ->get();
                 

        // $keranjang = Keranjang::all();
        return view('frontend.cart', compact('keranjang'));
    }

    public function updateJumlah(Request $request, Keranjang $keranjang){
        //$keranjang = Keranjang::all();
        
        $id_ker = $request->id;
        $jum = $request->jumlah;
        // echo $id_ker;
        // $k = $keranjang::find($id_ker);
        // $k->jumlah = $jum;
        // $k->save();
        
        // $keranjang->where('id', $id_ker)->update(['jumlah' => 10]);
        $keranjang->where('id', $id_ker)->update(['jumlah' => $jum]);
        //return $xl;
    }

    public function destroy($id)
    {
        $cart = Keranjang::find($id);
        $cart->delete();

        return redirect()->back()->with('sukses','Berhasil Dihapus');
    }
    // public function ubah()
    // {
    // }


    // public function tampil1()
    // {

    //     $sini = 'HELLO';
    //     // $itemId = 0;
    //     $userId = 4;
        
    //     // \Cart::session($userId);

    //     Cart::add(array(
    //         [ 'id' => 3,
    //         'name' => 'Sample Item 3',
    //         'price' => 67.99,
    //         'quantity' => 4,
    //         'attributes' => array() ], 
    //         [ 'id' => 4,
    //         'name' => 'Sample Item 4',
    //         'price' => 67.99,
    //         'quantity' => 4,
    //         'attributes' => array() ],
    //     ));

    //     $items = Cart::getContent();
    //     dd($items->price);
    //     // Cart::session($userId)->add( 1, 'Sample Item 2', 150.99, 2, array());
        
    //     // Cart::session($userId)->add( 0, 'Sample Item', 150.99, 2, array());


    //     Cart::session($userId)->remove(3);
    //     $cartCollection = Cart::session($userId)->getContent()->toArray();
    //     // $harga = ($cartCollection[0]['price']);
    //     // $name = ($cartCollection[0]['name']);

    //     $hitung = 0;
    //     Cart::clear();
    //     // $hitung = Cart::session($userId)->get($itemId);
    //     // $hitung['price'];
    //     // dd($hitung,$harga, $cartCollection, $name );
    //     // dd($hitung, $cartCollection );
    //     //dd(Cart::isEmpty());

    //     $quantity = Cart::session($userId)->getTotalQuantity();
        
    //     return view('frontend.cart', compact('sini','userId','hitung','quantity'));

    //     // return view('coba', compact('sini','userId','hitung'));
    // }

    // public function add(request $request)
    // {
    //     $sini = 'Nama Produk';
    //     $itemId  = $request->barang;
    //     // $userId = 4;

    //     $userId = $request->item;

    //     // dd($hi);
    //     // $request->input('key', 'default')

    //     \Cart::session($userId);

    //     $tes = Cart::session($userId)->add( $itemId, 'Sample Item', 100.99, 2, array());

        
    //     $cartCollection = Cart::session($userId)->getContent()->toArray();
    //     $harga = ($cartCollection[4]['price']);
    //     // $hitung = $cartCollection->count();

    //     $hitung = Cart::session($userId)->get($itemId)->toArray();
    //     // dd($hitung['price'],$harga);

    //     $quantity = Cart::session($userId)->getTotalQuantity();
    //     // Cart::clear();

    //     // return redirect()->back()->withInput();
    //     $total = Cart::get($itemId)->getPriceSum();

    //     return view('frontend.cart', compact('sini','userId','hitung','total','quantity','harga'));
    //     //----------------------------[HERE]-----------------------------------------------------//
        
    //     // array format

    //     $tes2 = Cart::add(array(
    //         'id' => 456,
    //         'name' => 'Sample Item',
    //         'price' => 67.99,
    //         'quantity' => 4,
    //         'attributes' => array()
    //     ));
        
    //     // Cart::remove(456,455);

    //     dd( $tes2 );

    //     $cartCollection = Cart::getContent();

    //     $cartCollection->count();
        
    //     $coba = $cartCollection->toJson();

    //     // Cart::clear();
    //     // $summedPrice = Cart::get($itemId)->getPriceSum();
    //     // dd( Cart::get(455)->getPriceSum() );

    // }
}
