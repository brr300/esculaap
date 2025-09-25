<x-layout>
<x-slot:title>
Welkom op de homepage
</x-slot:title>
<section id="slider" class="slider-element slider-parallax swiper_wrapper vh-75">
	<div class="slider-inner">

		<div class="swiper swiper-parent">
			<div class="swiper-wrapper">
				<div class="swiper-slide dark">
					<div class="container">
						<div class="slider-caption slider-caption-center">
							<h2 data-animate="fadeInUp">Welkom bij Esculaap</h2>
							<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Wij brengen Plezier in Kennis & Carrière</p>
						</div>
					</div>
					<div class="swiper-slide-bg" style="background-image: url('/assets/canvas/images/slider/swiper/1.jpg');"></div>
				</div>
				<div class="swiper-slide">
					<div class="container">
						<div class="slider-caption">
							<h2 data-animate="fadeInUp">Meer dan alleen zakkaartjes</h2>
							<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Je staat ervan te kijken wat hier allemaal te vinden is...</p>
						</div>
					</div>
					<div class="swiper-slide-bg" style="background-image: url('/assets/canvas/images/slider/swiper/3.jpg'); background-position: center top;"></div>
				</div>
			</div>
			<div class="slider-arrow-left"><i class="uil uil-angle-left-b"></i></div>
			<div class="slider-arrow-right"><i class="uil uil-angle-right-b"></i></div>
		</div>

	</div>
</section>

<!-- Content ============================================= -->
<section id="content">
	<div class="content-wrap">
		<div class="promo promo-light promo-full mb-6 header-stick border-top-0 p-5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-lg">
						<h3>Probeer Esculaap gratis voor <span>30 dagen</span> en daarna voor niets ;-)</h3>
						<span>Esculaap is <em>gratis</em> voor jou en jouw medestudenten, collega's, etc.</span>
					</div>
					<div class="col-12 col-lg-auto mt-4 mt-lg-0">
						<a href="#" class="button button-large button-circle m-0">Loze button</a>
					</div>
				</div>
			</div>
		</div>

		<div class="container">

			<div class="heading-block text-center">
				<h3>Volg ons op <span>TikTok</span></h3>
				<span>Voor de saaie overdrachten...</span>
			</div>

			<div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="1" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-xl="4">
				@for ($i = 0; $i < 4; $i++)
				<div class="portfolio-item">
					<div class="portfolio-image">
						<a href="https://www.tiktok.com/@esculaap_nl/video/7553337997937151265">
							<img src="{{ asset('assets/canvas/images/tiktok/1.png') }}" alt="T-Rex">
						</a>
						<div class="bg-overlay">
							<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
								<a target="_blank" href="https://www.tiktok.com/@esculaap_nl/video/7553337997937151265" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall" data-hover-speed="350"><i class="uil uil-ellipsis-h"></i></a>
							</div>
							<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
						</div>
					</div>
					<div class="portfolio-desc">
						<h3><a href="/">T-Rex</a></h3>
						<span>150K views</span>
					</div>
				</div>
			@endfor
			</div>
		</div>
		<div class="container">

			<div id="oc-clients" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6" style="padding: 20px 0;">

				<div class="oc-item"><a href="javascript:void(0)"><img src="{{ asset('assets/canvas/images/umc/umcu.png') }}" alt="UMC Utrecht"></a></div>
				<div class="oc-item"><a href="javascript:void(0)"><img src="{{ asset('assets/canvas/images/umc/amsterdamumc.png') }}" alt="Amsterdam UMC"></a></div>

			</div>

		</div>

		<a href="javascript:void(0)" class="button button-full text-center text-end footer-stick">
			<div class="container">
				Esculaap is <strong>nooit saai</strong> <i class="fa-solid fa-caret-right" style="top:4px;"></i>
			</div>
		</a>

	</div>

</section><!-- #content end -->
</x-layout>