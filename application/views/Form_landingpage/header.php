<head>
    <title>LABORATURIUM UGM</title>
    <meta charset="utf-8">
    <!-- <meta http-equiv="refresh" content="190;URL='<?= base_url("Userlanding")?>'" /> -->
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="description" content="The River template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets/landingpage/') ?>styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="<?= base_url('assets/landingpage/') ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets/landingpage/') ?>plugins/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets/landingpage/') ?>plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets/landingpage/') ?>plugins/OwlCarousel2-2.3.4/animate.css">
    <link href="<?= base_url('assets/landingpage/') ?>plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/landingpage/') ?>styles/booking.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/landingpage/') ?>styles/booking_responsive.css">
    <link rel="stylesheet"
        href="<?= base_url('assets/landingpage/detail/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link href='<?= base_url('assets/') ?>css/animate.min.css' rel='stylesheet'>
    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="<?= base_url('assets/landingpage/detail/') ?>bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet"
        href="<?= base_url('assets/landingpage/detail/') ?>bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/landingpage/detail/') ?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url('assets/landingpage/detail/') ?>dist/css/skins/_all-skins.min.css">
    <script src="<?= base_url('assets/landingpage/detail/') ?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url('assets/landingpage/detail/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js">
    </script>
    <!-- FastClick -->
    <script src="<?= base_url('assets/landingpage/detail/') ?>bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/landingpage/detail/') ?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets/landingpage/detail/') ?>dist/js/demo.js"></script>

    <script src="<?php echo base_url('assets/') ?>js/bootstrap-notify.js"></script>
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">
            <div class="header_content d-flex flex-row align-items-center justify-content-start" style="padding-left:0px; padding-right:0px ;background-color: rgb(82, 81, 97); " >
                <div class="logo" style="margin-left: 62px;"><a href="<?= base_url("Userlanding")?>">LABORATURIUM NUTRISI</a></div>
                <div style="padding-right:62px;"class="ml-auto d-flex flex-row align-items-center justify-content-start">
                    <nav class="main_nav">
                        <ul class="d-flex flex-row align-items-start justify-content-start">
                            <?php if (isset($_SESSION['User'])) {?>
							<li><a style="color:white;"
                                    href="<?= base_url("riwayatPeminjaman/").$_SESSION['User']->id_mahasiswa; ?>">
                                    Riwayat Peminjaman </a>
                            </li>
                            <li><a
                                    href="<?= base_url("formpeminjaman") ?>">
                                    Form Peminjaman </a>
							</li>
						
							<?php }?>
							
                            <li><a href="#"><?php if (isset($_SESSION['User'])) {
												echo $_SESSION['User']->Name;
											} else {
												echo 'Guest';
											} ?></a></li>
                            <?php if (isset($_SESSION['User'])) { ?>
                            <li><a href="<?= base_url('Controller_landingpage/Login_user/logout') ?>">Logout</a></li>
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