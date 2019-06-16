<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reg_user_mahasiswa extends CI_Controller{
    /**
     * Class constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user_mahasiswa');
        $this->load->model('Model_mahasiswa');
    }

    function index()
    {
        $data['mahasiswa'] = $this->Model_mahasiswa ->get_mahasiswa();
        $this->load->view('Form_landingpage/register_mahasiswa',$data);
    }

    function add_admin()
    {
        $username    = $this->input->post('username');
        $password    = $this->input->post('password');
        $id_level    = $this->input->post('id_level');
        $id_karyawan = $this->input->post('id_karyawan');
        $dataAdmin = array(
                           'Username'    => $username,
                           'Password'    => $password,
                           'id_level'    => $id_level,
                           'id_karyawan' => $id_karyawan
                        );
        $reg_admin = $this->Model_admin->add_admin($dataAdmin);
        if($reg_admin)
        {
            $this->load->view('admin/login');
        }
    }
}
?>