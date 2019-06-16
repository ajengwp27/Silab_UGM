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