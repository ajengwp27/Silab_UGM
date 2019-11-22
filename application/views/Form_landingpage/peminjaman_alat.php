<?php include('header.php') ?>
<div class="home" style="height: 120px;">
    <div class="background_image" style="background-image:url(<?= base_url('assets/img/ugm.png')  ?>"></div>
</div>
<div class="row">
    <div class="col-md-9" style="margin:auto;">
        <div class="box">
            <div align="center" class="box-header">
                <h3 class="box-title">FORM PEMINJAMAN ALAT</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?= base_url('pinjam') ?>" method="post">
                <div style="padding-bottom:0px" class="box-body">
                    <div class="form-group">
                        <label class="control-label" style="text-align:left;">Nama Lengkap</label>
                        <input style="width:90%; text-align:left" type="text" name="namalengkap" class="form-control" readonly value="<?= $_SESSION['User']->Name ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="text-align:left;">NIM</label>
                        <input style="width:90%; text-align:left" type="text" name="nim" class="form-control" readonly value="<?= $_SESSION['User']->Nim ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="text-align:left;">Analisis yang di kerjakan : </label> <br>
                        <div class="row">
                            <div class="col-sm-2">
                                <input type="checkbox" name="analisis[]" value="Air"> Air
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" name="analisis[]" value="Abu"> Abu
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" name="analisis[]" value="Protein kasar"> Protein kasar
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <input type="checkbox" name="analisis[]" value="Serat kasar"> Serat kasar
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" name="analisis[]" value="Lemak kasar"> Lemak kasar
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" name="analisis[]" value="Kalsium"> Kalsium
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <input type="checkbox" name="analisis[]" value="Fosfor"> Fosfor
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" name="analisis[]" value="Aminia (Nh³)"> Aminia (Nh³)
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" name="analisis[]" value="NDF"> NDF
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <input type="checkbox" name="analisis[]" value="ADF"> ADF
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" name="analisis[]" value="Selulosa"> Selulosa
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" name="analisis[]" value="Lignin"> Lignin
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <input type="checkbox" name="analisis[]" value="Energi brutto"> Energi brutto
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" name="analisis[]" value="Kec. In-Vitro"> Kec. In-Vitro
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" name="analisis[]" value="Kec. In-Vivo"> Kec. In-Vivo
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">
                                <input type="checkbox" name="analisis[]" value="Kec. In-Sacco"> Kec. In-Sacco
                            </div>
                            <div class="col-md-2">
                                <input type="checkbox" name="analisis[]" value="Mikrobiologi"> Mikrobiologi
                            </div>
                            <div class="col-sm-2">
                                <input type="checkbox" name="analisis[]" value="Derivat Purin"> Derivat Purin
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="text-align:left;">Paket</label>
                        <div class="row" id="accordion">
                            <?php foreach ($details as $d => $key) { ?>
                                <div class="col-sm-2">
                                    <input <?php $id = explode("#", $d); if($id[1]) echo "checked"; ?> type="radio" name="paket" value="<?php $id = explode("#", $d); echo $id[1]; ?>"><a data-parent="#accordion" data-toggle="collapse" href="#<?php $id = explode("#", $d); echo $id[1]; ?>">  <?php $id = explode("#", $d); echo $id[0]; ?></a> <br>
                                    <div id="<?php $id = explode("#", $d); echo $id[1]; ?>" class="collapse">
                                        <label style="margin-left:16px;">Alat : </label><br>
                                        <?php $no=1 ; foreach ($key['detail'] as $k) { ?>
                                            <label style="margin-left:16px;"><?= $no.". ".$k->Name ?></label><br>
                                        <?php $no++; } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="text-align:left;">Bahan</label>
                        <div class="row" id="accordion">
                            <?php foreach ($bahan as $d) { ?>
                                <div class="col-sm-2">
                                <input type="checkbox" name="bahan[]" value="<?= $d->id_bahan ?>"><a> <?= $d->nama_bahan ?></a>
                                <input style="width:10%" type="number" name="jumlah[<?=$d->id_bahan?>]">
                                <label><?= $d->satuan?></label>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div>
                    <button style="margin-left: 10px;margin-bottom:10px;" type="submit" class="btn btn-info ">Proses</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
</div>
</div>
<?php include('footer.php'); ?>
</body>