<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="{{ asset('assets/canvas/style.css') }}">

	<!-- Font Icons -->
	<link rel="stylesheet" href="{{ asset('assets/canvas/css/font-icons.css') }}">

	<!-- Plugins/Components CSS -->
	<link rel="stylesheet" href="{{ asset('assets/canvas/css/swiper.css') }}">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('assets/canvas/css/custom.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title>{{ isset($title) ? $title . ' - Esculaap' : 'Esculaap' }}</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
						<a href="/">
								<img class="logo-default" srcset="{{ asset('assets/canvas/images/logo.png') }}, {{ asset('assets/canvas/images/logo@2x.png') }} 2x" src="{{ asset('assets/canvas/images/logo@2x.png') }}" alt="Esculaap Logo">
							</a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="uil uil-search"></i><i class="bi-x-lg"></i></a>
							</div><!-- #top-search end -->

						</div>

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item">
									<a class="menu-link" href="index.html"><div>Home</div></a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="index.html"><div>Vacatures</div></a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="index.html"><div>Zakkaartjes</div></a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="#" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; klik enter!" autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		{{ $slot }}

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="row col-mb-50">
								<div class="col-md-6">

									<div class="widget">

										<img src="{{ asset('assets/canvas/images/footer-widget-logo.png') }}" alt="Image" class="footer-logo">

										<p>Wij brengen <strong>Plezier</strong> in <strong>Kennis</strong> &amp; <strong>Carrière</strong>.</p>

							<div style="background: url('/assets/canvas/images/world-map.png') no-repeat center center; background-size: 100%;">
											<address>
												<strong>Headquarters:</strong><br>
												Mr. Treublaan 7<br>
												1097 DG Amsterdam<br>
											</address>
											<abbr title="Email Address"><strong>Email:</strong></abbr> info@esculaap.nl
										</div>

									</div>

								</div>
							</div>

						</div>

						<div class="col-lg-4">

							<div class="row col-mb-50">
								<div class="col-md-6 col-lg-12">
									<div class="widget">

										<div class="row col-mb-30">
											<div class="col-lg-6">
												<div class="counter counter-small"><span data-from="50" data-to="570000" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
												<h5 class="mb-0">Downloads zakkaartjes</h5>
											</div>

											<div class="col-lg-6">
												<div class="counter counter-small"><span data-from="100" data-to="42000" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
												<h5 class="mb-0">Geregistreerde gebruikers</h5>
											</div>
										</div>

									</div>
								</div>

								<div class="col-md-5 col-lg-12">
									<div class="widget subscribe-widget">
										<h5><strong>Schrijf je in</strong> voor onze nieuwsbrief en mis niets van Esculaap!</h5>
										<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="#" method="post" class="mb-0">
											<div class="input-group mx-auto">
												<div class="input-group-text"><i class="bi-envelope-plus"></i></div>
												<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Jouw e-mailadres">
												<button class="btn btn-success" type="submit">Subscribe</button>
											</div>
										</form>
									</div>
								</div>

								<div class="col-md-3 col-lg-12">
									<div class="widget">

										<div class="row col-mb-30">
											<div class="col-6 col-md-12 col-lg-6 d-flex align-items-center">
												<a href="#" class="social-icon text-white border-transparent bg-tiktok me-2 mb-0 float-none">
													<i class="fa-brands fa-tiktok-f"></i>
													<i class="fa-brands fa-tiktok-f"></i>
												</a>
												<a href="#" class="ms-1"><small class="d-block"><strong>Volg ons</strong><br>op TikTok</small></a>
											</div>
										</div>

									</div>
								</div>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-start">
							Copyright &copy; {{ date('Y') }} Alle rechten voorbehouden door Esculaap<br>
							<div class="copyright-links"><a href="#">gebruikersvoorwaarden</a> / <a href="#">privacybeleid</a></div>
						</div>

						<div class="col-md-6 text-center text-md-end">
							<div class="d-flex justify-content-center justify-content-md-end mb-2">
								<a href="#" class="social-icon border-transparent si-small h-bg-instagram">
									<i class="fa-brands fa-instagram-f"></i>
									<i class="fa-brands fa-instagram-f"></i>
								</a>

							</div>

							<i class="bi-envelope"></i> info@esculaap.nl <span class="middot">&middot;</span> <i class="fa-solid fa-phone"></i> +31 20 000000 <span class="middot">&middot;</span>
						</div>

					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('assets/canvas/js/plugins.min.js') }}"></script>
	<script src="{{ asset('assets/canvas/js/functions.bundle.js') }}"></script>

</body>
</html>