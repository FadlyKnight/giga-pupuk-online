@extends('layouts.backend.a-navbar')

        <!-- Bootstrap fileupload js -->
        
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title mb-4">Data Produk</h4>
            
            <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <div class="form-group row">
                        <label class="col-3 col-form-label">Nama Produk</label>
                        <div class="col-6">
                            <input required type="text" name="nama_produk" placeholder="e.g.  Pupuk Organik" class="form-control">
                        </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label">Gambar Produk</label>
                    <div class="col-9">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="{{ asset('template/backend/assets/images/small/img-1.jpg')}}" alt="image" class="img-fluid" />
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                            <div>
                                <button type="button" class="btn btn-custom btn-file">
                                    <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                    <input type="file" class="btn-light" name="gambar" />
                                </button>
                                {{-- <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a> --}}
                            </div>
                        </div>
                        {{-- <div class="alert alert-info"><strong>Notice!</strong> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead.</div> --}}
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label">Harga Produk (Rp.)</label>
                    <div class="col-6">
                        <input required name="harga" type="text" placeholder="e.g. RP. 1,500,000" data-a-sign="RP. " class="form-control autonumber">
                        {{-- <span class="font-14 text-muted">e.g. "RP. 1,500,000"</span> --}}
                    </div>
                </div>

                
                <div class="form-group row">
                    <label class="col-3 col-form-label">Deskripsi</label>
                    <div class="col-6">
                        <textarea name="deskripsi" placeholder="e.g. Deskripsi Produk" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 col--xs6 col-form-label" for="category">Satuan Berat</label> 
                    {{-- <div class="row"> --}}
                        <div class="col-md-3 col--xs6">
                            <select required name="satuan" id="satuan" class="form-control btn-rounded">
                                <option value="">--Satuan Berat--</option>
                                <option value="Karung">Karung</option>
                                <option value="Kuintal">Kuintal</option>        
                                <option value="Ton">Ton</option>
                            </select>
                        </div>
                        <div class="col-md-3 col--xs6">
                            <input required type="number" min="1" name="berat" placeholder="Berat Produk" class="form-control">
                        </div>
                        <div class="col-md-3 col--xs6">
                            <select name="stok" id="" class="form-control">
                                <option value="">-- Pilih --</option>
                                <option value="Tersedia">Tersedia</option>
                                <option value="Kosong">Kosong</option>
                            </select>
                            {{-- <input required type="number" min="0" name="stok" placeholder="Stok Produk" class="form-control"> --}}
                        </div>
                    {{-- </div> --}}
                </div>
                <br/>
                <div class="form-group row">
                    <label class="col-md-3 col-xs-6 col-form-label" for="category"></label>

                    <input type="submit" class="btn btn-success col-xs-6" value="Tambah">&nbsp;&nbsp;&nbsp;
                    <input type="reset" class="btn btn-danger col-xs-6" value="Reset">
                </div>
            </form>
            
        </div>
    </div>
</div>

@endsection