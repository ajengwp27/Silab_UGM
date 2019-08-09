<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url('assets/Register/') ?>fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/Register/') ?>css/style.css">
</head>

<body style="overflow:hidden; padding:0px 0;">

    <div class="main">
        <div class="container m-t-20">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="<?= base_url('assets/Register/') ?>images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="<?= base_url('Controller_landingpage/Reg_user_mahasiswa/adduser_mahasiswa') ?>">
                        <h2>student registration form</h2>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="idmahasiswa">Mahasiswa ID (NIM) :</label>
                                <input type="text" name="id" id="idmahasiswa" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Password :</label>
                            <input type="text" name="password" id="password" required />
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
    <script src="<?= base_url('assets/Register/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/Register/') ?>js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>