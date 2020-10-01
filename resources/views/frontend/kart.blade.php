<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head --> 

<head>
    <title>Giga Pupuk Online - Best Quality</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    
    <!-- token untuk menggunakan metode post pada laravel -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!--Start Style -->
<link href="{{ asset('template/frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    {{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> --}}
<link href="{{ asset('template/frontend/css/font.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('template/frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('template/frontend/css/swiper.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('template/frontend/css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('template/frontend/css/layers.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('template/frontend/css/navigation.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('template/frontend/css/settings.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('template/frontend/css/range.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('template/frontend/css/nice-select.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('template/frontend/css/style.css')}}" rel="stylesheet" type="text/css" />

    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="favicon.ico">
<style>
    .breadcrumb_block {
        background-color: #1FA12E !important;
    }
</style>
</head>

<body class="woocommerce-cart">
	<div class="preloader_wrapper">
		<div class="preloader_inner">
			<img src="{{ asset('template/frontend/images/preloader.gif')}}" alt="image" />
		</div>
	</div>



<div class="clv_main_wrapper index_v2">
    @include('layouts.frontend.header')
    
    <!--Breadcrumb-->
    <div class="breadcrumb_wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="breadcrumb_inner">
                        <h3>cart single</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb_block">
            <ul>
                <li><a href="index.html">home</a></li>
                <li>cart single</li>
            </ul>
        </div>
    </div>
    <!--Cart Single-->
    <div class="cart_single_wrapper clv_section">
        <div class="container">
            <div class="cart_table_section table-responsive">
                <div class="table_heading">
                    <h3>shopping cart</h3>
                    <h4>{{ $keranjang->count() }} items in your cart</h4>
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
                                <button type="button" class="btn btn-primary btn-sm mb" value="{{$k->id}}">-</button>
                                <input type="text" value="{{ $k->jumlah }}" class="quantity" id="{{$k->id}}" disabled="">
                                <button type="button" class="btn btn-primary btn-sm pb" value="{{$k->id}}">+</button>
                            </div>
                        </td>
                        <td>
                            <div class="pro_price">
                                <h5>RP. {{ $harga_rp }}</h5>
                            </div>
                        </td>
                        @php
                            // Hitung SUB TOTAL
                            $sub_total = $k->jumlah * $k->produk->harga;
                            
                            // HITUNG TOTAL
                            $total += $sub_total;

                            // Ubah menjadi xo.ooo
                            $harga_sub = strrev(implode('.',str_split(strrev(strval($sub_total)),3)));
                        @endphp
                        <td>
                            <div class="pro_price">
                                <h5>Rp. {{ $harga_sub }}</h5>
                            </div>
                        </td>
                        <td>
                            <div class="pro_remove">
                                <span>
                                    <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve" width="12px" height="12px">
                                    <g>
                                        <path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                                            c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                                            C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                                            s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
                                    </g>
                                    </svg>
                                </span>
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
                                <h5>RP. {{ $total_semua }},00</h5>
                            </div>
                        </td>
                    </tr>
                    
                </table>
                <div class="checkout_btn_block">
                    <a href="javascript:;" class="clv_btn checkout-button">proceed to checkout</a>
                </div>
                <input type="text" value="lllllllllllll" class="quantity" id="lo" disabled="">
            </div>
        </div>
    </div>
    <!--Partners-->
    {{-- <div class="clv_partner_wrapper clv_section"> --}}
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="partner_slider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="https://via.placeholder.com/100x70" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="https://via.placeholder.com/100x70" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="https://via.placeholder.com/100x70" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="https://via.placeholder.com/100x70" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="https://via.placeholder.com/100x70" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="https://via.placeholder.com/100x70" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="https://via.placeholder.com/100x70" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="https://via.placeholder.com/100x70" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="https://via.placeholder.com/100x70" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="https://via.placeholder.com/100x70" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Arrows -->
                            <span class="slider_arrow partner_left left_arrow">
                                <svg 
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="10px" height="15px">
                                <path fill-rule="evenodd"  fill="rgb(226, 226, 226)"
                                    d="M0.324,8.222 L7.117,14.685 C7.549,15.097 8.249,15.097 8.681,14.685 C9.113,14.273 9.113,13.608 8.681,13.197 L2.670,7.478 L8.681,1.760 C9.113,1.348 9.113,0.682 8.681,0.270 C8.249,-0.139 7.548,-0.139 7.116,0.270 L0.323,6.735 C0.107,6.940 -0.000,7.209 -0.000,7.478 C-0.000,7.747 0.108,8.017 0.324,8.222 Z"/>
                                </svg>
                            </span>
                            <span class="slider_arrow partner_right right_arrow">
                                <svg 
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="19px" height="25px">
                                <path fill-rule="evenodd" fill="rgb(226, 226, 226)"
                                    d="M13.676,13.222 L6.883,19.685 C6.451,20.097 5.751,20.097 5.319,19.685 C4.887,19.273 4.887,18.608 5.319,18.197 L11.329,12.478 L5.319,6.760 C4.887,6.348 4.887,5.682 5.319,5.270 C5.751,4.861 6.451,4.861 6.884,5.270 L13.676,11.735 C13.892,11.940 14.000,12.209 14.000,12.478 C14.000,12.747 13.892,13.017 13.676,13.222 Z"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="clv_newsletter_wrapper">
                    <div class="newsletter_text">
                        <h2>get update from <br/>anywhere</h2>
                        <h4>subscribe us to get more info</h4>
                    </div>
                    <div class="newsletter_field">
                        <h3>don't miss out on the good news!</h3>
                        <div class="newsletter_field_block">
                            <input type="text" placeholder="Enter Your Email Here" />
                            <a href="javascript:;">subscribe now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer-->
        <div class="clv_footer_wrapper clv_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <div class="footer_block">
                            <div class="footer_logo"><a href="javascript:;"><img src="images/footer_logo.png" alt="image" /></a></div>
                            <p>Lorem ipsum dolor sit amet  onsectetadip isicing elit, sed do eiusmod tempordidunt ut labore et dolaliqua.</p>
                            <h6>call now</h6>
                            <h3>+91 1800-124-224</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="footer_block">
                            <div class="footer_heading">
                                <h4>services</h4>
                                <img src="images/footer_underline.png" alt="image" />
                            </div>
                            <ul class="useful_links">
                                <li><a href="javascript:;"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Weed & Pest Control</a></li>
                                <li><a href="javascript:;"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Grass Seeding</a></li>
                                <li><a href="javascript:;"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Programs & Grants</a></li>
                                <li><a href="javascript:;"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Poultry & Agricultural Products</a></li>
                                <li><a href="javascript:;"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Education & event</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="footer_block">
                            <div class="footer_heading">
                                <h4>instagram</h4>
                                <img src="images/footer_underline.png" alt="image" />
                            </div>
                            <ul class="instagram_links">
                                <li><a href="javascript:;"><img src="https://via.placeholder.com/83x83" alt="image" /></a></li>
                                <li><a href="javascript:;"><img src="https://via.placeholder.com/83x83" alt="image" /></a></li>
                                <li><a href="javascript:;"><img src="https://via.placeholder.com/83x83" alt="image" /></a></li>
                                <li><a href="javascript:;"><img src="https://via.placeholder.com/83x83" alt="image" /></a></li>
                                <li><a href="javascript:;"><img src="https://via.placeholder.com/83x83" alt="image" /></a></li>
                                <li><a href="javascript:;"><img src="https://via.placeholder.com/83x83" alt="image" /></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3">
                        <div class="footer_block">
                            <div class="footer_heading">
                                <h4>support</h4>
                                <img src="images/footer_underline.png" alt="image" />
                            </div>
                            <ul class="useful_links">
                                <li><a href="javascript:;"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>About Us</a></li>
                                <li><a href="javascript:;"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Delivery Information</a></li>
                                <li><a href="javascript:;"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Privacy Policy</a></li>
                                <li><a href="javascript:;"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Terms And Conditions</a></li>
                                <li><a href="javascript:;"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>Support 24/7</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <img class="foot_girl" src="https://via.placeholder.com/398x529" alt="image">
        </div>
        <!--Copyright-->
        <div class="clv_copyright_wrapper">
            <p>copyright &copy; 2019 <a href="javascript:;">cultivation.</a> all right reserved.</p>
        </div>

    <!--Payment Success Popup-->
 
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    

    <script src="{{ asset('/template/frontend/js/jquery.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/swiper.min.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/magnific-popup.min.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/jquery.appear.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/isotope.min.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/nice-select.min.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/range.js')}}"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
    <script src="{{ asset('/template/frontend/js/revolution.extension.actions.min.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/revolution.extension.migration.min.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/revolution.extension.video.min.js')}}"></script>
    <script src="{{ asset('/template/frontend/js/custom.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/cart1.js') }}"></script>
    
    
    </body>
    </html>