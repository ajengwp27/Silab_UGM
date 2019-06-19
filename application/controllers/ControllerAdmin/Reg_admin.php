<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reg_admin extends CI_Controller{
    /**
     * Class constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
        $this->load->model('Model_karyawan');
        $this->load->model('Model_usergroup');
    }

    function index()
    {
        $dataRegistrasi['usergroup']=$this->Model_usergroup->get_user_group();
        $this->load->view('Form_admin/register_admin',$dataRegistrasi);
    }

    function add_admin()
    {
        $username  = $this->input->post('username');
        $password     = $this->input->post('password');
        $id_level     = $this->input->post('level');
        $Email        = $this->input->post('email');
        $datakaryawan = $this->Model_karyawan->get_karyawan_by_email($Email);
        if ($datakaryawan) 
        {
            if ($this->Model_admin->get_admin_by_id_karyawan($datakaryawan->id_karyawan)) 
            {
                $this->session->set_flashdata('Error','Email Sudah Terdaftar Jadi Admin');
                redirect('regadmin');
            }
            else 
            {
                $dataAdmin = array('Username'=>$username,
                                   'Password'=>$password,
                                   'id_level'=>$id_level,
                                   'id_karyawan'=>$datakaryawan->id_karyawan);
                $reg_admin = $this->Model_admin->add_admin($dataAdmin);
                if($reg_admin)
                {
                    $this->load->view('Form_admin/login');
                }
            }
        }
        else 
        {
            $this->session->set_flashdata('Error','Email Karyawan Salah');
            redirect('regadmin/');
        }
    }
}
?>