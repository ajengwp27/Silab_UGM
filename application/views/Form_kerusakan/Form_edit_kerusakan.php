<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Edit Kerusakan</a>
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
                <form name="fromeditkaryawan" action="<?= base_url('editKerusakan') ?>" method="post">
                    <div class="form-group">
                        <label>Nama Alat</label>
                        <input required type="Text" name="name" class="form-control" value="<?= $k->NamaAlat ?>">
                    </div>
                    <div class="form-group">
                        <label>Jumlah rusak</label>
                        <input required readonly type="Text" name="jml" class="form-control" value="<?= $k->Jumlah_kerusakan ?>">
                    </div>
                    <input name="idalat" value="<?= $k->id_alat?>" hidden>
                    <input name="id_kerusakan" value="<?= $k->id_kerusakan?>" hidden>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" id='kerusakanstatus' class="form-control selectpicker ">
                        <option value="2">Rusak Parah</option>
                        <option value="3">Selesai Perbaikan</option> 
                        </select>
                    </div>
                    <button type="submit" name="submitid"  class="btn btn-default">Update</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div>
<!--/row-->