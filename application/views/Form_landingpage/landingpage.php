<!DOCTYPE html>
<html lang="en">

<head>
	<title>Booking</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="The River template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/landingpage/') ?>styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="<?= base_url('assets/landingpage/') ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/landingpage/') ?>plugins/OwlCarousel2-2.3.4/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/landingpage/') ?>plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/landingpage/') ?>plugins/OwlCarousel2-2.3.4/animate.css">
	<link href="<?= base_url('assets/landingpage/') ?>plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/landingpage/') ?>styles/booking.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/landingpage/') ?>styles/booking_responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">
			<div class="header_content d-flex flex-row align-items-center justify-content-start">
				<div class="logo"><a href="#">LABORATURIUM NUTRISI</a></div>
				<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
					<nav class="main_nav">
						<ul class="d-flex flex-row align-items-start justify-content-start">
							<li><a href="#"><?php if (isset($_SESSION['User'])) {
												echo $_SESSION['User']->Name;
											} else {
												echo 'Guest';
											} ?></a></li>
							<?php if (isset($_SESSION['User'])) { ?>
								<li><a href="about.html">Logout</a></li>
							<?php } else { ?>
								<li><a href="<?= base_url('LoginMahasiswa') ?>">Login</a></li>
							<?php } ?>
						</ul>
					</nav>
					<!-- Hamburger Menu -->
					<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
				</div>
			</div>
		</header>

		<!-- Menu -->

		<div class="menu trans_400 d-flex flex-column align-items-end justify-content-start">
			<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<div class="menu_content">
				<nav class="menu_nav text-right">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">Tentang Laboraturium</a></li>
					</ul>
				</nav>
			</div>
			<div class="menu_extra">
				<div class="menu_phone d-flex flex-row align-items-center justify-content-center">
					<span>0183-12345678</span>
				</div>
			</div>
		</div>

		<!-- Home -->

		<div class="home">
			<div class="background_image" style="background-image:url(<?= base_url('assets/landingpage/') ?>images/booking.jpg)"></div>
			<div class="home_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content text-center">
								<div class="home_title">Selamat Datang di SILAB Nutrisi</div>
								<div class="booking_form_container">
									<form action="#" class="booking_form" id="booking_form">
										<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
											<div class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
												<div style="width:100%"><input type="text" class="booking_input booking_input_a booking_in" placeholder="Pencarian Alat" required="required"></div>
											</div>
											<div><button onclick="
											" class="booking_button">Cari</button></div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Booking -->
		<div class="booking">
			<div class="container">
				<div class="row">
					<div class="col">

						<!-- Booking Slider -->
						<div class="booking_slider_container">
							<div class="owl-carousel owl-theme booking_slider">

								<!-- Slide -->
								<?php foreach ($alat as $a) { ?>
									<div class="booking_item">
										<div class="background_image" style="background-image:url(<?= base_url_img().$a->image ?>)"></div>
										<div class="booking_overlay trans_200"></div>
										<div class="booking_item_content">
											<div class="booking_item_list">
												<ul>
													<li><?= $a->description ?></li>
												</ul>
											</div>
										</div>
										<div class="booking_link"><a href="booking.html">Pinjam</a></div>
									</div>
								<?php } ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="copyright">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			Copyright &copy;<script>
				document.write(new Date().getFullYear());
			</script> All rights reserved</a>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</div>
		</footer>
	</div>

	<script src="<?= base_url('assets/landingpage/') ?>js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url('assets/landingpage/') ?>styles/bootstrap-4.1.2/popper.js"></script>
	<script src="<?= base_url('assets/landingpage/') ?>styles/bootstrap-4.1.2/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/landingpage/') ?>plugins/greensock/TweenMax.min.js"></script>
	<script src="<?= base_url('assets/landingpage/') ?>plugins/greensock/TimelineMax.min.js"></script>
	<script src="<?= base_url('assets/landingpage/') ?>plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="<?= base_url('assets/landingpage/') ?>plugins/greensock/animation.gsap.min.js"></script>
	<script src="<?= base_url('assets/landingpage/') ?>plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="<?= base_url('assets/landingpage/') ?>plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
	<script src="<?= base_url('assets/landingpage/') ?>plugins/easing/easing.js"></script>
	<script src="<?= base_url('assets/landingpage/') ?>plugins/progressbar/progressbar.min.js"></script>
	<script src="<?= base_url('assets/landingpage/') ?>plugins/parallax-js-master/parallax.min.js"></script>
	<script src="<?= base_url('assets/landingpage/') ?>plugins/jquery-datepicker/jquery-ui.js"></script>
	<script src="<?= base_url('assets/landingpage/') ?>js/booking.js"></script>
</body>

</html>