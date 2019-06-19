
<div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Edit User</a>
            </li>
        </ul>
    </div>
    
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Edit</h2>
            </div>
            <div class="box-content">
                <form name="fromedituser" action="<?= base_url('Controller_user/Controller_user/edituser')?>"  method="post">
                    <div class="form-group">
                        <label>Hak Akses</label>
                        <select name="hak_akses" class="form-control selectpicker">
                            <?php foreach ($usergroup as $k) {
                                echo "<option value='$k->id_level'";
                                echo $edituser->id_level==$k->id_level?'selected':'';
                                echo">$k->Description</option>";
                            } ?>
                        </select>
                    </div>
                    <button type="submit" name="submitid" value=<?= $edituser->id_user?> class="btn btn-default">Update</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->