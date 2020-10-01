@extends('layouts.backend.a-navbar')
{{-- @extends('layouts.backend.b-navbar') --}}

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">
                <span class="float-md-right align-content-center"><a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk</a></span>
                <h4 class="header-title mb-4">Data Produk</h4>
            {{-- <table 
            
                id="datatable"
                id="datatable-buttons" 
                class="table table-striped table-bordered dt-responsive nowrap" 
                style="border-collapse: collapse; border-spacing: 0; width: 100%;"> --}}
                <table id="datatable" 
                class="table table-bordered dt-responsive nowrap" 
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Pict</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($produk as $produks)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $produks->nama_produk }}</td>
                        <td><img src="{{ asset('images/produk/'.$produks->gambar) }}" alt="" width="100px"></td>
                        <td>
                            @php
                                $value = $produks->deskripsi;
                                $desc = str_limit($value, 50)
                            @endphp  
                            {{ $desc }}
                        </td>
                        <td>RP. {{ $produks->harga }} <br>
                            {{ $produks->berat }}/{{ $produks->satuan }}
                        </td>
                        <td>{{ $produks->stok }}</td>
                        <td>
                            <a href="{{ route('produk.edit', $produks->id) }}" class="btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                            <br><br/>
                            <form action="{{ route('produk.destroy', $produks->id) }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">                 
                                <button type="submit" class="btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
      
@endsection