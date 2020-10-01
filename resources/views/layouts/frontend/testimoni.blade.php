
	<!--Testimonial-->
	<div id="testi" class="org_testimonial_wrapper clv_section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="clv_heading">
                            <h3>Testimoni</h3>
                            <div class="clv_underline"><img src="{{ asset('template/frontend/images/org_underline2.png')}}" alt="image" /></div>
                            <p>Mereka yang telah menggunakan produk kami.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="org_testimonial_slider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($testi as $t)
                                        <div class="swiper-slide">
                                            <div class="org_testimonial_slide">
                                                <div class="org_test_image">
                                                    <img src="{{ asset('images/testi/'.$t->pict) }}" style="width: 184px; height: 224px;" alt="image" />
                                                </div>
                                                <div class="org_testimonial_message">
                                                    <img src="{{ asset('template/frontend/images/bg_quote2.png')}}" alt="image" />
                                                    <p>{{ $t->testi }}</p>
                                                    <h5>{{ $t->nama }} <span>- {{ $t->sebagai }}</span></h5>
                                                </div>
                                                {{-- <ul class="test_social">
                                                    <li><a href="javascript:;"><span><i class="fa fa-twitter" aria-hidden="true"></i></span></a></li>
                                                    <li><a href="javascript:;"><span><i class="fa fa-linkedin" aria-hidden="true"></i></span></a></li>
                                                    <li><a href="javascript:;"><span><i class="fa fa-youtube-play" aria-hidden="true"></i></span></a></li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                </div>         
                                <!-- Add Arrows -->
                                <div class="org_test_btn org_left">
                                    <span class="arrow">
                                        
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" width="15px" height="15px">
                                          <g>
                                            <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"/>
                                          </g>
                                        </svg>
                                    </span>
                                    <span class="hover_arrow">
                                        <?xml version="1.0" encoding="iso-8859-1"?>
                                        <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 31.494 31.494" style="enable-background:new 0 0 31.494 31.494;" xml:space="preserve" width="20px" height="20px">
                                        <path style="fill:#27ae93;" d="M10.273,5.009c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571l-8.047,8.047h26.554
                                            c0.619,0,1.127,0.492,1.127,1.111c0,0.619-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587
                                            c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,5.009z"/>
                                        </svg>
                                    </span>
                                </div>
                                <div class="org_test_btn org_right">
                                    <span class="arrow">
                                        
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129" width="15px" height="15px">
                                          <g>
                                            <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z"/>
                                          </g>
                                        </svg>
                                    </span>
                                    <span class="hover_arrow">
                                        <?xml version="1.0" encoding="iso-8859-1"?>
                                        <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49;" xml:space="preserve" width="20px" height="20px">
                                        <path style="fill:#27ae93;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111
                                            C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587
                                            c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>