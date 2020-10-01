@extends('layouts.backend.a-navbar')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <div class="row">
                <div class="col-md-6 offset-4">
                    <h4 class="header-title mb-4">Data Member</h4>
                </div>
            </div>
            <table 
                id="datatable"
                {{-- id="datatable-buttons"  --}}
                class="table table-striped table-bordered dt-responsive nowrap" 
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>No. HP</th>
                        <th>E-Mail</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($member as $mem)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mem->name }}</td>
                        <td>
                            {{ $mem->no_hp }}
                        </td>
                        <td>
                            {{ $mem->email }}
                        </td>
                        <td>
                            <a href="#custom-modal{{ $mem->id }}" class="btn-sm btn-warning" data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a"><i class="fa fa-pencil"></i></a>
                            <br><br/>
                            <form action="#" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">                 
                                <button type="submit" class="btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" ><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>

                        <div id="custom-modal{{ $mem->id }}" class="modal-demo">
                            <button type="button" class="close" onclick="Custombox.close();">
                                <span>&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h4 class="custom-modal-title">Edit Member</h4>
                            <div class="custom-modal-text">
                                <form class="form-horizontal" action="{{route('member.update', $mem->id)}}" method="POST">
                                    <input type="hidden" name="_method" value="PATCH">
                                    @csrf
                
                                    <div class="form-group m-b-25">
                                        <div class="col-12">
                                            <label for="nama">Nama</label>
                                            <input class="form-control" value="{{ $mem->name }}" type="text" name="name" required="" placeholder="Nama">
                                        </div>
                                    </div>
                    
                                    <div class="form-group m-b-25">
                                        <div class="col-12">
                                            <label for="email">Kode Voucher</label>
                                            <input class="form-control " type="email" value="{{ $mem->email }}" name="email" required=""  placeholder="Email">
                                        </div>
                                    </div>
                
                                    <div class="form-group m-b-25">
                                        <div class="col-12">
                                            <label for="expired">Nomor Hape</label>
                                            <input type="number" value="{{ $mem->no_hp }}" name="no_hp" class="form-control" placeholder="Nomor Hape">
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
                    @endforeach
                   
                
                       

                </tbody>
            </table>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom box css -->
<link href="{{ asset('template/plugins/custombox/css/custombox.min.css')}}" rel="stylesheet">

<script src="{{ asset('template/backend/assets/js/jquery.min.js')}}"></script>

 <!-- Modal-Effect -->
 <script src="{{ asset('template/plugins/custombox/js/custombox.min.js')}}"></script>
 <script src="{{ asset('template/plugins/custombox/js/legacy.min.js')}}"></script>

@endsection
