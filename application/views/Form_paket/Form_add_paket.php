<div class="modal fade" id="addpaket" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3>Tambah Data Alat</h3>
            </div>
            <div class="modal-body">
                <!-- start body -->
                <div class="row">
                    <div class="box col-md-12">
                        <div class="box-content">
                            <form name="fromaddalat" action="<?= base_url('addpaket') ?>"  method="post">
                                <div class="form-group">
                                    <label>Nama Paket</label>
                                    <input required type="Text" name="namapaket" class="form-control" placeholder="Enter Name">
                                </div>
                        </div>
                    </div>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
            <!-- end body -->
            <div class=" modal-footer">
                                    <button type="submit" class="btn btn-primary">Tambah data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>