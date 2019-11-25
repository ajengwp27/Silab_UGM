<div class="modal fade" id="addKerusakan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Tambah Data Kerusakan</h3>
            </div>
            <div class="modal-body">
                <!-- start body -->
                <div class="row">
                    <div class="box col-md-12">
                        <div class="box-content">
                            <form name="fromaddkaryawan" action="<?= base_url('addKerusakan') ?>" method="post">
                                <div class="form-group">
                                    <label>Nama Alat</label>
                                    <select name="alat"  id='alat'  class="form-control selectpicker " data-live-search="true">
                                        <option value="">Pilih Alat</option>
                                        <?php foreach($alat as $a) { ?>
                                        <option value="<?= $a->id_alat?>"><?= $a->Name?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <input required type="number" name="jml" class="form-control" placeholder="Jumlah Kerusakan">
                                </div>
                        </div>
                    </div>
                    <!--/span-->
                </div>
                <!--/row-->
                <!-- end body -->
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
            </div>
        </div>
    </div>
</div>