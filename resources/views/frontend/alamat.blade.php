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

    .breadcrumb_block ul li:before, .breadcrumb_block ul li:after {
        content: " | ";
        position: absolute;
        top: 50%;
        right: -10px;
        transform: translateY(-50%);
    }

    .user_profile_wrapper {
    padding-top: 10px;
    }

    th{
      padding: 10px;
    }
</style>
	
<div class="clv_main_wrapper index_v3">
    {{-- Header --}}
    @include('layouts.frontend.header2')
    @include('layouts.frontend.lay_akun')

    <div class="user_profile_wrapper clv_section">
        <div class="container">
            <div class="user_profile_section">

                <br>
                <div class="checkout_heading">
                    <h3>Information Alamat</h3>
                  
                </div>
                <div class="profile_form">
                  <hr>
                  <div class="row">
                    <div class="col-md-6 col-lg-6 c0l-12">
                        {{-- <br>
                        <a href="/tambahalamat" class="btn btn-primary">Tambah</a>
                        <hr> --}}
                        <table class="table-bordered">
                                <tr>
                                    <th>#</th>
                                    <th>Daerah</th>
                                    <th>Detail</th>
                                    <th>Action</th>
                                </tr>
                          
                              @foreach($alamat as $i)
                              <tr>
                                <td>
                                  {{$loop->iteration}}
                                </td>
                                <td>
                                  {{$i->jasa->tujuan}}
                                </td>
                                <td>
                                  {{$i->detail}}
                                </td>
                                <td>
                                  <form action="/alamat/{{$i->id}}" method="post">
                                    <a 
                                    class="btn btn-warning text-white"  
                                      data-toggle="modal" data-target="#myModal{{$i->id}}"
                                      ><i class="fa fa-pencil"></i></a>
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                  </form>
                                </td>
                              </tr>

                                 <!-- Modal -->
                                <div id="myModal{{$i->id}}" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                  
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          {{-- <h4 class="modal-title">Modal Header</h4> --}}
                                        </div>
                                        <div class="modal-body">
                                            <form action="/alamat/{{$i->id}}" method="POST">
                                              @method('patch')
                                              @csrf
                                              <p>Daerah</p>
                                              <select name="id_jasa" id="">
                                                  <option value="{{$i->jasa_id}}">{{$i->jasa->tujuan}}</option>
                                                  @foreach ($isi as $i2)
                                                  <option value="{{$i2->id}}">{{$i2->tujuan}}</option>
                                                  @endforeach
                                                </select>
                                              <p>Detail alamat </p>
                                              <input type="text" name="detail" value="{{ $i->detail }}" class="form-control">                                            
                                              <button class="btn btn-success" type="submit" value="Submit">Edit</button>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                  
                                    </div>
                                </div>
                              @endforeach
                        </table>
                    </div>
                    <div class="col-md-6 col-lg-6 c0l-12">
                        <form action="/alamat" method="POST">
                          @csrf
                          <div class="col-lg-12 col-md-12">
                              <div class="form_block">
                                  <h6>Daerah</h6>
                                  <select name="id_jasa" class="form_field" id="">
                                      @foreach ($isi as $i)
                                      <option value="{{$i->id}}">{{$i->tujuan}}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div>
                          <br>
                          <div class="col-lg-12 col-md-12">
                              <div class="form_block">
                                  <h6 style="padding-top: 10px !important;">Detail Alamat</h6>
                                  <textarea required class="form_field" type="text" name="detail"></textarea>
                                  {{-- <input > --}}
                                  <br style="padding-top: 20px;">
                                  <button type="submit" value="Submit" class="btn btn-primary">Tambah</button>
                              </div>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>          
              </div>
        </div>
    </div>
    <div class="clv_footer_wrapper clv_section">	
        <!--Copyright-->
        <div class="clv_copyright_wrapper">
            <p>copyright &copy; 2019 <a href="javascript:;">Giga.</a> all right reserved.</p>
        </div>
    </div>
    <!--Footer-->

@endsection