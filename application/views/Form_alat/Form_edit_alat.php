
<div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Edit Karyawan</a>
            </li>
        </ul>
    </div>
    
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Edit</h2>
            </div>
            <div class="box-content">
                <form name="fromeditalat" action="<?= base_url('ControllerAlat/Controller_alat/editAlat')?>"  method="post">
                    <div class="form-group">
                        <label>Nama Alat</label>
                        <input required type="Text" name="name" class="form-control" value="<?php echo $editalat->Name?>">
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <input required type="Text" name="Category_id" class="form-control" value=<?= $editalat->Category_id?> >
                    </div>
                    <div class="form-group">
                        <label>Nomer Rak</label>
                        <input required type="Text" name="nomorrak" class="form-control" value=<?= $editalat->Number_of_rack?>>
                    </div>
                    <button type="submit" name="submitid" value=<?= $editalat->id_alat?> class="btn btn-default">Update</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->