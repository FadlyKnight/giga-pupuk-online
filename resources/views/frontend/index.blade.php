@extends('layouts.frontend.stylecss')
@section('content')

<style>

    /* @media (max-width: 991px) {
    .profile_toggle { bottom: 40px; right: 350px !important; }
    }

    .profile_toggle {
        right: 1200px ;
    } */

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
    {{-- Header --}}
	@include('layouts.frontend.header2')
	
	@include('layouts.frontend.slider')
	
	@include('layouts.frontend.layanan')
	
	@include('layouts.frontend.tentang')
	
	
	<!--Products-->
	{{-- <a  id="sa-success">LIKAJSJ</a> --}}
	<div id="produk" class="org_product_wrapper clv_section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-6">
					<div class="clv_heading">
						<h3>Produk Kami</h3>
						<div class="clv_underline"><img src="{{ asset('template/frontend/images/org_underline2.png')}}" alt="image" /></div>
						<p>
							Produk produk terbaik kami, pesan sekarang juga dan dapatakan potongan harga terbaik bagi anda
						</p>
					</div>
				</div>
			</div>
			<div class="org_product_section">
				<div class="row">
				@foreach ($produk as $produks)
				@php
					$harga_rp = strrev(implode('.',str_split(strrev(strval($produks->harga)),3)));
					$id_produk = $produks->id;
				@endphp
					<div class="col-md-4">
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
							<a type="submit" value="{{ $produks->id }}" id="{{ $produks->id }}"  class="text-white {{ $produks->stok == 'Kosong' ? 'kosong-klik' : 'add-keranjang' }}">Masukkan Keranjang</a>
							@else
							<a href="javascript:;" class="text-white login-akun">add to cart</a>
							@endif
						</div>
					</div>
				@endforeach
				</div>
				{{-- {{ $produk->render() }} --}}
				<div class="load_more_btn"><a href="{{route('allproduk')}}" class="clv_btn">Lihat Selengkapnya</a></div>
			</div>
		</div>
	</div>
	
	@include('layouts.frontend.testimoni')

	@include('layouts.frontend.kontak')

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
                    <a href="#"> <img src="{{ asset('/template/frontend/giga/giga_putih.png') }}" alt="image" width="150px;"></a>
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
                    <a href="#"> <img src="{{ asset('/template/frontend/giga/giga_putih.png') }}" alt="image" width="150px;"></a>
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
	{{-- @if ( Auth::check() )
	<div class="profile_toggle">

		<a href="{{ route('logout') }}"
		onclick="event.preventDefault();
					  document.getElementById('logout-form').submit();"  class="text-white"><i class="fa fa-power-off fa-3x" aria-hidden="true"></i></a>
		
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
			</form>
	</div>
		@else		
		<div class="profile_toggle"><a href="javascript:;"><img src="{{ asset('/template/frontend/images/login.gif') }}" alt=""></a></div>
	@endif --}}
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
{{-- <script type="text/javascript" src="{{ URL::asset('js/cart.js') }}"></script> --}}

{{-- <script src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('template/backend/assets/js/bootstrap.bundle.min.js')}}"></script> --}}
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
<script type="text/javascript" src="{{ URL::asset('js/cart.js') }}"></script>

<!--Main js file Style-->
	
{{-- <script>
	
	// $(document).ready(function() {
			$('.add-keranjang').on('click', function()
		{
			// var produkd = $(this).prop("value");
			var id_produk = $(this).val();
			// console.log('haha', id);
			// console.log( 'hai',id );
			var id = parseInt(id_produk);
			
			console.log( 'hai', id, id_produk );

			// console.log(
			$.ajax({   
				type: 'get',   
				url: 'cart/2',   
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				// data: { produk_id: id }
			}); 
			// );
		});
	// });
</script> --}}

@endsection