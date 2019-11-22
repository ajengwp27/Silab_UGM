<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Data Alat Dipinjam</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Data Alat</h2>
            </div>
            <div class="box-content">
                <!-- <div class="alert alert-info">For help with such table please check <a href="http://datatables.net/" target="_blank">http://datatables.net/</a></div> -->
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Peminjaman</th>
                            <th>Nama Alat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($peminjaman as $k) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $id_peminjaman ?></td>
                                <td><?= $k->Name ?></td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
                <div style="float: none;text-align: right;margin-right: 50px;margin-bottom: 10px;">
                    <a class="btn btn-danger" href="<?= base_url('Controller_peminjaman/Controller_peminjaman/editStatusDetailPeminjaman?url=' . urlencode($id_peminjaman) . '') ?>">
                        <i class="glyphicon icon-white"></i>
                        Proses
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
<!--/row-->
</div>
<!--/span-->