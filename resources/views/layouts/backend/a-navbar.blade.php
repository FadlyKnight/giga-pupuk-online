<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Giga - Pupuk Online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- token untuk menggunakan metode post pada laravel -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('template/backend/assets/images/favicon.ico') }} ">

        <!-- App css -->
        <link href="{{ asset('template/backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/backend/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/backend/assets/css/metismenu.min.css ') }}" rel="stylesheet" type="text/css" />
        <!-- Custom App style -->
        <link href="{{ asset('template/backend/assets/css/style.css ') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('template/backend/assets/js/modernizr.min.js ') }}"></script>

        <!-- File Upload CSS -->
        <link href="{{ asset('template/plugins/bootstrap-fileupload/bootstrap-fileupload.css') }}" rel="stylesheet" />

        <link href="{{ asset('template/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('template/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('template/plugins/custombox/css/custombox.min.css')}}" rel="stylesheet">
        <link href="{{ asset('template/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/plugins/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

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
                    
                    <a href="{{url('/')}}" class="logo">
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

                    @yield('content')
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
  <script>
    $(document).ready(function() {

        // Default Datatable
        $('#datatable').DataTable();

        $('#datatable-custom').DataTable({
            "columns": [
                { "width": "5%" },
                { "width": "20%" },
                { "width": "20%" },
                { "width": "20%" },
                { "width": "20%" },
            ]
        });
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