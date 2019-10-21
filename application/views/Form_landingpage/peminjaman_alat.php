<?php include('header.php') ?>
<div class="home" style="height: 120px;">
    <div class="background_image" style="background-image:url(<?= base_url('assets/img/ugm.png')  ?>"></div>
</div>
<div class="row">
    <div class="col-md-3" style="margin-top:20px;">
        <div class="box">
            <div align='center' class="box-header">
                <img style="max-width:10vw; max-height:20vh" src="<?=  base_url_img() . $alat->image?>" alt="">
            </div>
            <div align='center' class="box-body">
                <div style="margin-left:10px;">
                    <h2>Deskripsi</h2>
                    <div style='word-wrap: break-word;'><?= $alat->description?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9" style="margin-top:20px;">
        <div class="box">
            <div align="center" class="box-header">
                <h3 class="box-title">PEMINJAMAN ALAT</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?= base_url('pinjam')?>" method="post">
                <div style="padding-bottom:0px" class="box-body">
                    <div class="form-group">
                        <label class="control-label" style="text-align:left;">Nama Lengkap</label>
                        <input style="width:90%; text-align:left" type="text" name="namalengkap" class="form-control" readonly
                            value="<?= $_SESSION['User']->Name?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="text-align:left;">NIM</label>
                        <input style="width:90%; text-align:left" type="text" name="nim" class="form-control" readonly
                            value="<?= $_SESSION['User']->Nim?>">
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
                                <input type="checkbox" name="analisis[]" value="Lemak kasar" > Lemak kasar
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
                                <input type="checkbox" name="analisis[]" value="Aminia (Nh³)" checked="checked"> Aminia (Nh³)
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
                                <input type="checkbox" name="analisis[]" value="Kec. In-Vitro" > Kec. In-Vitro
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
                        <label class="control-label" style="text-align:left;">Alat</label>
                        <input style="width:90%; text-align:left" name="alat" type="text" class="form-control" readonly
                            value="<?=  $alat->Name?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="text-align:left;">Stok</label>
                        <input style="width:90%; text-align:left" name="alat" type="text" class="form-control" readonly
                            value="<?=  $alat->stok?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="control-label" style="text-align:left;">Jumlah Pinjam</label>
                        <input max="<?= $alat->stok?>" min="1" style="width:10vw; text-align:center" name="jml" type="number"
                            class="form-control">
                        <input hidden name="idalat" value="<?= $alat->id_alat?>">
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
<?php include('footer.php');?>
</body>