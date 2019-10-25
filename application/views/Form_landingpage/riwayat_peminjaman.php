<?php include('header.php') ?>
<div class="home" style="height: 120px;">
    <div class="background_image" style="background-image:url(<?= base_url('assets/img/ugm.png')  ?>"></div>
</div>
<div class="row">
    <div class="col-md-12" style="margin-top:20px;">
        <div class="box box-info">
            <div align="center" class="box-header with-border">
                <h3 class="box-title">RIWAYAT PEMINJAMAN</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="col-md-6" style="padding:30px;float:none; margin:auto">
                <div class="row">
                    <table class="table responsive" style="border-style: outset;">
                        <tr >
                            <th style="border-style: solid;">ID PEMINJAMAN</th>
                            <th style="border-style: solid;">NAMA ALAT</th>
                            <th style="border-style: solid; text-align: center;">JUMLAH</th>
                            <th style="border-style: solid; text-align: center">STATUS</th>
                        </tr>
                        <?php foreach($riwayat as $data) { ?>
                        <tr >
                            <td style="border-style: solid;"><?= $data->id_peminjaman?></td>
                            <td style="border-style: solid;"><?= $data->Name?></td> 
                            <td align="center" style="border-style: solid;"><?= $data->Amount?></td> 
                            <td align="center" style="border-style: solid;"><?php if ($data->Status == 1 ){echo "PINJAM";}else{echo "SUDAH KEMBALI";}?></td> 
                        </tr>
                        <?php }?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>