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
                            <th>Nama Mahasiswa</th>
                            <th>Paket</th>
                            <th>Analisa</th>
                            <th>Tanggal Selesai</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($peminjaman as $k) { ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $k->id_peminjaman ?></td>
                                <td><?= $k->Name ?></td>
                                <td><?= $k->nama_paket ?></td>
                                <td>
                                    <?php $dataanalisis = explode("#", $k->analisa);
                                        $i = 1;
                                        foreach ($dataanalisis as $da) {
                                            echo $i . "." . $da . "<br>";
                                            $i++;
                                        }
                                        ?>
                                </td>
                                <td><?= $k->tanggal_selesai ?></td>
                                <td class="center">
                                    <?php if ($k->status == 1) { ?>
                                        <a class="btn btn-info" <?php if ($k->status == 1) {
                                                                            echo "href=" . base_url('Controller_peminjaman/Controller_peminjaman/viewFormDetailpeminjaman?url=' . urlencode($k->id_peminjaman) . '&idpaket=' . $k->id_paket);
                                                                        } else {
                                                                            echo "disabled";
                                                                        } ?>>
                                            <i class="glyphicon glyphicon-edit icon-white"></i>
                                            Details
                                        </a>
                                        <a class="btn btn-warning" <?php if ($k->status == 1) {
                                                                            echo "target='_blank' href=" . base_url('Controller_report/Controller_report/cetakReportPeminjamanbyId?url='.urlencode($k->id_peminjaman));
                                                                        } else {
                                                                            echo "disabled";
                                                                        } ?>>
                                            <i class="glyphicon glyphicon-edit icon-white"></i>
                                            Cetak
                                        </a>
                                    <?php } else { ?>
                                        <a class="btn btn-success" <?php if ($k->status == 1) {
                                                                                echo "href=" . base_url('Controller_peminjaman/Controller_peminjaman/viewFormDetailpeminjaman?url=' . urlencode($k->id_peminjaman) . '&idpaket=' . $k->id_paket);
                                                                            } else {
                                                                                echo "disabled";
                                                                            } ?>>
                                            <i class="glyphicon glyphicon-edit icon-white"></i>
                                            Sudah Kembali
                                        </a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
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