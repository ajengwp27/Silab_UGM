<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';

//Route Admin
$route['Admin'] = 'ControllerAdmin/Login';
$route['admin'] = 'ControllerAdmin/Login';
$route['dashboard'] = 'ControllerAdmin/Dashboard';
$route['regadmin'] = 'ControllerAdmin/Reg_admin';
$route['emailuser/(:any)'] = 'Controller_email/Email/sendMailUser/$1';
$route['emailPassword'] = 'Controller_email/Email/sendMailUserPassword';
$route['emailuserNon/(:any)'] = 'Controller_email/Email/sendMailUserNon/$1';
$route['peminjaman'] = 'Controller_peminjaman/Controller_peminjaman/viewFormPeminjaman';
$route['detailPeminjaman/(:any)'] = 'Controller_peminjaman/Controller_peminjaman/viewFormDetailpeminjaman/$1';
$route['Pengembalian/(:any)'] = 'Controller_peminjaman/Controller_peminjaman/editStatusDetaileminjmana/$1';


//Route User
$route['Userlanding'] = 'Controller_landingpage/landingpage';
$route['LoginMahasiswa'] = 'Controller_landingpage/Login_user/Viewlogin';
$route['admin'] = 'ControllerAdmin/Login';
$route['dashboard'] = 'ControllerAdmin/Dashboard';
$route['reguser'] = 'Controller_landingpage/Reg_user_mahasiswa';
$route['peminjaman/(:any)'] = 'Controller_landingpage/landingpage/peminjaman/$1';
$route['riwayatPeminjaman/(:any)'] = 'Controller_landingpage/landingpage/getdatariwayat/$1';
$route['formpeminjaman'] = 'Controller_landingpage/landingpage/peminjaman';
$route['pencarian'] = 'Controller_landingpage/landingpage/search';
$route['pinjam'] = 'Controller_landingpage/landingpage/addPeminjaantoDB';
$route['daftarpeminjaman'] = 'Controller_landingpage/landingpage/dafarpeminjaman';
$route['Checkout'] = 'Controller_landingpage/landingpage/addPeminjaantoDB';
$route['Reset'] = 'Controller_landingpage/landingpage/viewReset';
$route['ResetOTP'] = 'Controller_landingpage/landingpage/viewResetOTP';
$route['ResetPassword'] = 'Controller_landingpage/landingpage/resetpassword';


//Route Alat
$route['alat'] = 'ControllerAlat/Controller_alat/getDataAlat';
$route['formeditalat/(:any)'] = 'ControllerAlat/Controller_alat/viewFormEditAlat/$1';
$route['deletealat/(:any)'] = 'ControllerAlat/Controller_alat/deleteAlat/$1';
$route['alatId'] = 'ControllerAlat/Controller_alat/getalatById';

//Route Kerusakan
$route['kerusakan'] = 'Controller_kerusakan/Controller_kerusakan/getData';
$route['addKerusakan'] = 'Controller_kerusakan/Controller_kerusakan/addKerusakan';
$route['editKerusakan'] = 'Controller_kerusakan/Controller_kerusakan/editKeruskan';
$route['viewFormEditKerusakan/(:any)'] = 'Controller_kerusakan/Controller_kerusakan/viewFormEditkerusakan/$1';

//Route Bahan
$route['bahan'] = 'Controller_bahan/Controller_bahan/getDatabahan';
$route['addBahan'] = 'Controller_bahan/Controller_bahan/addbahan';
$route['formeditbahan/(:any)'] = 'Controller_bahan/Controller_bahan/viewFormEditbahan/$1';
$route['deletebahan/(:any)'] = 'Controller_bahan/Controller_bahan/deletebahan/$1';

//Route Paket
$route['paket'] = 'Controller_paket/Controller_paket/get_paket';
$route['addpaket'] = 'Controller_paket/Controller_paket/addpaket';
$route['adddetailpaket'] = 'Controller_paket/Controller_paket/adddetailpaket';
$route['formeditalat/(:any)'] = 'ControllerAlat/Controller_alat/viewFormEditAlat/$1';
$route['formdetail/(:any)'] = 'Controller_paket/Controller_paket/viewFormDetailpaket/$1';
$route['deletepaket/(:any)'] = 'Controller_paket/Controller_paket/deletepaket/$1';
$route['deleteDetailpaket/(:any)'] = 'Controller_paket/Controller_paket/deleteDetailpaket/$1';

//Route Kategori
$route['kategori'] = 'ControllerCategory/Controller_category/getDataCategory';
$route['formeditkategori/(:any)'] = 'ControllerCategory/Controller_category/viewFormEditCategory/$1';
$route['deletekategori/(:any)'] = 'ControllerCategory/Controller_category/deleteCategory/$1';

//Route Mahasiswa
$route['mahasiswa'] = 'ControllerMahasiswa/Controller_mahasiswa/get_mahasiswa';
$route['editstatusmahasiswa/(:any)/(:any)'] = 'ControllerMahasiswa/Controller_mahasiswa/editStatusmahasiswa/$1/$2';
$route['formeditmahasiswa/(:any)'] = 'ControllerMahasiswa/Controller_mahasiswa/viewFormEditmahasiswa/$1';
$route['deletemahasiswa/(:any)'] = 'ControllerMahasiswa/Controller_mahasiswa/deletemahasiswa/$1';

//Route Karyawan
$route['karyawan'] = 'ControllerKaryawan/Controller_karyawan/get_karyawan';
$route['editstatuskaryawan/(:any)/(:any)'] = 'ControllerKaryawan/Controller_karyawan/editStatusKaryawan/$1/$2';
$route['formeditkaryawan/(:any)'] = 'ControllerKaryawan/Controller_karyawan/viewFormEditKaryawan/$1';
$route['deletekaryawan/(:any)'] = 'ControllerKaryawan/Controller_karyawan/deleteKaryawan/$1';

//Route Usergroup
$route['usergroup'] = 'Controller_usergroup/Controller_usergroup/get_usergroup';
$route['formeditusergroup/(:any)'] = 'Controller_usergroup/Controller_usergroup/viewFormEditusergroup/$1';
$route['deleteusergroup/(:any)'] = 'Controller_usergroup/Controller_usergroup/deleteusergroup/$1';

//Route User
$route['user'] = 'Controller_user/Controller_user/get_user';
$route['editstatususer/(:any)/(:any)'] = 'Controller_user/Controller_user/editStatusUser/$1/$2';
$route['formedituser/(:any)'] = 'Controller_user/Controller_user/viewFormEdituser/$1';
$route['deleteuser/(:any)'] = 'Controller_user/Controller_user/deleteuser/$1';

//Route User Mahasiswa
$route['user_mahasiswa'] = 'Controller_user_mahasiswa/Controller_user_mahasiswa/get_user_mahasiswa';
$route['editusermahasiswa/(:any)/(:any)'] = 'Controller_user_mahasiswa/Controller_user_mahasiswa/editusermahasiswa/$1/$2';
$route['formedituser_mahasiswa/(:any)'] = 'Controller_user_mahasiswa/Controller_user_mahasiswa/viewFormEdituser_mahasiswa/$1';
$route['deleteusermahasiswa/(:any)'] = 'Controller_user_mahasiswa/Controller_user_mahasiswa/deleteuser_mahasiswa/$1';


//Route Jadwal
$route['jadwal'] = 'ControllerJadwal/Controller_jadwal/get_jadwal';
$route['formeditjadwal/(:any)'] = 'ControllerJadwal/Controller_jadwal/viewFormEditjadwal/$1';
$route['deletejadwal/(:any)'] = 'ControllerJadwal/Controller_jadwal/deletejadwal/$1';
$route['addJadwal'] = 'ControllerJadwal/Controller_jadwal/addjadwal';
$route['editJadwal'] = 'ControllerJadwal/Controller_jadwal/editjadwal';

//Route Report
$route['ReportAlat'] = 'Controller_report/Controller_report/cetakAlatAll';
$route['ReportBahan'] = 'Controller_report/Controller_report/cetakBahanAll';
$route['ReportPeminjaman/(:any)'] = 'Controller_report/Controller_report/cetakReportPeminjamanbyId/$1';
$route['ReportKerusakan'] = 'Controller_report/Controller_report/cetakReportKerusakan';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
