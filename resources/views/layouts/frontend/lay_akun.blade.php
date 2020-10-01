<!--Breadcrumb-->
<div class="breadcrumb_wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="breadcrumb_inner">
                    <h3>Halaman Akun</h3>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="breadcrumb_block">
        <ul>
            <li><a href="{{route('akun')}}"><i class="fa fa-user"></i> Akun</a></li>
            <li><a href="{{route('akun.alamat')}}"><i class="fa fa-address-card"></i> Alamat</a></li>
            <li><a href="{{ route('history.pesan') }}"><i class="fa fa-book"></i> History Pemesanan</a></li>
            {{-- <li>History Pemesanan</li> --}}
        </ul>
    </div>
</div>