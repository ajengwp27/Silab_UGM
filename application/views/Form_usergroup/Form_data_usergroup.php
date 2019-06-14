<div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Data usergroup</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Data usergroup</h2>

        <div class="box-icon">
            <a href="#" class="btn addusergroup btn-round btn-default"><i class="glyphicon glyphicon-plus-sign"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <!-- <div class="alert alert-info">For help with such table please check <a href="http://datatables.net/" target="_blank">http://datatables.net/</a></div> -->
        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usergroup as $k) { ?>
                    <tr>
                        <td><?= $k->Id?></td>
                        <td><?= $k->Description?></td>
                        <td class="center">
                            <a class="btn btn-info" href="<?= base_url('Controller_usergroup/Controller_usergroup/viewFormEditusergroup?id='.$k->Id.'')?>">
                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                Edit
                            </a>
                            <a class="btn btn-danger" href="<?= base_url('Controller_usergroup/Controller_usergroup/deleteusergroup?id='.$k->Id.'')?>">
                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
        </div>
        </div>
        <!--/span-->
        </div><!--/row-->
    </div><!--/span-->

    <?php include "Form_add_usergroup.php";?>