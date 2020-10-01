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
    <meta name="MobileOptimized" content="320">
    
    <!-- token untuk menggunakan metode post pada laravel -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/frontend/css/font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/frontend/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/frontend/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/frontend/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/frontend/css/range.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/frontend/css/nice-select.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/frontend/css/style.css') }}">

    <link href="{{ asset('template/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="favicon.ico">
<style>
    .breadcrumb_block {
        background-color: #1FA12E !important;
    }
</style>
</head>

<body class="woocommerce-cart">
	{{-- <div class="preloader_wrapper">
		<div class="preloader_inner">
			<img src="{{ asset('template/frontend/images/preloader.gif')}}" alt="image" />
		</div>
	</div> --}}

@yield('content')

<!--Main js file Style-->
<script src="{{ asset('/template/frontend/js/jquery.js') }}"></script>
<script src="{{ asset('/template/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/template/frontend/js/swiper.min.js') }}"></script>
<script src="{{ asset('/template/frontend/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('/template/frontend/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('/template/frontend/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('/template/frontend/js/jquery.appear.js') }}"></script>
<script src="{{ asset('/template/frontend/js/jquery.countTo.js') }}"></script>
<script src="{{ asset('/template/frontend/js/isotope.min.js') }}"></script>
<script src="{{ asset('/template/frontend/js/nice-select.min.js') }}"></script>
<script src="{{ asset('/template/frontend/js/range.js') }}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
<script src="{{ asset('/template/frontend/js/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('/template/frontend/js/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('/template/frontend/js/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('/template/frontend/js/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('/template/frontend/js/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('/template/frontend/js/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('/template/frontend/js/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('/template/frontend/js/custom.js') }}"></script>


<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

<script type="text/javascript" src="{{ URL::asset('js/ongkir.js') }}"></script>

<script src="{{ asset('template/plugins/sweet-alert/sweetalert2.min.js') }}"></script>
{{-- <script src="assets/pages/jquery.sweet-alert.init.js"></script> --}}
<script>
    //Sweet Aler
    $('.kosong-klik').click(function() {
        swal(
            {
                title: 'Gagal!',
                text: 'Stok Produk Sedang Kosong',
                type: 'error',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }
        );
    });

    $('.add-keranjang').click(function() {
        swal(
            {
                title: 'Sukses!',
                text: 'Produk Telah ditambahkan dikeranjang',
                type: 'success',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }
        );
    });

    $(document).ready(function() {
        
        @if(Session::get('sukses') != NULL || Session::get('success') != NULL)
        swal(
            {
                title: 'Sukses!',
                text: '{{ Session::get("sukses") }}',
                type: 'success',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }
        )
        @endif
        @if(Session::get('pesan') != NULL)
        swal(
            {
                title: 'Sukses!',
                text: '{{ Session::get("pesan") }}',
                type: 'success',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }
        )
        @endif
        @if(Session::get('error') != NULL)
        swal(
            {
                title: 'Gagal!',
                text: '{{ Session::get("error") }}',
                type: 'error',
                confirmButtonClass: 'btn btn-confirm mt-2'
            }
        )
        @endif
    });
</script>

</body>
</html>