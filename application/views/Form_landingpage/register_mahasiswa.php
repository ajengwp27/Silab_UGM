<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet"
        href="<?= base_url('assets/Register/') ?>fonts/material-icon/css/material-design-iconic-font.min.css">
        <link href="<?= base_url('assets/') ?>css/bootstrap-slate.min.css" rel="stylesheet">
        <link href='<?= base_url('assets/') ?>css/animate.min.css' rel='stylesheet'>
    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/Register/') ?>css/style.css">

    <script src="<?= base_url('assets/') ?>bower_components/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>js/bootstrap-notify.js"></script>
</head>

<body style="padding:0px 0;">

    <div class="main">
        <div class="container m-t-20">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="<?= base_url('assets/Register/') ?>images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                <form name="fromaddmahasiswa" id="formvaliditas" class="register-form" action="<?= base_url('Controller_landingpage/Reg_user_mahasiswa/addmahasiswaFromRegistrasi') ?>" method="post">
                    <!-- <form method="POST" class="register-form" id="register-form"
                        action="<?= base_url('Controller_landingpage/Reg_user_mahasiswa/adduser_mahasiswa') ?>"> -->
                        <h2>student registration form</h2>
                        <!-- <div class="form-group">
                            <div class="form-group">
                                <label for="idmahasiswa">Mahasiswa ID (NIM) :</label>
                                <input type="text" name="id" id="idmahasiswa" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Password :</label>
                            <input type="text" name="password" id="password" required />
                        </div> -->
                        <div class="form-group">
                            <label>NIM</label>
                            <input required type="Text" onclick='validasi("NIM","NIM")' id="NIM" name="nim"
                                class="form-control required" placeholder="Enter NIM"
                                pattern="^([0-2])([0-9])([/])([4])([0])([9])([7])([6])([2])([/])([P])([T])([/])([0-9])([0-9])([0-9])([0-9])([0-9])$">
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input required type="Text" onclick='validasi("NAMA","NAMA")' id="NAMA" name="name"
                                class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label>Nomer Telepon</label>
                            <input required type="Text" onclick='validasi("PHONE","NOMER TELEPON")' id="PHONE"
                                name="phone" class="form-control" placeholder="Enter Number">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="gender" class="form-control selectpicker">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input required type="Text" onclick='validasi("ALAMAT","ALAMAT")' id="ALAMAT" name="address"
                                class="form-control" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input required type="Email" onclick='validasi("EMAIL","EMAIL")' id="EMAIL" name="email"
                                class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="address">Password :</label>
                            <input   class="form-control" type="text" name="password" id="password" required />
                        </div> 
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                       
                       
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <!-- <script src="<?= base_url('assets/Register/') ?>vendor/jquery/jquery.min.js"></script> -->
    <script src="<?= base_url('assets/Register/') ?>js/main.js"></script>

    <script>
    // $('#NIM').keypress(function(event) {

    //     if (event.which != 8 && isNaN(String.fromCharCode(event.which))) {
    //         event.preventDefault(); //stop character from entering input
    //     }

    // });

    $('#NAMA').keypress(function(event) {
        var charCode = window.event.keyCode;
        return (((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)) || charCode == 32 || charCode == 46)

    });

    var form = document.querySelector("#formvaliditas");


    function validasi(textbox, text) {
        var input = document.getElementById(textbox);

        var cek = form.checkValidity()
        if (cek == false) {
            input.oninvalid = function(e) {
                if (e.target.validity.valueMissing) {
                    e.target.setCustomValidity(text + " WAJIB DIISI");
                    return;
                }
            }
            input.oninput = function(e) {
                e.target.setCustomValidity("")
            }
            form.reportValidity();
            console.log(cek);
        }

    }

    <?php if (!empty($this->session->flashdata('Status'))) { ?>
        setnotifstatus('<?php echo $this->session->flashdata('Status') ?>');
    <?php } ?>


    function setnotifstatus(err) {
        if (err == 'Input Success' || err == 'Edit Success' || err == 'Delete Succes') {
            ttp = 'success';
        } else {
            ttp = 'danger';
        }

        $.notify({
            // options
            message: err,
        }, {
            // settings
            element: 'body',
            position: null,
            type: ttp,
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
            timer: 500,
            url_target: '_blank',
            mouse_over: null,
            animate: {
                enter: 'animated bounceIn',
                exit: 'animated bounceOut'
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
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>