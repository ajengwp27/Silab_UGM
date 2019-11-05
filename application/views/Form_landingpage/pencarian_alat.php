<?php include('header.php') ?>
<div class="home" style="height: 120px;">
    <div class="background_image" style="background-image:url(<?= base_url('assets/img/ugm.png')  ?>"></div>
</div>
<div class="row">
    <div class="col-md-12" style="margin-top:20px;">
        <div class="box box-info">
            <div align="center" class="box-header with-border">
                <h3 class="box-title">FORM PENCARIAN ALAT</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="booking_form_container">
                <form action="<?= base_url('pencarian') ?>" method="get"
                    id="booking_form">
                    <div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
                        <div style="width:100%">
                            <input  style="width:100%; height: 5.4vh; padding:10px"  name="key"
                                placeholder="Masukan kata kunci" name="pencarian"
                                value="<?php if(isset($key)){ echo $key;} else {echo "";}?>">
                        </div>
                        <div><button type="submit" style="margin-left:5px; height:5.4vh" class="btn btn-success">Cari</button></div>
                    </div>
                </form>
            </div>
            <br>
            <div class="col-md-12" style="margin-top:20px; margin-left:40px;margin-right:40px">
                <div class="row">
                    <?php foreach($alat as $a) { ?>
                        <div class="col-md-6" style="margin-top:10px;">
                            <?php if (isset($_SESSION['User'])) {?>
                            <a href="<?= base_url('peminjaman/'.$a->id_alat.'')?>">
                        <?php } else {?>
                            <a href="<?= base_url('LoginMahasiswa')?>">
                                <?php }?>
                                <img style="max-width:10vw; max-height:10vh; float:left; margin-right:20px"
                                    src="<?=  base_url_img() . $a->image?>">
                                <h2><?= $a->Name?></h2>
                                <div style='word-wrap: break-word;'>
                                    <?= $a->description?>
                                </div>
                            </a>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include('footer.php');?>
</body>