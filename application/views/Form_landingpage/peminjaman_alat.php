<?php include('header.php') ?>
<div class="home" style="height: 120px;">
    <div class="background_image" style="background-image:url(<?= base_url('assets/img/ugm.png')  ?>"></div>
</div>
<div class="row">
    <div class="col-md-12" style="margin-top:20px;">
        <div class="box">
            <div align='center' class="box-header">
                <img style="max-width:10vw; max-height:20vh" src="<?=  base_url_img() . $alat->image?>" alt="">
            </div>
            <div  align='center' class="box-body">
                <div  style="margin-left:10px;">
                    <h2>Deskripsi</h2>
                    <div style='word-wrap: break-word;'><?= $alat->description?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12" style="margin-top:0px;">
        <div class="box">
            <div align='center' class="box-header">
                <h3 class="box-title">PEMINJAMAN ALAT</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?= base_url('pinjam')?>" method="post" >
                <div align='center' style="padding-bottom:0px" class="box-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="control-label" style="text-align:left;">Jumlah Pinjam</label>
                            <input max="10" min="1" style="width:10vw; text-align:center" name="jml" type="number" class="form-control" >
                            <input hidden name="idalat" value="<?= $alat->id_alat?>" >
                    </div>
                </div>
                <!-- /.box-body -->
                <div align='center' >
                    <button style="margin-bottom:10px;"  type="submit" class="btn btn-info ">Proses</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
</div>
</div>
</body>