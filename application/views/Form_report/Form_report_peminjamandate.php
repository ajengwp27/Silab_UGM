<?php
include APPPATH . 'views/Form_report/laporan.php';

?>
<div>
    <div align="center">
        <img style="display: block;margin-left: auto;margin-right: auto;width: 100px;" src="<?php echo base_url() ?>assets/img/logo.png">
        <div>
            <h2 align="center">
                LAB NUTRISI UGM <br>
                Daftar Peminjaman
                <small><?= date('d-m-y') ?></small>
            </h2>
        </div>
    </div>
</div>
<!-- /. ROW  -->
<div>
    <div>
        <div>
            <div>
                <div>
                    <table border=1>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Id Peminjaman</th>
                                <th>Nama Paket</th>
                                <th>Analisa</th>
                                <th>Nama Mahasiswa</th>
                                <th>Tanggal Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            $total = 0;
                            foreach ($record as $r) { ?>
                                <tr class="gradeU">
                                    <td align="center"><?php echo $no ?></td>
                                    <td align="left"><?php echo $r->id_peminjaman ?></td>
                                    <td align="center"><?php echo $r->nama_paket ?></td>
                                    <td align="center">
                                        <?php $dataanalisis = explode("#", $r->analisa);
                                            $i = 1;
                                            foreach ($dataanalisis as $da) {
                                                echo $i . "." . $da . "<br>";
                                                $i++;
                                            }
                                            ?>
                                    </td>
                                    <td align="center"><?php echo $r->Name ?></td>
                                    <td align="center"><?php echo $r->tanggal_selesai ?></td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
                    </table>
                    <br><br>
                    <table style="width: 100%; margin-left: 75%;">
                        <tbody>
                            <tr class="gradeU">
                                <td align="center">Yogyakarta, <?= date('d-M-Y'); ?></td>
                            </tr>
                            <tr class="gradeU">

                                <td align="center"> Admin</td>
                            </tr>
                            <tr class="gradeU">

                                <td align="center"> <br></td>
                            </tr>
                            <tr class="gradeU">
                                <td align="center"> <?= $_SESSION['Admin']->namakaryawan ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /. TABLE  -->
            </div>
        </div>
    </div>
</div>
<!-- /. ROW  -->