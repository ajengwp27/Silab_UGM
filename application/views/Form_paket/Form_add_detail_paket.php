<div class="modal fade" id="adddetailpaket" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                            <form name="fromaddalat" action="<?= base_url('adddetailpaket') ?>" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                    <label class="control-label" style="text-align:left;">Alat :  </label> <br>
                                    <div class="row">
                                        <?php foreach ($alat as $a ) {?>
                                            <div class="col-sm-6">
                                                <input type="checkbox" name="detailalat[]" value="<?= $a->id_alat?>"> <?= $a->Name?>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
            <!-- end body -->
            <div class=" modal-footer">
                <button type="submit" name="idpaket" value="<?= $id_paket ?>" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>