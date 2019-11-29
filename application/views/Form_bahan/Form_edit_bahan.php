<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Edit Bahan</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Bahan</h2>
            </div>
            <div class="box-content">
                <form name="fromeditkaryawan" action="<?= base_url('Controller_bahan/Controller_bahan/editbahan') ?>" method="post">
                    <div class="form-group">
                        <label>Nama Bahan</label>
                        <input required type="Text" name="name" class="form-control" value="<?= $editbahan->nama_bahan ?>">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input required type="Text" name="stok" class="form-control" value="<?= $editbahan->stok ?>">
                    </div>
                    <div class="form-group">
                        <label>Satuan</label>
                        <input required type="Text" name="satuan" class="form-control" value="<?= $editbahan->satuan ?>">
                    </div>
                    <button type="submit" name="submitid" value=<?= $editbahan->id_bahan ?> class="btn btn-default">Update</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->