<?php include('header.php') ?>
<div class="home" style="height: 120px;">
    <div class="background_image" style="background-image:url(<?= base_url('assets/img/ugm.png')  ?>"></div>
</div>
<div class="row">
    <div class="col-md-12" style="margin-top:20px;">
        <div class="box box-info">
            <div align="center" class="box-header with-border">
                <h3 class="box-title">DAFTAR PEMINJAMAN ALAT</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="col-md-12"
                style="padding-top:20px; padding-left:40px;padding-right:40px; padding-bottom:20px; border-style:groove; border-width:2px; border-color:black">
                <div class="row">
                    <?php foreach($_SESSION["pinjaman"] as $data) { ?>
                    <div class="col-md-4">
                        <img style="max-width:10vw; max-height:10vh; float:left; margin-right:20px"
                            src="<?=  base_url_img() . $data['image']?>">
                        <h2><?= $data["Name"]?></h2>
                        <div style='word-wrap: break-word;'>
                            <?= $data["description"]?>
                        </div>
                        <label>Jumlah Pinjam</label>
                        <div style='word-wrap: break-word;'>
                            <?= $data["Qty"]?>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <form action="<?= base_url('Checkout')?>" method="post">
                <div align="center">
                    <label>Pilih Kegiatan</label>
                    <select name="idkegiatan" style="min-width:30%; margin-top:20px">
                        <?php foreach($jadwal as $jdwl) {?>
                        <option value="<?= $jdwl->id_jadwal?>"><?= $jdwl->Kegiatan?></option>
                        <?php }?>
                    </select>
                </div>
                <button type="submit" class="btn btn-success" style=" color:white;margin-top:10px; width:100%">Proses</button>
            </form>>
        </div>
    </div>
</div>
</div>
</body>