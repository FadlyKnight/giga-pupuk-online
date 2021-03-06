@extends('layouts.backend.a-navbar')

        <!-- Bootstrap fileupload js -->
        {{-- ASU --}}
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title mb-4">Input Data Testimoni</h4>
            
            <form action="{{ route('testi.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <div class="form-group row">
                    <label class="col-3 col-form-label">Nama Client</label>
                    <div class="col-6">
                        <input required type="text" name="nama_client" placeholder="e.g.  Pupuk Organik" class="form-control">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-3 col-form-label">Jabatan</label>
                    <div class="col-6">
                        <input required name="jabatan" type="text" class="form-control">
                        {{-- <span class="font-14 text-muted">e.g. "RP. 1,500,000"</span> --}}
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-3 col-form-label">Gambar Client</label>
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
                                    <input type="file" class="btn-light" name="foto" />
                                </button>
                                {{-- <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a> --}}
                            </div>
                        </div>
                        {{-- <div class="alert alert-info"><strong>Notice!</strong> Image preview only works in IE10+, FF3.6+, Chrome6.0+ and Opera11.1+. In older browsers and Safari, the filename is shown instead.</div> --}}
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-3 col-form-label">Testimoni Client</label>
                    <div class="col-6">
                        <textarea name="testi" placeholder="e.g. Testimoni client" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
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