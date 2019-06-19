<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Admin</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url('assets/RegisterAdmin/')?>fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link href="<?= base_url('assets/')?>css/bootstrap-slate.min.css" rel="stylesheet">
    <link href='<?= base_url('assets/')?>css/animate.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('assets/RegisterAdmin/')?>css/style.css">
    <script src="<?= base_url('assets/RegisterAdmin/')?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/RegisterAdmin/')?>js/main.js"></script>
    <script src="<?= base_url('assets/')?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/')?>js/bootstrap-notify.js"></script>
</head>
<body style="background-image:url('<?= base_url('assets/')?>img/login.jpg'); background-size: cover;background-repeat: no-repeat;background-position: inherit; overflow: hidden;">

    <div class="main">

        <div class="container" style="margin:auto; transform: translateY(25%);">
            <form style="padding-bottom:0px;" method="POST" class="appointment-form" id="appointment-form" action="<?= base_url('ControllerAdmin/Reg_admin/add_admin')?>">
                <h2 align="center">Register Admin/Superadmin</h2>
                <div class="form-group-1">
                    <input type="text" onclick='validasi("username","username")' name="username" id="username" placeholder="Username" required />
                    <input type="password" onclick='validasi("password","password")' name="password" id="password" placeholder="Password" required />
                    <input type="email" onclick='validasi("email","email")' name="email" id="email" placeholder="Email Karyawan" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                    <div class="select-list">
                        <select required name="level" id="course_type">
                            <option slected value="">Select Hak Akses</option>
                            <?php foreach ($usergroup as $k) {
                              echo "<option value='$k->id_level'>$k->Description</option>";
                          } ?>
                        </select>
                    </div>
                </div>
                <div class="form-submit" align="center">
                    <input type="submit" name="submit" id="submit" class="submit" value="Register" />
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<script>

var form = document.querySelector("#appointment-form");


function validasi(textbox,text)
{
    var input = document.getElementById(textbox);
  
    var cek = form.checkValidity()
    if(cek == false)
    {
        input.oninvalid = function(e) 
        {
            if(e.target.validity.valueMissing)
            {
                e.target.setCustomValidity(text.toUpperCase()+" WAJIB DIISI");
                return;
            }
        }
        input.oninput = function(e) 
        {
             e.target.setCustomValidity("")
        }
        form.reportValidity();
        console.log(cek);
    }

}

<?php if (!empty($this->session->flashdata('Error'))){?>
    setnotifstatus('<?php echo $this->session->flashdata('Error')?>');
<?php }?>

function setnotifstatus(err)
{ 
if (err == 'Input Succes' || err == 'Edit Succes' || err == 'Delete Succes')
    {
      ttp='success';
    }
 else
    {
    ttp='danger';
    }

  $.notify({
	// options
	message: err,
  },{
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