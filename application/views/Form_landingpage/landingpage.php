<!DOCTYPE html>
<html lang="en">

<?php include("header.php") ?>

<!-- Menu -->



<!-- Home -->

<div class="home" style="height: 391px;">
	<div class="background_image" style="background-image:url(<?= base_url('assets/img/ugm.png')  ?>"></div>
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
									<div><button class="btn btn-primary" href="<?= base_url('Controller_landingpage/landingpage/peminjaman') ?>">Cari</button></div>
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
							<div class="background_image" style="background-image:url(<?= base_url_img() . $a->image ?>)"></div>
							<div class="booking_overlay trans_200"></div>
							<div class="booking_item_content">
								<div class="booking_item_list">
									<ul>
										<li><?= $a->description ?></li>
									</ul>
								</div>
							</div>
							<div class="booking_link"><a href="">Pinjam</a></div>
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