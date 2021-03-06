<!DOCTYPE html>
<html lang="en">

<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Laboraturium Nutrisi UGM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
    <meta name="author" content="Muhammad Usman">

    <!-- The styles -->
    <!-- <link href="<?= base_url('assets/') ?>css/bootstrap-cerulean.min.css" rel="stylesheet"> -->
    <!-- <link href="<?= base_url('assets/') ?>css/bootstrap-spacelab.min.css" rel="stylesheet"> -->
    <link href="<?= base_url('assets/') ?>css/bootstrap-cyborg.min.css" rel="stylesheet">
    <!-- <link href="<?= base_url('assets/') ?>css/bootstrap-slate.min.css" rel="stylesheet"> -->
    <!-- <link href="<?= base_url('assets/') ?>css/bootstrap-lumen.min.css" rel="stylesheet"> -->
    <!-- <link href="<?= base_url('assets/') ?>css/bootstrap-simplex.min.css" rel="stylesheet"> -->

    <link href="<?= base_url('assets/') ?>css/charisma-app.css" rel="stylesheet">
    <link href='<?= base_url('assets/') ?>bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?= base_url('assets/') ?>bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?= base_url('assets/') ?>bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?= base_url('assets/') ?>bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?= base_url('assets/') ?>bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?= base_url('assets/') ?>bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?= base_url('assets/') ?>css/jquery.noty.css' rel='stylesheet'>
    <link href='<?= base_url('assets/') ?>css/noty_theme_default.css' rel='stylesheet'>
    <link href='<?= base_url('assets/') ?>css/elfinder.min.css' rel='stylesheet'>
    <link href='<?= base_url('assets/') ?>css/elfinder.theme.css' rel='stylesheet'>
    <link href='<?= base_url('assets/') ?>css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?= base_url('assets/') ?>css/uploadify.css' rel='stylesheet'>
    <link href='<?= base_url('assets/') ?>css/animate.min.css' rel='stylesheet'>

    <!-- jQuery -->
    <script src="<?= base_url('assets/') ?>bower_components/jquery/jquery.min.js"></script>

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body style="opacity:0.9;background-image:url('<?= base_url('assets/') ?>img/loginuser.jpg'); background-size: cover;background-repeat: no-repeat;background-position: inherit; overflow: hidden;">
    <div class="ch-container">
        <div class="row">

            <div class="row">
                <div class="col-md-12 center login-header">
                    <img src="<?= base_url('assets/img/logosilb.png') ?>">
                    <h2>LOGIN SILAB NUTRISI UGM</h2>
                </div>
                <!--/span-->
            </div>
            <!--/row-->

            <div class="row" style="margin-top: 48px;">
                <div class="well col-md-5 center login-box" style="border-radius: 20px; background-color: grey;">
                    <div class="alert alert-info">
                        Please login with your NIM and Password.
                    </div>
                    <form class="form-horizontal" action="<?= base_url('Controller_landingpage/Login_user/login') ?>" method="post">
                        <fieldset>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                                <input type="text" name="NIM" class="form-control" placeholder="NIM">
                            </div>
                            <div class="clearfix"></div><br>

                            <div class="input-group input-group-lg">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="clearfix"></div>


                            <div class="clearfix"></div>
                            <div style="margin-top:10px;">
                                <p class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </p>
                                <p class="col-md-4">
                                    <a href="<?= base_url('Controller_landingpage/Reg_user_mahasiswa') ?>" class="btn btn-primary">Register</a>
                                </p>
                                <p class="col-md-4">
                                    <a href="<?= base_url('ResetOTP') ?>" class="btn btn-primary">Reset Password</a>
                                </p>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
        </div>
        <!--/fluid-row-->

    </div>
    
    <!--/.fluid-container-->

    <!-- external javascript -->

    <script src="<?= base_url('assets/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- library for cookie management -->
    <script src="<?= base_url('assets/') ?>js/jquery.cookie.js"></script>
    <!-- calender plugin -->
    <script src='<?= base_url('assets/') ?>bower_components/moment/min/moment.min.js'></script>
    <script src='<?= base_url('assets/') ?>bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
    <!-- data table plugin -->
    <script src='<?= base_url('assets/') ?>js/jquery.dataTables.min.js'></script>

    <!-- select or dropdown enhancer -->
    <script src="<?= base_url('assets/') ?>bower_components/chosen/chosen.jquery.min.js"></script>
    <!-- plugin for gallery image view -->
    <script src="<?= base_url('assets/') ?>bower_components/colorbox/jquery.colorbox-min.js"></script>
    <!-- notification plugin -->
    <script src="<?= base_url('assets/') ?>js/jquery.noty.js"></script>
    <!-- library for making tables responsive -->
    <script src="<?= base_url('assets/') ?>bower_components/responsive-tables/responsive-tables.js"></script>
    <!-- tour plugin -->
    <script src="<?= base_url('assets/') ?>bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
    <!-- star rating plugin -->
    <script src="<?= base_url('assets/') ?>js/jquery.raty.min.js"></script>
    <!-- for iOS style toggle switch -->
    <script src="<?= base_url('assets/') ?>js/jquery.iphone.toggle.js"></script>
    <!-- autogrowing textarea plugin -->
    <script src="<?= base_url('assets/') ?>js/jquery.autogrow-textarea.js"></script>
    <!-- multiple file upload plugin -->
    <script src="<?= base_url('assets/') ?>js/jquery.uploadify-3.1.min.js"></script>
    <!-- history.js for cross-browser state change on ajax -->
    <script src="<?= base_url('assets/') ?>js/jquery.history.js"></script>
    <!-- application script for Charisma demo -->
    <script src="<?= base_url('assets/') ?>js/charisma.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/bootstrap-notify.js"></script>

    <script>
        <?php if (!empty($this->session->flashdata('Error'))) { ?>
            setnotif('<?php echo $this->session->flashdata('Error') ?>');
        <?php } ?>

        function setnotif(err) {


            $.notify({
                // options
                icon: 'glyphicon glyphicon-warning-sign',
                title: 'Error',
                message: err,
            }, {
                // settings
                element: 'body',
                position: null,
                type: "danger",
                allow_dismiss: true,
                newest_on_top: false,
                showProgressbar: false,
                placement: {
                    from: "top",
                    align: "center"
                },
                offset: 20,
                spacing: 10,
                z_index: 1031,
                delay: 2000,
                timer: 1000,
                url_target: '_blank',
                mouse_over: null,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                },
                onShow: null,
                onShown: null,
                onClose: null,
                onClosed: null,
                icon_type: 'class',
                template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
                    '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
                    '<span data-notify="icon"></span> ' +
                    '<span data-notify="title">{1}</span> ' +
                    '<span data-notify="message">{2}</span>' +
                    '<div class="progress" data-notify="progressbar">' +
                    '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                    '</div>' +
                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                    '</div>'
            });

        }
    </script>

</body>

</html>