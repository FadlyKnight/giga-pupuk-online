@extends('layouts.frontend.stylecss')
@section('content')

<style>

    @media (max-width: 991px) {
    .profile_toggle { bottom: 40px; right: 350px !important; }
    }
    

    .profile_toggle {
        right: 1200px ;
    }

    .profile_toggle > a {
        background-color: #1FA12E !important;
    }

	.signup_wrapper > .signup_inner > .signup_details::before {
		background-color: #1FA12E !important;
	}

	.signup_wrapper > .signup_inner > .signup_details > .clv_btn::before {
    	color: #1fa12e !important;
	}

	.masuk > a  {
		color: #1fa12e !important ;
	}

	.signin_wrapper > .signup_inner > .signup_details::before {
		background-color: #1FA12E !important;
		/* margin-top: 20px !important; */
	}

	.signin_wrapper > .signup_inner > .signup_details > .clv_btn::before {
    	color: #1fa12e !important;
	}

	.index_v3 .clv_right_header .clv_menu .clv_menu_nav > ul > li > a {
		color: #222222;
	}
	
	.index_v3 .clv_right_header .clv_menu .clv_menu_nav > ul > li > a:hover {
		color: #1FA12E;
	}

	.org_product_block a:hover {
		background-color: #1FA12E;
	}

	.contact_blocks_wrapper {
		/* background-color: #ffffff; */
		padding-top: 125px !important;
	}

	.kosong{
		background-color: red !important;
	}

    .img-fluid{
        width: 250px !important;
        height: 250px !important;
    }

	/* .org_product_block a {
		color: #ffffff  !important;
		background-color: #222222 !important;
	} */

	/* .signup_wrapper > .signup_inner > .signup_details > .clv_btn::after {
    	color: #FFF !important;
	} */

	/* .signup_wrapper > .signup_inner > .signup_form_section > .clv_btn::before {
		background-color: #1fa12e !important;
	} */

	/* .signup_wrapper > .signup_inner > .signup_form_section > .clv_btn::after {
		color: #1fa12e !important;
		border-color: #1FA12E !important;
	}  */

</style>
	
<div class="clv_main_wrapper index_v3">
    
	@include('layouts.frontend.header2')
  
    <!--Produst List-->
    <div class="products_wrapper clv_section">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-3 col-md-3">
                    <div class="product_sidebar">
                        <div class="product_block">
                            <div class="sidebar_heading">
                                <h3>search</h3>
                                <img src="{{ asset('template/frontend/images/footer_underline.png')}}" alt="image">
                            </div>
                            <div class="sidebar_search">
                                <input type="text" placeholder="Search here">
                                <a href="javascript:;"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="product_block">
                            <div class="sidebar_heading">
                                <h3>product categories</h3>
                                <img src="{{ asset('template/frontend/images/footer_underline.png')}}" alt="image">
                            </div>
                            <div class="product_category">
                                <ul>
                                    <li>
                                        <input type="checkbox" id="cat1" checked>
                                        <label for="cat1">all<span>(16)</span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="cat2">
                                        <label for="cat2">Organic Farming<span>(12)</span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="cat3">
                                        <label for="cat3">Organic Green Bell Pepper<span>(156)</span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="cat4">
                                        <label for="cat4">Permaculture<span>(260)</span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="cat5">
                                        <label for="cat5">Precision Farming<span>(96)</span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="cat6">
                                        <label for="cat6">Conservation Agriculture<span>(12)</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_block">
                            <div class="sidebar_heading">
                                <h3>filter by price</h3>
                                <img src="{{ asset('template/frontend/images/footer_underline.png')}}" alt="image">
                            </div>
                            <div class="ds_progress_rangeslider Range_slider">
                                <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"> 
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span></div>
                                
                                <div class="price_range"><p><span id="amount"></span></p></div>
                                
                            </div>
                        </div>
                        <div class="product_block">
                            <div class="sidebar_heading">
                                <h3>discount</h3>
                                <img src="{{ asset('template/frontend/images/footer_underline.png')}}" alt="image">
                            </div>
                            <div class="product_category">
                                <ul>
                                    <li>
                                        <input type="checkbox" id="dis1" checked>
                                        <label for="dis1">less than 20%<span>(16)</span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="dis2">
                                        <label for="dis2">20% or more<span>(12)</span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="dis3">
                                        <label for="dis3">30% or more<span>(156)</span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="dis4">
                                        <label for="dis4">50% or more<span>(260)</span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="dis5">
                                        <label for="dis5">70% or more<span>(96)</span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="dis6">
                                        <label for="dis6">80% or more<span>(12)</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-12 col-md-12">
                    <div class="product_section">
                        {{-- <div class="ads_section"><img src="https://via.placeholder.com/870x296" alt="image"></div> --}}
                    </div>
                    <div class="product_list_section">
                        <div class="product_list_filter">
                            <ul>
                                {{-- <li>
                                    <p>showing <span>1-6 of 9</span> result</p>
                                </li>
                                <li>
                                    <select>
                                        <option value="sort by popularity">sort by popularity</option>
                                        <option value="sort by price">sort by price</option>
                                        <option value="sort by category">sort by category</option>
                                    </select>
                                </li> --}}
                                {{-- <li>
                                    <ul class="list_view_toggle">
                                        <li><span>view style</span></li>
                                        <li>
                                            <a href="javascript:;" class="active grid_view">
                                                <svg 
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                width="12px" height="12px">
                                                <path fill-rule="evenodd"  fill="rgb(112, 112, 112)"
                                                d="M6.861,12.000 L6.861,6.861 L12.000,6.861 L12.000,12.000 L6.861,12.000 ZM6.861,-0.000 L12.000,-0.000 L12.000,5.139 L6.861,5.139 L6.861,-0.000 ZM-0.000,6.861 L5.139,6.861 L5.139,12.000 L-0.000,12.000 L-0.000,6.861 ZM-0.000,-0.000 L5.139,-0.000 L5.139,5.139 L-0.000,5.139 L-0.000,-0.000 Z"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="list_view">
                                                <svg 
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                width="12px" height="10px">
                                                <path fill-rule="evenodd"  fill="rgb(112, 112, 112)"
                                                d="M3.847,10.000 L3.847,7.783 L12.000,7.783 L12.000,10.000 L3.847,10.000 ZM3.847,3.892 L12.000,3.892 L12.000,6.108 L3.847,6.108 L3.847,3.892 ZM3.847,-0.000 L12.000,-0.000 L12.000,2.216 L3.847,2.216 L3.847,-0.000 ZM-0.000,7.783 L2.297,7.783 L2.297,10.000 L-0.000,10.000 L-0.000,7.783 ZM-0.000,3.892 L2.297,3.892 L2.297,6.108 L-0.000,6.108 L-0.000,3.892 ZM-0.000,-0.000 L2.297,-0.000 L2.297,2.216 L-0.000,2.216 L-0.000,-0.000 Z"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="product_items_section">
                            <ul>
                                @foreach ($produk as $produks)
                                @php
                                    $harga_rp = strrev(implode('.',str_split(strrev(strval($produks->harga)),3)));
                                    $id_produk = $produks->id;
                                @endphp
                                    <li>
                                        <div class="product_item_block">
                                            <div class="org_product_block">
                                                    @if($produks->stok != 'Kosong')
                                                    <span class="product_label">{{ $produks->stok }}</span>
                                                    @else
                                                    <span class="product_label kosong">{{ $produks->stok }}</span>
                                                    @endif
                                                <div class="org_product_image">
                                                    <img src="{{ asset('images/produk/'.$produks->gambar) }}" width="253px" height="170px" alt="image" class="img-fluid" />
                                                </div>
                                                <h4>{{ $produks->nama_produk }}</h4>
                                                <h3><span><b>Rp. </b></span>{{ $harga_rp }},00</h3>
                                                @if( Auth::check() )
                                                <a type="submit" id="{{ $produks->id }}" class="text-white {{ $produks->stok == 'Kosong' ? 'kosong-klik' : 'add-keranjang' }}">Masukkan Keranjang</a>		
                                                @else
                                                <a href="javascript:;" class="text-white login-akun">add to cart</a>
                                                @endif
                                            </div>
                                            {{-- <div class="content_block">
                                                <div class="product_price_box"> 
                                                    <h3>farm sprayer</h3>            
                                                    <h5><span><i class="fa fa-usd" aria-hidden="true"></i></span>25</h5>   
                                                </div>
                                                <p>Farm & Garden</p>
                                                <div class="rating_section">
                                                    <span>4.1</span>
                                                    <ul>
                                                        <li><a class="active" href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a class="active" href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a class="active" href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                        <li><a href="javascript:;"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                    </ul>
                                                    <p>151 reviews</p>
                                                </div>
                                                <ul class="product_code">
                                                    <li>
                                                        <p>product code: 12948</p>
                                                    </li>
                                                    <li>
                                                        <p>availability: <span>in stock</span></p>
                                                    </li>
                                                </ul>
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt utte labore et dolore magna aliqua Ut enim ad minim</p>
                                            </div> --}}
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="blog_pagination_section">
                            {{ $produk->links() }}
                        </div> --}}
                        {{-- <div class="blog_pagination_section">
                            <ul>
                                <li class="blog_page_arrow">
                                    <a href="javascript:;">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="15px">
                                        <path fill-rule="evenodd" fill="rgb(112, 112, 112)" d="M0.324,8.222 L7.117,14.685 C7.549,15.097 8.249,15.097 8.681,14.685 C9.113,14.273 9.113,13.608 8.681,13.197 L2.670,7.478 L8.681,1.760 C9.113,1.348 9.113,0.682 8.681,0.270 C8.249,-0.139 7.548,-0.139 7.116,0.270 L0.323,6.735 C0.107,6.940 -0.000,7.209 -0.000,7.478 C-0.000,7.747 0.108,8.017 0.324,8.222 Z"></path>
                                        </svg>
                                        <span>prev</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">01</a></li>
                                <li><a href="javascript:;">02</a></li>
                                <li><a href="javascript:;">....</a></li>
                                <li><a href="javascript:;">12</a></li>
                                <li><a href="javascript:;">13</a></li>
                                <li class="blog_page_arrow">
                                    <a href="javascript:;">
                                        <span>next</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19px" height="25px">
                                        <path fill-rule="evenodd" fill="rgb(112, 112, 112)" d="M13.676,13.222 L6.883,19.685 C6.451,20.097 5.751,20.097 5.319,19.685 C4.887,19.273 4.887,18.608 5.319,18.197 L11.329,12.478 L5.319,6.760 C4.887,6.348 4.887,5.682 5.319,5.270 C5.751,4.861 6.451,4.861 6.884,5.270 L13.676,11.735 C13.892,11.940 14.000,12.209 14.000,12.478 C14.000,12.747 13.892,13.017 13.676,13.222 Z"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
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
    <!--Footer-->

    
	<!--Popup-->
	<div class="search_box">
            <div class="search_block">
                <h3>Explore more with us</h3>
                <div class="search_field">
                    <input type="search" placeholder="Search Here" />
                    <a href="javascript:;">search</a>
                </div>
            </div>
            <span class="search_close">
                <?xml version="1.0" encoding="iso-8859-1"?>
                <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve"  width="30px" height="30px">
                <g>
                    <path style="fill:#1fa12e;" d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
                        c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
                        C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
                        s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
                </g>
                </svg>
            </span>
        </div>
        <!--Payment Success Popup-->
        <div class="success_wrapper">
            <div class="success_inner">
                <div class="success_img"><img src="{{ asset('/template/frontend/images/success.png') }}" alt=""></div>
                <h3>payment success</h3>
                <img src="{{ asset('/template/frontend/images/clv_underline.png') }}" alt="">
                <p>Your order has been successfully processed! Please direct any questions you have to the store owner. Thanks for shopping</p>
                <a href="javascript:;" class="clv_btn">continue browsing</a>
                <span class="success_close">
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;" xml:space="preserve" width="11px" height="11px" >
                    <g>
                        <path fill="#fec007" style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312
                            c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312
                            l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937
                            c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                    </g>
                    </svg>
                </span>
            </div>
        </div>
        <!--Thank You Popup-->
        <div class="thankyou_wrapper">
            <div class="thankyou_inner">
                <div class="thankyou_img"><img src="{{ asset('template/frontend/images/thankyou.png')}}" alt=""></div>
                <h3>your order is being processed</h3>
                <h5>We Have Just Sent You An Email With Complete Information About Your Booking</h5>
                <div class="download_button">
                    <a href="javascript:;" class="clv_btn">download PDF</a>
                    <a href="index.html" class="clv_btn">back to site</a>
                </div>
                <span class="success_close">
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;" xml:space="preserve" width="11px" height="11px" >
                    <g>
                        <path fill="#fec007" style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312
                        c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312
                        l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937
                        c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                    </g>
                    </svg>
                </span>
            </div>
        </div>
        <!--SignUp Popup-->
        <div class="signin_wrapper">
            <div class="signup_inner">
                <div class="signup_details" >
                    <div class="site_logo">
                        <a href="index.html"> <img src="{{ asset('/template/frontend/giga/giga_putih.png') }}" alt="image" width="150px;"></a>
                    </div>
                    <h3>welcome to GIGA!</h3>
                    <p>Sudah Punya Akun ?.</p>
                    <a href="javascript:;" class="clv_btn white_btn pop_signup">Klik Disini</a>
                    {{-- <ul>
                        <li><a href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
                        <li><a href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
                        <li><a href="javascript:;"><span><i class="fa fa-linkedin" aria-hidden="true"></i></span></a></li>
                        <li><a href="javascript:;"><span><i class="fa fa-youtube-play" aria-hidden="true"></i></span></a></li>
                    </ul> --}}
                </div>
                <div class="signup_form_section">
                    <h4>Daftar Akun Baru</h4>
                    <img src="{{ asset('/template/frontend/images/clv_underline.png') }}" alt="image">
                    <form method="POST" action="{{ route('daftar.baru') }}">
                        @csrf
    
                        <div class="form_block">
                            <input type="text" class="form_field" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="form_block">
                            <input type="number" class="form_field" placeholder="No Handphone" name="no_hp" value="{{ old('no_hp') }}" required autocomplete="no_hp" autofocus>
                        </div>
                        <div class="form_block">
                            <input type="text" class="form_field" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        <div class="form_block">
                            <input type="password" class="form_field" placeholder="Password" name="password">
                        </div>
                        <input type="hidden" name="role" value="Members">
                        <a href="javascript:;" class="clv_btn"><input type="submit" class="clv_btn"  value="Daftar"></a>
                        {{-- <button type="submit" href="javascript:;" class="clv_btn"> {{ __('Register') }}</button> --}}
                        {{-- <a href="javascript:;" class="clv_btn">sign up</a> --}}
                        {{-- <input href="javascript:;" type="submit"  value="Sign Up"> --}}
                    </form>
                    
                    {{-- <div class="social_button_section">
                        <a href="javascript:;" class="fb_btn">
                            <span><img src="{{ asset('/template/frontend/images/fb.png') }}" alt="image"></span>
                            <span>facebook</span>
                        </a>
                        <a href="javascript:;" class="google_btn">
                            <span><img src="{{ asset('/template/frontend/images/google.png') }}" alt="image"></span>
                            <span>google+</span>
                        </a>
                    </div> --}}
                    <span class="success_close">
                        <?xml version="1.0" encoding="iso-8859-1"?>
                        <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;" xml:space="preserve" width="11px" height="11px" >
                        <g>
                            <path fill="#fec007" style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312
                            c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312
                            l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937
                            c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                        </g>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
        <!--SignIn Popup-->
        <div class="signup_wrapper">
            <div class="signup_inner">
                <div class="signup_details">
                    <div class="site_logo">
                        <a href="index.html"> <img src="{{ asset('/template/frontend/giga/giga_putih.png') }}" alt="image" width="150px;"></a>
                    </div>
                    <h3>welcome to giga!</h3>
                    <p>Belum punya akun ?.</p>
                    <a href="javascript:;" class="clv_btn white_btn pop_signin">Klik Disini</a>
                    {{-- <ul>
                        <li><a href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
                        <li><a href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
                        <li><a href="javascript:;"><span><i class="fa fa-linkedin" aria-hidden="true"></i></span></a></li>
                        <li><a href="javascript:;"><span><i class="fa fa-youtube-play" aria-hidden="true"></i></span></a></li>
                    </ul> --}}
                </div>
                <div class="signup_form_section">
                    <h4>Login</h4>
                    <img src="{{ asset('/template/frontend/images/clv_underline.png') }}" alt="image">
                    <form method="POST" action="{{ url(action('DaftarController@getlogin')) }}">
                        {{-- @csrf --}}
                        {{ csrf_field() }}
                            
                        <div class="form_block">
                            <input required type="number" class="form_field" placeholder="No Handphone" name="no_hp" value="@old('no_hp')">
                        </div>
                        <div class="form_block">
                            <input required type="password" class="form_field" placeholder="Password" name="password">
                        </div>
                        <a href="javascript:;" class="clv_btn"><input type="submit" class="clv_btn"  value="Masuk"></a>
                        {{-- <div class="social_button_section">
                            <a href="javascript:;" class="fb_btn">
                                <span><img src="{{ asset('/template/frontend/images/fb.png') }}" alt="image"></span>
                                <span>facebook</span>
                            </a>
                            <a href="javascript:;" class="google_btn">
                                <span><img src="{{ asset('/template/frontend/images/google.png') }}" alt="image"></span>
                                <span>google+</span>
                            </a>
                        </div> --}}
                    </form>
                    <span class="success_close">
                        <?xml version="1.0" encoding="iso-8859-1"?>
                        <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;" xml:space="preserve" width="11px" height="11px" >
                        <g>
                            <path fill="#fec007" style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312
                            c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312
                            l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937
                            c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                        </g>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
    
        <!--Profile Toggle-->
       
</div>

<script src="{{ asset('/template/frontend/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/cart.js') }}"></script>

@endsection