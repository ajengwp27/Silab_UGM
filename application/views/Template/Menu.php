   <!-- left menu starts -->
   <div class="col-sm-2 col-lg-2">
       <div class="sidebar-nav">
           <div class="nav-canvas">
               <div class="nav-sm nav nav-stacked">

<<<<<<< HEAD
                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="nav-link" href="<?= base_url('dashboard')?>"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                        
                        <li class="nav-item ">
                                <a class="nav-link collapsed" data-toggle="collapse" data-target="#">
                                    <i class="glyphicon glyphicon-hdd"></i><span> Forms Input Master</span>
                                </a>
                            <div class="collapse in" id="FormMaster">
                                <ul class="nav">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url()?>alat">
                                        <span> Alat </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url()?>kategori">
                                        <span> Kategori</span>     
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url()?>paket">
                                        <span> Paket</span>     
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url()?>bahan">
                                        <span> Bahan</span>     
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url('mahasiswa')?>">
                                        <span> Mahasiswa </span>
                                        </a>
                                    </li>
                                    <?php if ($_SESSION['Admin']->id_level == 1) {?>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url('karyawan')?>">
                                        <span> Karyawan</span>     
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url('usergroup')?>">
                                        <span> Usergroup </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url('user')?>">
                                        <span> User </span>
                                        </a>
                                    </li>
                                    <?php }?>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url('user_mahasiswa')?>">
                                        <span> User Mahasiswa</span>     
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url('jadwal')?>">
                                        <span> Jadwal Lab</span>     
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
=======
               </div>
               <ul class="nav nav-pills nav-stacked main-menu">
                   <li class="nav-header">Main</li>
                   <li><a class="nav-link" href="<?= base_url('dashboard') ?>"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
>>>>>>> 7fffac2559b07f40a6601c399419a7d9fcedb318

                   <li class="nav-item ">
                       <a class="nav-link collapsed" data-toggle="collapse" data-target="#">
                           <i class="glyphicon glyphicon-hdd"></i><span> Forms Input Master</span>
                       </a>
                       <div class="collapse in" id="FormMaster">
                           <ul class="nav">
                               <li class="nav-item ">
                                   <a class="nav-link" href="<?= base_url() ?>alat">
                                       <span> Alat </span>
                                   </a>
                               </li>
                               <li class="nav-item ">
                                   <a class="nav-link" href="<?= base_url() ?>kategori">
                                       <span> Kategori</span>
                                   </a>
                               </li>
                               <li class="nav-item ">
                                   <a class="nav-link" href="<?= base_url() ?>paket">
                                       <span> Paket</span>
                                   </a>
                               </li>
                               <li class="nav-item ">
                                   <a class="nav-link" href="<?= base_url() ?>bahan">
                                       <span> Bahan</span>
                                   </a>
                               </li>
                               <li class="nav-item ">
                                   <a class="nav-link" href="<?= base_url('mahasiswa') ?>">
                                       <span> Mahasiswa </span>
                                   </a>
                               </li>
                               <?php if ($_SESSION['Admin']->id_level == 1) { ?>
                                   <li class="nav-item ">
                                       <a class="nav-link" href="<?= base_url('karyawan') ?>">
                                           <span> Karyawan</span>
                                       </a>
                                   </li>
                                   <li class="nav-item ">
                                       <a class="nav-link" href="<?= base_url('usergroup') ?>">
                                           <span> Usergroup </span>
                                       </a>
                                   </li>
                                   <li class="nav-item ">
                                       <a class="nav-link" href="<?= base_url('user') ?>">
                                           <span> User </span>
                                       </a>
                                   </li>
                               <?php } ?>
                               <li class="nav-item ">
                                   <a class="nav-link" href="<?= base_url('user_mahasiswa') ?>">
                                       <span> User Mahasiswa</span>
                                   </a>
                               </li>
                               <li class="nav-item ">
                                   <a class="nav-link" href="<?= base_url('jadwal') ?>">
                                       <span> Jadwal Lab</span>
                                   </a>
                               </li>
                           </ul>
                       </div>
                   </li>

                   <li class="nav-item ">
                       <a class="nav-link collapsed" data-toggle="collapse" data-target="#">
                           <i class="glyphicon glyphicon-hdd"></i><span> Form Data</span>
                       </a>
                       <div class="collapse in" id="FormData">
                           <ul class="nav">
                               <li class="nav-item ">
                                   <a class="nav-link" href="<?= base_url('peminjaman') ?>">
                                       <span> Peminjaman Alat</span>
                                   </a>
                               </li>
                               <li class="nav-item ">
                                   <a class="nav-link" href="<?= base_url('kerusakan') ?>">
                                       <span> Kerusakan Alat </span>
                                   </a>
                               </li>
                               <!-- <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url() ?>examples/pages/rtl.html">
                                        <span> Pengembalian Alat</span>     
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url() ?>examples/pages/rtl.html">
                                        <span> Kegiatan Lab</span>     
                                        </a>
                                    </li> -->
                           </ul>
                       </div>
                   </li>

                   <li class="nav-item ">
                       <a class="nav-link collapsed" data-toggle="collapse" data-target="#">
                           <i class="glyphicon glyphicon-hdd"></i><span> Laporan</span>
                       </a>
                       <div class="collapse in" id="FormData">
                           <ul class="nav">
                               <li class="nav-item ">
                                   <a class="nav-link tanggalpinjam" href="#">
                                       <span> Cetak Peminjaman </span>
                                   </a>
                               </li>
                               <li class="nav-item ">
                                   <a class="nav-link" href="<?= base_url('ReportAlat') ?>" target="_blank">
                                       <span> Katalog Alat</span>
                                   </a>
                               </li>
                               <li class="nav-item ">
                                   <a class="nav-link" href="<?= base_url('ReportBahan') ?>" target="_blank">
                                       <span> Katalog Bahan </span>
                                   </a>
                               </li>
                               <li class="nav-item ">
                                   <a class="nav-link" href="<?= base_url('ReportKerusakan') ?>" target="_blank">
                                       <span> Kerusakan </span>
                                   </a>
                               </li>
                               <!-- <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url() ?>examples/pages/rtl.html">
                                        <span> Pengembalian Alat</span>     
                                        </a>
                                    </li>                                
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?= base_url() ?>examples/pages/rtl.html">
                                        <span> Kegiatan Lab</span>     
                                        </a>
                                    </li> -->
                           </ul>
                       </div>
                   </li>

                   <!-- <li><a class="nav-link" href="ui.html"><i class="glyphicon glyphicon-eye-open"></i><span> UI Features</span></a>
                        </li>
                        <li><a class="nav-link" href="chart.html"><i class="glyphicon glyphicon-list-alt"></i><span> Charts</span></a>
                        </li>
                        <li><a class="nav-link" href="typography.html"><i class="glyphicon glyphicon-font"></i><span> Typography</span></a>
                        </li>
                        <li><a class="nav-link" href="gallery.html"><i class="glyphicon glyphicon-picture"></i><span> Gallery</span></a>
                        </li>
                        <li class="nav-header hidden-md">Sample Section</li>
                        <li><a class="nav-link" href="table.html"><i
                                    class="glyphicon glyphicon-align-justify"></i><span> Tables</span></a></li>
                        <li class="accordion">
                            <a href="#"><i class="glyphicon glyphicon-plus"></i><span> Accordion Menu</span></a>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Child Menu 1</a></li>
                                <li><a href="#">Child Menu 2</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link" href="calendar.html"><i class="glyphicon glyphicon-calendar"></i><span> Calendar</span></a>
                        </li>
                        <li><a class="nav-link" href="grid.html"><i
                                    class="glyphicon glyphicon-th"></i><span> Grid</span></a></li>
                        <li><a href="tour.html"><i class="glyphicon glyphicon-globe"></i><span> Tour</span></a></li>
                        <li><a class="nav-link" href="icon.html"><i
                                    class="glyphicon glyphicon-star"></i><span> Icons</span></a></li>
                        <li><a href="error.html"><i class="glyphicon glyphicon-ban-circle"></i><span> Error Page</span></a>
                        </li>
                        <li><a href="login.html"><i class="glyphicon glyphicon-lock"></i><span> Login Page</span></a>
                        </li> -->
               </ul>
               <label hidden id="for-is-ajax" for="is-ajax"><input id="is-ajax" type="checkbox"> Ajax on menu</label>
           </div>
       </div>
   </div>
   <!--/span-->
   <!-- left menu ends -->

   <div class="modal fade" id="tanggalcetak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">×</button>
                   <h3>Cetak Data Peminjaman</h3>
               </div>
               <div class="modal-body">
                   <!-- start body -->
                   <div class="row">
                       <div class="box col-md-12">
                           <div align="center" class="box-content">
                               <form name="fromaddalat" action="<?= base_url('Controller_report/Controller_report/cetakAlatPeminjamanbyDate') ?>" target="_blank" method="post">
                                   <input id="tanggal1" style="line-height: 15px;" required name="tanggal1" onchange="datevalidation()" type="date"> -
                                   <input id="tanggal2" style="line-height: 15px;" disabled name="tanggal2" type="date">
                           </div>
                       </div>
                   </div>
                   <!--/span-->
               </div>
               <!--/row-->
               <!-- end body -->
               <div class=" modal-footer">
                   <button type="submit" style="float: right" type="button" class="btn btn-primary">Cetak</button>
                   </form>
               </div>
           </div>
       </div>
   </div>

   <Script>
       $('.tanggalpinjam').click(function(e) {
           e.preventDefault();
           $('#tanggalcetak').modal('show');
       });

       document.getElementById('tanggal1').value = "";
       document.getElementById('tanggal2').value = "";

       function datevalidation() {
           var x = document.getElementById("tanggal1").value;
           document.getElementById('tanggal2').min = x;
           $('#tanggal2').removeAttr('disabled');
           console.log(x);
           if (x == "") {

               $('#tanggal2').attr('disabled', 'true');
               document.getElementById('tanggal2').value = "";
           }
       }
   </Script>