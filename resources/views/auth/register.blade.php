@extends('layouts.frontend.stylecss')
@section('content')

<style>
    @media (max-width: 991px) {
    .profile_toggle { bottom: 40px; right: 350px !important; }
    }

    .profile_toggle {
        right: 1200px ;
    }

    .profile_toggle > a {
        background-color: #1FA12E !important;
    }
</style>
<div class="profile_toggle"><a href="javascript:;">
    {{-- <h5 class="text-white" style="margin-left: 15px;"><b>Signin Here</b></h5> --}}
    <img src="{{ asset('/template/frontend/images/login.gif') }}" alt="">
</a></div>

    <div class="signup_wrapper">
        <div class="signup_inner">
            <div class="signup_details">
                <div class="site_logo">
                    <a href="index.html"> <img src="{{ asset('/template/frontend/images/logo_white.png') }}" alt="image"></a>
                </div>
                <h3>welcome to cultivation!</h3>
                <p>Consectetur adipisicing elit sed do eiusmod por incididunt uttelabore et dolore magna aliqu.</p>
                <a href="javascript:;" class="clv_btn white_btn pop_signin">sign in</a>
                <ul>
                    <li><a href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
                    <li><a href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
                    <li><a href="javascript:;"><span><i class="fa fa-linkedin" aria-hidden="true"></i></span></a></li>
                    <li><a href="javascript:;"><span><i class="fa fa-youtube-play" aria-hidden="true"></i></span></a></li>
                </ul>
            </div>
            <div class="signup_form_section">
                <h4>create account</h4>
                <img src="{{ asset('/template/frontend/images/clv_underline.png') }}" alt="image">
                <div class="form_block">
                    <input type="text" class="form_field" placeholder="Name">
                </div>
                <div class="form_block">
                    <input type="text" class="form_field" placeholder="Email">
                </div>
                <div class="form_block">
                    <input type="text" class="form_field" placeholder="Password">
                </div>
                <a href="javascript:;" class="clv_btn">sign up</a>
                <div class="social_button_section">
                    <a href="javascript:;" class="fb_btn">
                        <span><img src="{{ asset('/template/frontend/images/fb.png') }}" alt="image"></span>
                        <span>facebook</span>
                    </a>
                    <a href="javascript:;" class="google_btn">
                        <span><img src="{{ asset('/template/frontend/images/google.png') }}" alt="image"></span>
                        <span>google+</span>
                    </a>
                </div>
                <span class="success_close">
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;" xml:space="preserve" width="11px" height="11px" >
                    <g>
                        <path fill="#fec007" style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312
                        c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312
                        l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937
                        c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                    </g>
                    </svg>
                </span>
            </div>
        </div>
    </div>
    <!--SignIn Popup-->
    <div class="signin_wrapper">
        <div class="signup_inner">
            <div class="signup_details">
                <div class="site_logo">
                    <a href="index.html"> <img src="{{ asset('/template/frontend/images/logo_white.png') }}" alt="image"></a>
                </div>
                <h3>welcome to cultivation!</h3>
                <p>Consectetur adipisicing elit sed do eiusmod por incididunt uttelabore et dolore magna aliqu.</p>
                <a href="javascript:;" class="clv_btn white_btn pop_signup">sign up</a>
                <ul>
                    <li><a href="javascript:;"><span><i class="fa fa-facebook" aria-hidden="true"></i></span></a></li>
                    <li><a href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
                    <li><a href="javascript:;"><span><i class="fa fa-linkedin" aria-hidden="true"></i></span></a></li>
                    <li><a href="javascript:;"><span><i class="fa fa-youtube-play" aria-hidden="true"></i></span></a></li>
                </ul>
            </div>
            <div class="signup_form_section">
                <h4>sign in account</h4>
                <img src="{{ asset('/template/frontend/images/clv_underline.png') }}" alt="image">
                <div class="form_block">
                    <input type="text" class="form_field" placeholder="Email">
                </div>
                <div class="form_block">
                    <input type="text" class="form_field" placeholder="Password">
                </div>
                <a href="javascript:;" class="clv_btn">sign up</a>
                <div class="social_button_section">
                    <a href="javascript:;" class="fb_btn">
                        <span><img src="{{ asset('/template/frontend/images/fb.png') }}" alt="image"></span>
                        <span>facebook</span>
                    </a>
                    <a href="javascript:;" class="google_btn">
                        <span><img src="{{ asset('/template/frontend/images/google.png') }}" alt="image"></span>
                        <span>google+</span>
                    </a>
                </div>
                <span class="success_close">
                    <?xml version="1.0" encoding="iso-8859-1"?>
                    <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;" xml:space="preserve" width="11px" height="11px" >
                    <g>
                        <path fill="#fec007" style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312
                        c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312
                        l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937
                        c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                    </g>
                    </svg>
                </span>
            </div>
        </div>
    </div>

@endsection