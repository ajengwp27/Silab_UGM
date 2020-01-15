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
                        <div class="home_title">Selamat Datang di Biokimia Nutrisi</div>
                        <div class="booking_form_container">
                            <form action="<?= base_url('pencarian') ?>" method="get" class="booking_form" id="booking_form">
                                <div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
                                    <div class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
                                        <div style="width:100%"><input type="text" style="width:100%; height: 5.4vh; padding:10px" name="key" placeholder="Pencarian Alat"></div>
                                    </div>
                                    <div><button type="submit" class="btn btn-success" style="height: 5.4vh;">Cari</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div>
    <div class="container">
        <div class="col-md-4">
            <div class="panel panel-default text-center">
                <div class="panel-body" style="min-height: 25vh;">
                    <h4 class="text-primary ">Info Laboratorium</h4>
                    <hr>
                    <div class="bg-primary"><i class="fa fa-info-circle"></i></div>
                    <br>
                    Informasi Umum tentang Laboratorium terkait. Berisi tentang profil singkat laboratorium dengan dilengkapi keterangan pengelola.
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default text-center">
                <div class="panel-body" style="min-height: 25vh;">
                    <h4 class="text-info">Penggunaan Alat</h4>
                    <hr>
                    <div class="bg-info"><i class="fa fa-refresh"></i></div>
                    <br>
                    Sistem penggunaan alat atau fasilitas laboratorium bagi civitas akademika Universitas Gadjah Mada dan pengguna dari kalangan umum.
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default text-center">
                <div class="panel-body" style="min-height: 25vh;">
                    <h4 class="text-success">Kunjungi Laboratorium</h4>
                    <hr>
                    <div class="bg-success"><i class="fa fa-check-square"></i></div>
                    <br>
                    Ingin tau tentang lab terkait lebih jauh? Anda dapat menghubungi kami atau lab terkait, sesuai dengan rencana kunjungan Anda.
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>
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