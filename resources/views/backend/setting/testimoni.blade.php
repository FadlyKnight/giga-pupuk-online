@extends('layouts.backend.a-navbar')
{{-- @extends('layouts.backend.b-navbar') --}}


{{-- <link href="{{ asset('template/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"> --}}

<!-- Plugins css -->
{{-- <link href="{{ asset('template/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet"> --}}
{{-- <link href="{{ asset('template/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet"> --}}

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div class="row">
                <div class="col-md-6 offset-4">
                    <h4 class="header-title mb-4">Testimoni <i class="fas fa-comment-exclamation    "></i></h4>
                </div>
                <div>
                    <a href="{{ route('create.testi')}}" class="btn btn-primary btn-rounded waves-light waves-effect w-md mr-2 mb-2">New Testimoni</a>
                </div>
            </div>
            
                {{-- <div class="form-group">
                    <label>Auto Close</label>
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                </div> --}}
            <table 
                id="#datatable-custom"
                {{-- id="datatable-buttons"  --}}
                class="table table-striped table-bordered dt-responsive nowrap" 
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama / Keterangan</th>
                        <th>Testimoni</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($testi as $t)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $t->nama }}
                            <br>
                            - {{ $t->sebagai }}</td>
                        <td>
                            <p style="">{{ $t->testi }}</p>
                        </td>
                        <td> <img src="{{ asset('images/testi/'.$t->pict) }}" width="150px" alt="" ></td>
                        <td>
                            <a href="{{ route('testi.edit', $t->id) }}" class="btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                            {{-- <br><br/> --}}
                            <form action="{{ route('testi.destroy', $t->id) }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">                 
                                <button type="submit" class="btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

</div>

<!-- Custom box css -->

<script src="{{ asset('template/backend/assets/js/jquery.min.js')}}"></script>
    
 <!-- Modal-Effect -->
 <script src="{{ asset('template/plugins/custombox/js/custombox.min.js')}}"></script>
 <script src="{{ asset('template/plugins/custombox/js/legacy.min.js')}}"></script>

@endsection

