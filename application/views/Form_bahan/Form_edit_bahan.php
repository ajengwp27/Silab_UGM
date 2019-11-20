<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Edit Karyawan</a>
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
                <form name="fromeditkaryawan" action="<?= base_url('ControllerKaryawan/Controller_karyawan/editKaryawan') ?>" method="post">
                    <div class="form-group">
                        <label>Nama</label>
                        <input required type="Text" name="name" class="form-control" value="<?= $editkaryawan->Name ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input required type="Text" name="address" class="form-control" value="<?= $editkaryawan->Address ?>">
                    </div>
                    <button type="submit" name="submitid" value=<?= $editkaryawan->id_karyawan ?> class="btn btn-default">Update</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->