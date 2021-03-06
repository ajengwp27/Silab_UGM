<div class="modal fade" id="addBahan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Tambah Data Bahan</h3>
            </div>
            <div class="modal-body">
                <!-- start body -->
                <div class="row">
                    <div class="box col-md-12">
                        <div class="box-content">
                            <form name="fromaddkaryawan" action="<?= base_url('addBahan') ?>" method="post">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input required type="Text" name="name" class="form-control" placeholder="Masukan Nama Bahan">
                                </div>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input required type="number" min="1" name="stok" class="form-control" ">
                                </div>
                                <div class=" form-group">
                                    <label>Satuan</label>
                                    <select name="satuan" class="form-control selectpicker">
                                        <option value=''>None</option>
                                        <option value='L'>Liter</option>
                                        <option value='G'>Kg</option>
                                    </select>
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