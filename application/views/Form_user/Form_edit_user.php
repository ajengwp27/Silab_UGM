
<div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Edit User</a>
            </li>
        </ul>
    </div>
    
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit</h2>
            </div>
            <div class="box-content">
                <form name="fromedituser" action="<?= base_url('Controller_user/Controller_user/edituser')?>"  method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input required type="Text" name="username" class="form-control" value="<?= $edituser->Username?>">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input required type="Text" name="password" class="form-control" value="<?= $edituser->Password?>" >
                    </div>
                    <div class="form-group">
                        <label>Hak Akses</label>
                        <input required type="Text" name="hak_akses" class="form-control" value="<?= $edituser->id_level?>">
                    </div>
                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input required type="Text" name="nama_karyawan" class="form-control" value="<?= $edituser->id_karyawan?>">
                    </div>
                    <button type="submit" name="submitid" value=<?= $edituser->id_user?> class="btn btn-default">Update</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->