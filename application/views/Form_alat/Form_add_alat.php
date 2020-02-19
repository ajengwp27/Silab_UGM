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
                            <form name="fromaddalat" action="<?= base_url('ControllerAlat/Controller_alat/addAlat') ?>" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input required type="Text" name="name" class="form-control" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label>Kategory</label>
                                    <select name="Category_id" class="form-control selectpicker">
                                        <?php foreach ($kategori as $k) {
                                            echo "<option value='$k->Category_id'>$k->Name_Category</option>";
                                        } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nomer Rak</label>
                                    <input required type="Text" name="nomorrak" class="form-control" placeholder="Enter Number">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea required name="description" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input required type="number" min="1" name="stok" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Merk</label>
                                    <input required type="Text" name="Merk" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input required type="file" name="image" class="form-control">
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