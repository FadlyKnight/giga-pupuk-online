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
    padding-top: 100px;
    }
</style>
	
<div class="clv_main_wrapper index_v3">
    {{-- Header --}}
    @include('layouts.frontend.header2')
    @include('layouts.frontend.lay_akun')
<!--User Profile-->
<div class="user_profile_wrapper clv_section">
    <div class="container">
        <div class="user_profile_section">
            {{-- <div class="profile_image_block">
                <div class="user_profile_img">
                    <img src="https://via.placeholder.com/172x172" alt="image">
                    <input type="file" id="user_profile">
                    <label for="user_profile">
                        <span>
                            <?xml version="1.0" encoding="iso-8859-1"?>
                            <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="20px" height="20px" viewBox="0 0 485.219 485.22" style="enable-background:new 0 0 485.219 485.22;"
                                    xml:space="preserve">
                            <g>
                                <path fill="#ffffff" d="M467.476,146.438l-21.445,21.455L317.35,39.23l21.445-21.457c23.689-23.692,62.104-23.692,85.795,0l42.886,42.897
                                    C491.133,84.349,491.133,122.748,467.476,146.438z M167.233,403.748c-5.922,5.922-5.922,15.513,0,21.436
                                    c5.925,5.955,15.521,5.955,21.443,0L424.59,189.335l-21.469-21.457L167.233,403.748z M60,296.54c-5.925,5.927-5.925,15.514,0,21.44
                                    c5.922,5.923,15.518,5.923,21.443,0L317.35,82.113L295.914,60.67L60,296.54z M338.767,103.54L102.881,339.421
                                    c-11.845,11.822-11.815,31.041,0,42.886c11.85,11.846,31.038,11.901,42.914-0.032l235.886-235.837L338.767,103.54z
                                        M145.734,446.572c-7.253-7.262-10.749-16.465-12.05-25.948c-3.083,0.476-6.188,0.919-9.36,0.919
                                    c-16.202,0-31.419-6.333-42.881-17.795c-11.462-11.491-17.77-26.687-17.77-42.887c0-2.954,0.443-5.833,0.859-8.703
                                    c-9.803-1.335-18.864-5.629-25.972-12.737c-0.682-0.677-0.917-1.596-1.538-2.338L0,485.216l147.748-36.986
                                    C147.097,447.637,146.36,447.193,145.734,446.572z"/>
                            </g>
                            </svg>
                        </span>
                    </label>
                </div>
            </div> --}}
            <div class="checkout_heading">
                <h3>information akun</h3>
                <a href="javascript:;">
                    <span>
                        <?xml version="1.0" encoding="iso-8859-1"?>
                        <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="12px" height="12px" viewBox="0 0 485.219 485.22" style="enable-background:new 0 0 485.219 485.22;"
                                xml:space="preserve">
                        <g>
                            <path fill="#fec007" d="M467.476,146.438l-21.445,21.455L317.35,39.23l21.445-21.457c23.689-23.692,62.104-23.692,85.795,0l42.886,42.897
                                C491.133,84.349,491.133,122.748,467.476,146.438z M167.233,403.748c-5.922,5.922-5.922,15.513,0,21.436
                                c5.925,5.955,15.521,5.955,21.443,0L424.59,189.335l-21.469-21.457L167.233,403.748z M60,296.54c-5.925,5.927-5.925,15.514,0,21.44
                                c5.922,5.923,15.518,5.923,21.443,0L317.35,82.113L295.914,60.67L60,296.54z M338.767,103.54L102.881,339.421
                                c-11.845,11.822-11.815,31.041,0,42.886c11.85,11.846,31.038,11.901,42.914-0.032l235.886-235.837L338.767,103.54z
                                    M145.734,446.572c-7.253-7.262-10.749-16.465-12.05-25.948c-3.083,0.476-6.188,0.919-9.36,0.919
                                c-16.202,0-31.419-6.333-42.881-17.795c-11.462-11.491-17.77-26.687-17.77-42.887c0-2.954,0.443-5.833,0.859-8.703
                                c-9.803-1.335-18.864-5.629-25.972-12.737c-0.682-0.677-0.917-1.596-1.538-2.338L0,485.216l147.748-36.986
                                C147.097,447.637,146.36,447.193,145.734,446.572z"/>
                        </g>
                        </svg>
                    </span>
                    edit profile
                </a>
            </div>
            <div class="profile_form">
                <form action="{{ route('akun.edit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form_block">
                                <h6>Nama Depan</h6>
                                <input required name="name" value="{{ $user->name }}" type="text" class="form_field" placeholder="John David" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form_block">
                                <h6>Nama Belakang</h6>
                                <input name="nama_lengkap" value="{{ $user->nama_lengkap }}" type="text" class="form_field" placeholder="Parker" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form_block">
                                <h6>Email</h6>
                                <input name="email" value="{{ $user->email }}" type="text" class="form_field" placeholder="John@example.com" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form_block">
                                <h6>contact no.</h6>
                                <input required name="no_hp" value="{{ $user->no_hp }}" type="text" class="form_field" placeholder="+(81) 16002-123-123" >
                            </div>
                        </div>
                        {{-- <div class="col-lg-12 col-md-12">
                            <div class="form_block">
                                <h6>address</h6>
                                <textarea class="form_field" placeholder="John@example.com" ></textarea>
                            </div>
                        </div> --}}
                        <div class="col-lg-12 col-md-12">
                            <div class="save_btn"><button type="submit" class="clv_btn">save</button></div>
                        </div>
                    </div>
                </form>
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

</div>
@endsection