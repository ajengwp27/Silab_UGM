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

//Route Alat
$route['alat'] = 'ControllerAlat/Controller_alat/getDataAlat';
$route['formeditalat/(:any)'] = 'ControllerAlat/Controller_alat/viewFormEditAlat/$1';
$route['deletealat/(:any)'] = 'ControllerAlat/Controller_alat/deleteAlat/$1';

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
$route['formedituser/(:any)'] = 'Controller_user/Controller_user/viewFormEdituser/$1';
$route['deleteuser/(:any)'] = 'Controller_user/Controller_user/deleteuser/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
