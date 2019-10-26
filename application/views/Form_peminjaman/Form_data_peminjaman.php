<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Data Pinjaman</a>
        </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-user"></i> Data Peminjaman</h2>
            </div>
            <div class="box-content">
                <!-- <div class="alert alert-info">For help with such table please check <a href="http://datatables.net/" target="_blank">http://datatables.net/</a></div> -->
                <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Peminjaman</th>
                            <th>Kegiatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach ($peminjaman as $k) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $k->id_peminjaman ?></td>
                                <td><?= $k->Kegiatan ?></td>
                                <td class="center">
                                    <a class="btn btn-info" href="<?= base_url('detailPeminjaman/' . urlencode($k->id_peminjaman) . '') ?>">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                        Details
                                    </a>
                                </td>
                            </tr>
                        <?php $no++;} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/span-->
</div>
<!--/row-->
</div>
<!--/span-->

