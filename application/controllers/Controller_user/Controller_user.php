<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_user extends CI_Controller{

    /**
     * Class constructor.
     */
    function __construct() {
        parent::__construct();
        $this->load->model('Model_user');
        $this->load->model('Model_karyawan');
        $this->load->model('Model_usergroup');
    }

    function get_user()
    {
        $data['user'] = $this->Model_user->get_user();
        $this->template->load('Template/Template_admin','Form_user/Form_data_user',$data);
    }

    function viewFormEdituser($id_user)
    {
        
        $data['edituser']  = $this->Model_user->get_user_by_id($id_user);
        $data['usergroup'] = $this->Model_usergroup->get_user_group();
        $this->template->load('Template/Template_admin','Form_user/Form_edit_user',$data);
    }

    function edituser()
    {
        $id_user = $this->input->post('submitid');
        $user = array(
            'id_level'=>$this->input->post('hak_akses'),
            'update_at'=>get_current_date()
            );
        $edituser= $this->Model_user->update_user($id_user,$user);
        if($edituser)
        {
            $this->session->set_flashdata('Status','Edit Success');
            redirect('user');
        }
        else
        {
            $this->session->set_flashdata('Status','Edit Failed');
            redirect('user');
        }
    }

    function editStatusUser($id_user,$status)
    {
        $user = array(
                        'Status'=>$status
                        );
        $edituser = $this->Model_user->update_user($id_user,$user);
        if($edituser)
        {
            $this->session->set_flashdata('Status','Edit Success');
            redirect('user');
        }
        else
        {
            $this->session->set_flashdata('Status','Edit Failed');
            redirect('user');
        }
    }

    function deleteuser()
    {
        $id_user=$this->input->get('id');
        $deleteuser = $this->Model_user->delete_user($id_user);
        if($deleteuser)
        {
            $this->session->set_flashdata('Status','Delete Success');
            redirect('user');
        }
        else
        {
            $this->session->set_flashdata('Status','Delete Failed');
            redirect('user');
        }
    }
}
