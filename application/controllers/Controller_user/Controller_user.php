<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_user extends CI_Controller{

    /**
     * Class constructor.
     */
    function __construct() {
        parent::__construct();
        $this->load->model('Model_user');
    }

    function get_user()
    {
        $data['user'] = $this->Model_user->get_user();
        $this->template->load('Template/Template_admin','Form_user/Form_data_user',$data);
    }

    function viewFormEdituser()
    {
        $id_user = $this->input->get('id_user');
        $data['edituser'] = $this->Model_user->get_user_by_id($id_user);
        $this->template->load('Template/Template_admin','Form_user/Form_edit_user',$data);
    }

    function edituser()
    {
        $id_user = $this->input->post('submitid');
        $user = array(
            'Username'=>$this->input->post('username'),
            'Password'=>$this->input->post('password'),
            'id_level'=>$this->input->post('hak_akses'),
            'id_karyawan'=>$this->input->post('nama_karyawan'),
            'update_at'=>get_current_date()
            );
        $edituser= $this->Model_user->update_user($id_user,$user);
        if($edituser)
        {
            $this->session->set_flashdata('Status','Edit Success');
            redirect('Controller_user/Controller_user/get_user');
        }
        else
        {
            $this->session->set_flashdata('Status','Edit Failed');
            redirect('Controller_user/Controller_user/get_user');
        }
    }

    function editStatusUser()
    {
        $id_user = $this->input->get('id');
        $status = $this->input->get('status');
        $user = array(
                        'Status'=>$status
                        );
        $edituser = $this->Model_user->update_user($id_user,$user);
        if($edituser)
        {
            $this->session->set_flashdata('Status','Edit Success');
            redirect('Controller_user/Controller_user/get_user');
        }
        else
        {
            $this->session->set_flashdata('Status','Edit Failed');
            redirect('Controller_user/Controller_user/get_user');
        }
    }

    function deleteuser()
    {
        $id_user=$this->input->get('id');
        $deleteuser = $this->Model_user->delete_user($id_user);
        if($deleteuser)
        {
            $this->session->set_flashdata('Status','Delete Success');
            redirect('Controller_user/Controller_user/get_user');
        }
        else
        {
            $this->session->set_flashdata('Status','Delete Failed');
            redirect('Controller_user/Controller_user/get_user');
        }
    }
}
?>