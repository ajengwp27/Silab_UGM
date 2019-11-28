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
            <form target="_blank" action="<?= base_url('pinjam') ?>" method="post">
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
                                <div class="col-md-3">
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
                                <div class="col-md-3">
                                <input type="checkbox" <?php if($d->stok==0) {echo "disabled";}?>  id="cb<?=  $d->id_bahan ?>" onclick="ceklist(<?= $d->id_bahan ?>)" name="bahan[]" value="<?= $d->id_bahan ?>"><a> <?= $d->nama_bahan ?></a>
                                <input style="width:15%" <?php if($d->stok==0) {echo "disabled";}?> disabled id="inputb<?= $d->id_bahan ?>"  type="number" min="0" max="<?= $d->stok?>" value="0" name="jumlah[<?=$d->id_bahan?>]">
                                <label><?= $d->satuan?></label>
                                <?php if($d->stok==0) {echo "<label style='color:red' >(Stok Abis)</label>";}?> 
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" style="text-align:left;">Tanggal Penggunaan</label><br>
                        <input required style="text-align:left" id="tgl1" onchange="datevalidation()" type="date" min=<?= date('Y-m-d')?>  name="tanggal[1]">
                        -
                        <input required disabled style="text-align:left" id="tgl2" type="date" name="tanggal[2]">
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
<script>
    function datevalidation()
    {
        var x = document.getElementById("tgl1").value;
        $('#tgl2').removeAttr('disabled');
        document.getElementById('tgl2').min= x;
        console.log(x);
        if (x=="")
        {

            $('#tgl2').attr('disabled','true');
            document.getElementById('tgl2').value="";
        }
    }

    function ceklist(id)
    {
        var checkBox = document.getElementById("cb"+id);

        if (checkBox.checked == true){
            $("#inputb"+id).removeAttr('disabled');
        } else {
            $("#inputb"+id).attr('disabled','true');
        }
    }

</script>
<?php include('footer.php'); ?>
</body>