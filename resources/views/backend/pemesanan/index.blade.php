<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Giga - Pupuk Online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('template/backend/assets/images/favicon.ico') }} ">

        <!-- App css -->
        <link href="{{ asset('template/backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/backend/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/backend/assets/css/metismenu.min.css ') }}" rel="stylesheet" type="text/css" />
        <!-- Custom App style -->
        <link href="{{ asset('template/backend/assets/css/style.css ') }}" rel="stylesheet" type="text/css" />

        <!-- Custom box css -->
        <link href="{{ asset('template/plugins/custombox/css/custombox.min.css')}}" rel="stylesheet">


        <script src="{{ asset('template/backend/assets/js/modernizr.min.js ') }}"></script>

        <!-- File Upload CSS -->
        <link href="{{ asset('template/plugins/bootstrap-fileupload/bootstrap-fileupload.css') }}" rel="stylesheet" />

        <link href="{{ asset('template/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->

        <!--Footable-->
        <link href="{{ asset('template/plugins/footable/css/footable.core.css')}}" rel="stylesheet">

    </head>
<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">

            <div class="slimscroll-menu" id="remove-scroll">
                <!-- LOGO -->
                {{-- <div class="topbar-left">
                    <a href="index.php" class="logo">
                        <span>
                            <img src="{{ asset('template/backend/assets/images/logo.png') }}" alt="" height="22">
                        </span>
                        <i>
                            <img src="{{ asset('template/backend/assets/images/logo_sm.png') }}" alt="" height="28">
                        </i>
                    </a>
                </div> --}}
                <!-- User box -->
                <div class="user-box">
                    <a href="{{url('/')}}">
                        <div class="user-img">
                            <img src="{{ asset('template/frontend/giga/giga.png') }}" alt="Giga"  width="50px" />
                        </div>
                    </a>
                    
                    <h5><a href="#">Giga</a> </h5>
                    <p class="text-muted">Admin Head</p>
                </div>

                @include('layouts.backend.sidebar')

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->

        <div class="content-page">

            <!-- Top Bar Start -->

            @include('layouts.backend.topbar')
            <!-- Top Bar End -->



            <!-- Start Page content -->
            <div class="content">
                <div class="container-fluid">
                    @php
                        function rupiah($angka)
                        {
                            return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
                        }
                    @endphp
<div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title mb-4">Data Produk</h4>
                <table 
                    id="datatable"
                    {{-- id="datatable-buttons"  --}}
                    class="table table-striped table-bordered dt-responsive nowrap" 
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>-Action-</th>
                            <th>Order ID</th>
                            <th>Nama</th>
                            <th style="width: 10% !important;">Alamat Kirim</th>
                            <th>Total</th>
                            <th>Status Pemesanan</th>
                        </tr>
                    </thead>
    
                    <tbody>
                      @foreach ($keranjang->where('status', 'Checkout')->groupBy('pemesanan_id') as $i => $k)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="col-md-12">
                                    <div class="row">
                                        <a href="#custom-modal{{ $k[ ($k->count() - 1) ]->pemesanan->id }}" class="btn-sm btn-warning" data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a"><i class="fa fa-pencil"></i></a>
                                        <a href="#custom-modal-detail{{ $k[ ($k->count() - 1) ]->pemesanan->id }}" class="btn-sm btn-primary" data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a"><i class="fa fa-eye"></i></a>
                                
                                        <form action="{{route('pemesanan.destroy', $k[ ($k->count() - 1) ]->pemesanan->id) }}" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">                 
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    
                                    </div>
                                </div>
                            </td>
                            <td>{{ $k[ ($k->count() - 1) ]->pemesanan->id }}</td>
                            <td>{{ $k[ ($k->count() - 1) ]->pemesanan->user->name }} </td>
                            <td>
                                {{ $k[ ($k->count() - 1) ]->pemesanan->jasa->tujuan }} 
                                <br>
                                {{-- {{ $k[ ($k->count() - 1) ]->pemesanan->alamat->detail  }} --}}
                            </td>
                            
                            <td>{{ rupiah($k[ ($k->count() - 1) ]->pemesanan->total_harga) }}
                            <br><span style="font-size: 8pt;">Kode Pembayaran :</span> {{ $k[ ($k->count() - 1) ]->pemesanan->kode_verifikasi }}
                            </td>
                            <td>{{ $k[ ($k->count() - 1) ]->pemesanan->status_pesan }}</td>
                            
                        </tr>
                        <div id="custom-modal-detail{{ $k[ ($k->count() - 1) ]->pemesanan->id }}" class="modal-demo">
                            <button type="button" class="close" onclick="Custombox.close();">
                                <span>&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h4 class="custom-modal-title">Detail Pemesanan</h4>
                            <div class="custom-modal-text">
                                <div class="row">
                                    <div class="col-md-3">
                                        Nama Produk
                                    </div>
                                    <div class="col-md-2">
                                        Jumlah
                                    </div>
                                    <div class="col-md-2">
                                        Harga
                                    </div>
                                    <div class="col-md-2">
                                        Satuan
                                    </div>
                                    <div class="col-md-2">
                                        Sub Total
                                    </div>
                                </div>
                                <hr style="border-width: 2px">
                            @foreach ($k as $i => $krnj)
                                 <div class="row">
                                    <div class="col-md-3">
                                            {{ $krnj->produk->nama_produk }}
                                    </div>
                                    <div class="col-md-1">
                                            {{ $krnj->jumlah }}
                                    </div>
                                    <div class="col-md-3">
                                            {{ rupiah($krnj->produk->harga) }}
                                    </div>
                                    <div class="col-md-2">
                                            {{ $krnj->produk->satuan }}
                                    </div>
                                    <div class="col-md-2 d-flex justify-content-end" >
                                            {{ ($krnj->jumlah * $krnj->produk->harga) }}
                                    </div>
                                </div>
                                <hr style="border-width: 1px">
                            @endforeach
                            <div class="row">
                                {{-- <div class="offset-md-7 d-flex justify-content-end">
                                    <p>{{ $k[ ($k->count() - 1) ]->pemesanan->alamat->jasa->harga_jasa }}</p>
                                </div>
                            
                                <div class="offset-md-7 d-flex justify-content-end">
                                    <p>{{ $k[ ($k->count() - 1) ]->pemesanan->total_harga }}</p>
                                </div>
                                <div class="offset-md-7 d-flex justify-content-end">
                                    Total Pembayaran : <p>{{ $k[ ($k->count() - 1) ]->pemesanan->total_harga }}</p>
                                </div> --}}
                            </div>
                            </div>

                        </div>
                      <div id="custom-modal{{ $k[ ($k->count() - 1) ]->pemesanan->id }}" class="modal-demo">
                            <button type="button" class="close" onclick="Custombox.close();">
                                <span>&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h4 class="custom-modal-title">Edit Status Pemesanan</h4>
                            <div class="custom-modal-text">
                                <form class="form-horizontal" action="{{route('pemesanan.update', $k[ ($k->count() - 1) ]->pemesanan->id)}}" method="POST">
                                    <input type="hidden" name="_method" value="PATCH">
                                    @csrf

                                    <div class="form-group m-b-25">
                                        <div class="col-12">
                                            <label for="sts">Status Pemesanan</label>
                                            {{-- <input class="form-control" value="{{ $disc->jumlah_diskon }}" type="number" id="Jumlah_diskon" name="jumlah_diskon" required="" placeholder="RP. 20.000,00"> --}}
                                            <select class="form-control" name="status" id="sts">
                                                <option value="Default">Default</option>
                                                <option value="Diterima">Diterima</option>
                                                <option value="Ditolak">Ditolak</option>
                                            </select>
                                        </div>
                                    </div>
        
                                    <div class="form-group account-btn text-center m-t-10">
                                        <div class="col-12">
                                            <button class="btn w-lg btn-rounded btn-custom waves-effect waves-light" type="submit">Submit</button>
                                        </div>
                                    </div>
                    
                                </form>
                            </div>
                        </div>
                
                        </div>
                    </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
                    <!-- end row -->
                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer text-right">
                2018 © Highdmin. - Coderthemes.com
            </footer>

        </div> 
        <!-- content-page -->
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    @include('layouts.backend.footerstart')

    
        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="asset/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="{{ asset('template/plugins/jquery-knob/jquery.knob.js')}}"></script>

        <!-- Dashboard Init -->
        <script src="{{ asset('template/backend/assets/pages/jquery.dashboard.init.js')}}"></script>

<!-- File Upload JS -->
<script src="{{ asset('template/plugins/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>

<!-- Select Picker-->
{{-- <script src="{{ asset('template/plugins/bootstrap-select/js/bootstrap-select.js') }}" type="text/javascript"></script>
<script src="{{ asset('template/plugins/select2/js/select2.min.js') }}" type="text/javascript"></script> --}}

<!-- Init Js file -->
<script src="{{ asset('template/backend/assets/pages/jquery.form-advanced.init.js') }}"></script>

  <!-- Required datatable js -->
  <script src="{{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Key Tables -->
  <script src="{{ asset('template/plugins/datatables/dataTables.keyTable.min.js') }}"></script>

  <!-- Responsive examples -->
  <script src="{{ asset('template/plugins/datatables/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

  <!-- Selection table -->
  <script src="{{ asset('template/plugins/datatables/dataTables.select.min.js') }}"></script>

  <!-- Buttons examples -->
  <script src="{{ asset('template/plugins/datatables/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables/jszip.min.js') }}"></script>
  {{-- <script src="{{ asset('template/plugins/datatables/pdfmake.min.js') }}"></script> --}}
  <script src="{{ asset('template/plugins/datatables/vfs_fonts.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('template/plugins/datatables/buttons.print.min.js') }}"></script>

  <!-- Modal-Effect -->
 <script src="{{ asset('template/plugins/custombox/js/custombox.min.js')}}"></script>
 <script src="{{ asset('template/plugins/custombox/js/legacy.min.js')}}"></script>

  <script>
    $(document).ready(function() {

        // Default Datatable
        $('#datatable').DataTable();

        //Buttons examples
        var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf']
        });

        // Key Tables

        $('#key-table').DataTable({
            keys: true
        });

        // Responsive Datatable
        $('#responsive-datatable').DataTable();

        // Multi Selection Datatable
        $('#selection-datatable').DataTable({
            select: {
                style: 'multi'
            }
        });

        table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
    } );

    </script>
        
<!-- AUTO NUMBER -->
<script src="{{ asset('template/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
<script src="{{ asset('template/plugins/autoNumeric/autoNumeric.js')}}"></script>
<script>
    jQuery(function($) {
        $('.autonumber').autoNumeric('init');
    });
    jQuery.browser = {};
    (function () {
        jQuery.browser.msie = false;
        jQuery.browser.version = 0;
        if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
            jQuery.browser.msie = true;
            jQuery.browser.version = RegExp.$1;
        }
    })();
</script>

        <!-- plugin js -->
<script src="{{ asset('template/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('template/plugins/bootstrap-timepicker/bootstrap-timepicker.js') }}"></script>
<script src="{{ asset('template/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('template/plugins/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
<script src="{{ asset('template/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('template/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

<!-- Init js -->
<script src="{{ asset('template/backend/assets/pages/jquery.form-pickers.init.js')}}"></script>


    <!--FooTable-->
    <script src="{{ asset('template/plugins/footable/js/footable.all.min.js')}}"></script>
    <!--FooTable Example-->
    <script src="{{ asset('template/backend/assets/pages/jquery.footable.js')}}"></script>
    @yield('forscript')

    @include('layouts.backend.footerend')

</body>
</html>