@extends('layouts.frontend.stylecss')
@section('content')


<div class="clv_main_wrapper index_v3">
    @include('layouts.frontend.header2')
    
    <div class="cart_single_wrapper clv_section">
        <div class="container">
            <div class="cart_table_section table-responsive">
                <div class="checkout_btn_block">
                    <a href="{{route('allproduk')}}" class="btn btn-rounded btn-success">< Kembali Belanja</a>
                </div>
                <br>
                <div class="table_heading">
                    <h3>shopping cart</h3>
                    <h4>{{ count($keranjang) }} items in your cart</h4>
                </div>
                <table class=" cart_table table-responsive woocommerce-cart-form__contents">
                    <tr>
                        <th>items</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Sub Total</th>
                        <th>Hapus</th>
                    </tr>
                    @php
                        $total = 0;
                    @endphp
                    @foreach ($keranjang as $k)
                    @php
                        $harga_rp = strrev(implode('.',str_split(strrev(strval($k->produk->harga)),3)));
                        // $id_produk = $produks->id;
                    @endphp
                    <tr>
                        <td>
                            <div class="product_img">
                                <img src="{{ asset('images/produk/'.$k->produk->gambar) }}" width="60px"lt="image">
                                <h6>{{ $k->produk->nama_produk }}</h6>
                            </div>
                        </td>
                        <td>
                            <div class="item_quantity">
                                {{-- class="quantity_minus" --}}
                                {{-- tombol minus --}}
                                <button type="button" class="btn btn-primary btn-sm mb" value="{{$k->id}}">-</button>
                                {{-- jumlah barang --}}
                                <input type="text" value="{{ $k->jumlah }}" class="quantity" id="{{$k->id}}" disabled="">
                                {{-- tombol plus --}}
                                <button type="button" class="btn btn-primary btn-sm pb" value="{{$k->id}}">+</button>
                            </div>
                        </td>
                        <td>
                            <div class="pro_price" >
                                Rp. {{ $harga_rp }}
                                <input type="hidden" value="{{$k->produk->harga}}" class="quantity" id="hs{{$k->id}}" disabled="">
                                {{-- <h5  ></h5> --}}
                            </div>
                        </td>
                        @php
                            // Hitung SUB TOTAL
                            $sub_total = $k->jumlah * $k->produk->harga;
                            
                            // HITUNG TOTAL
                            $total += $sub_total;

                            // Ubah menjadi xo.ooo
                            //$harga_sub = strrev(implode('.',str_split(strrev(strval($sub_total)),3)));
                        @endphp
                        <td>
                            <div class="pro_price" >
                                {{-- sub total --}}
                                <input type="text" value="{{$sub_total}}" class="quantity" id="st{{$k->id}}" disabled="">
                                {{-- <h5  ></h5> --}}
                            </div>
                        </td>
                        <td>
                            <div class="pro_remove">
                                <form action="{{ route('delete.cart', $k->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" style="border: 0; background-color: transparent;">
                                        <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve" width="12px" height="12px">
                                        <g>
                                            <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                                                c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                                                C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                                                s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
                                        </g>
                                        </svg>
                                    </button>
                                </form>
                                
                            </div>
                        </td>
                    <tr>
                    @endforeach
                    @php
                        $total_semua = strrev(implode('.',str_split(strrev(strval($total)),3)));    
                    @endphp
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="pro_price">
                                <h5>Total Pembayaran :</h5>
                            </div>
                        </td>
                        <td>
                            <div class="pro_price">
                                {{-- total harga --}}
                                    <input type="text" value="{{ $total }}" class="quantity ttp" id="" disabled="">
                                {{-- <h5>RP. ,00</h5> --}}
                            </div>
                        </td>
                    </tr>
                    
                </table>
                <div class="checkout_btn_block">
                    <form action="/ongkir" method="post">
                        @csrf
                        <input type="hidden" name="tot1" value="{{ $total }}" class="quantity ttp">
                        <button type="submit" value="Submit" class="clv_btn checkout-button">Lakukan Checkout</button>
                    </form>
                    {{-- <a href="javascript:;" class="clv_btn checkout-button">proceed to checkout</a> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="clv_footer_wrapper clv_section">	
        <!--Copyright-->
        <div class="clv_copyright_wrapper">
            <p>copyright &copy; 2019 <a href="javascript:;">Giga.</a> all right reserved.</p>
        </div>
    </div>

    <!--Payment Success Popup-->
 
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/cart1.js') }}"></script>
@endsection