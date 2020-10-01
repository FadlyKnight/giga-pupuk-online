<!--Banner Slider-->
{{-- <style>
	.index_v3 .clv_banner_slider .clv_slide {
		background: url(https://via.placeholder.com/1920x1080) no-repeat center;
		background-size: cover;
		padding: 312px 0px;
	}
</style> --}}

<div class="clv_banner_slider">
		<!-- Swiper -->
		<div class="swiper-container">
			<div class="swiper-wrapper">
				@foreach ($slider as $s)
				<div class="swiper-slide">
					<div class="clv_slide"
					style="background: url({{ asset('images/slider/'.$s->pict) }}) no-repeat center;
					background-size: cover;
					padding: 312px 0px;
					">
						<div class="container">
							<div class="clv_slide_inner">
								<h1>{{ $s->title }}</h1>
								<img src="{{ asset('template/frontend/images/dairy_underline.png')}}" alt="image" />
								<h6>{{ $s->content }}.</h6>
								{{-- <a href="javascript:;" class="clv_btn2">read more</a> --}}
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<!-- Add Arrows -->
			<span class="slider_arrow banner_left left_arrow">
				<svg 
				 xmlns="http://www.w3.org/2000/svg"
				 xmlns:xlink="http://www.w3.org/1999/xlink"
				 width="10px" height="20px">
				<path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
				 d="M0.272,10.703 L8.434,19.703 C8.792,20.095 9.372,20.095 9.731,19.703 C10.089,19.308 10.089,18.668 9.731,18.274 L2.217,9.990 L9.730,1.706 C10.089,1.310 10.089,0.672 9.730,0.277 C9.372,-0.118 8.791,-0.118 8.433,0.277 L0.271,9.274 C-0.082,9.666 -0.082,10.315 0.272,10.703 Z"/>
				</svg>
			</span>
			<span class="slider_arrow banner_right right_arrow">
				<svg 
				 xmlns="http://www.w3.org/2000/svg"
				 xmlns:xlink="http://www.w3.org/1999/xlink"
				 width="10px" height="20px">
				<path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
				 d="M9.728,10.703 L1.566,19.703 C1.208,20.095 0.627,20.095 0.268,19.703 C-0.090,19.308 -0.090,18.668 0.268,18.274 L7.783,9.990 L0.269,1.706 C-0.089,1.310 -0.089,0.672 0.269,0.277 C0.627,-0.118 1.209,-0.118 1.567,0.277 L9.729,9.274 C10.081,9.666 10.081,10.315 9.728,10.703 Z"/>
				</svg>
			</span>
		</div>
	</div>