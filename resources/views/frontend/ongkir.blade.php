@extends('layouts.frontend.stylecss')
@section('content')
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}


<div class="clv_main_wrapper index_v3">
    @include('layouts.frontend.header2')

  <!--Checkout-->
  <div class="clv_checkout_wrapper clv_section">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                  <div class="checkout_inner">
                      <div class="checkout_heading">
                          <h3>check out</h3>
                          <h5>Kontak Informasi</h5>
                      </div>
                      <div class="checkout_form">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form_block">
                                    <label for="">Nama</label>
                                    <input disabled value="{{ $user->name }} {{ $user->nama_lengkap }}" type="text" class="form_field" placeholder="Name" >
                                </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form_block">
                                    <label for="">Email</label>
                                    <input disabled value="{{ $user->email }}" type="text" class="form_field" placeholder="Email" >
                                </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form_block">
                                    <label for="">No Handphone</label>
                                    <input disabled value="{{ $user->no_hp }}" type="text" class="form_field" placeholder="No Handphone" >
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="checkout_heading">
                          <h5>Pengiriman</h5>
                      </div>
                    <form action="/simpanPemesanan" method="post">
                      @csrf
                      <div class="checkout_form">
                          <div class="row">
                                <div class="col-md-6">
                                    <div class="form_block">
                                        <label for="">Alamat pengiriman</label>
                                        <select required name="jasa" id="alamat">
                                            <option value="">--Pilih Alamat--</option>
                                            @foreach ($al as $i)
                                            <option value="{{$i->jasa_id}}-{{$i->id}}">{{$i->detail}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_block">
                                        {{-- jumlah berat barang --}}
                                    <input type="hidden" id="berat" value="{{ $jumlah }}" disabled>
                                    {{-- ------------------------------------------------------ --}}
                                      <label for="">Harga Jumlah Barang</label>
                                      <input disabled value="{{ $tot }}" type="text" class="barang form_field" placeholder="" >
                                  </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_block">
                                      <label for="">Biaya Ongkir</label>
                                      <input disabled value="{{ $tot }}" type="text" class="ongkir form_field" placeholder="" >
                                  </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form_block">
                                        <label for="">Kode Diskon</label>
                                        <div class="row">
                                            <span class="col-8">
                                                <input name="kod" type="text" id="dkod" type="text" class="form_field" placeholder="Masukkan Kode Diskon . . . " >
                                                <input type="text" id="dval" value="0" disabled class="form_field">
                                            </span>
                                            <span class="col-3" style="padding: 0px !important">
                                                <button type="button" class="btn btn-primary" id="dbut"><i class="fa fa-check-circle-o"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                  
                                
                                <div class="col-md-6">
                                    <div class="form_block">
                                        <label for="">Total Biaya Pembayaran</label>
                                        <input type="text" class="hasil form_field" disabled>
                                        <input type="hidden" class="hasil form_field" name="total">
                                    </div>
                                </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-lg-12">
                              <div class="checkout_submit">
                                  <button type="submit" class="clv_btn">submit</button>
                                  <a href="{{ route('allproduk') }}"><span><i class="fa fa-angle-left" aria-hidden="true"></i></span> Kembali Belanja</a>
                              </div>
                          </div>
                      </div>
                    </form>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4">
                  <div class="cart_summery_block">
                      <h3>your cart summery</h3>
                      <h5>you have {{ $cart->count() }} items in your cart</h5>
                      <ul>
                          @foreach ($cart->get() as $carts)  
                          <li>
                              <div class="product_img"><img style="width: 60px; height: 60px;" src="{{ asset('images/produk/'.$carts->produk->gambar) }}" alt="image"></div>
                              <div class="product_quantity">
                                  <h6>{{ $carts->produk->nama_produk }}</h6>
                                  <p>x{{ $carts->jumlah }}</p>
                              </div>
                              <div class="product_price">
                                  <h5>{{ $carts->produk->harga }}</h5>
                              </div>
                          </li>
                          @endforeach

                          {{-- <li>
                              <div class="total_amount">
                                  <h4>total</h4>
                              </div>
                              <div class="product_price">
                                  <h4>$28</h4>
                              </div>
                          </li> --}}
                      </ul>
                      <a href="{{ route('tampil.cart') }}">Kembali ke Keranjang ?</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
    
  {{-- <script>
    console.log('{{$kode_verifikasi}}');
  </script> --}}
@endsection  