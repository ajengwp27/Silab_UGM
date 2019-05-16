<div class="modal fade" id="addalat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                <form name="fromaddalat" action="<?= base_url('ControllerAlat/Controller_alat/addalat')?>"  method="post">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input required type="Text" name="name" class="form-control" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Kategory</label>
                                        <input required type="Text" name="address" class="form-control" placeholder="Enter Kategory"  >
                                    </div>
                                    <div class="form-group">
                                        <label>Nomer Rak</label>
                                        <input required type="Text" name="phone" class="form-control" placeholder="Enter Number">
                                    </div>
                                        </select>    
                                    </div>
                            </div>
                    </div>
                    <!--/span-->
                </div><!--/row-->
              <!-- end body -->
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Tambah data</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
