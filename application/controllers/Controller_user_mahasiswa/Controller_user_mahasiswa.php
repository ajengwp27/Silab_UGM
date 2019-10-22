<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_user_mahasiswa extends CI_Controller
{

    /**
     * Class constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user_mahasiswa');
        $this->load->model('Model_mahasiswa');
    }

    function get_user_mahasiswa()
    {
        $data['user_mahasiswa'] = $this->Model_user_mahasiswa->get_user_mahasiswa();
        $this->template->load('Template/Template_admin', 'Form_user_mahasiswa/Form_data_user_mahasiswa', $data);
    }

    function viewFormEdituser_mahasiswa($id)
    {
        $data['edituser_mahasiswa '] = $this->Model_user_mahasiswa->get_user_mahasiswa_by_id($id);
        $this->template->load('Template/Template_admin', 'Form_user_mahasiswa/edit_user_mahasiswa', $data);;
    }

    function editusermahasiswa()
    {
        $id = $this->input->post('submitid');
        $user_mahasiswa  = array(
            'Username'  => $this->input->post('username'),
            'Password'  => $this->input->post('password'),
            'Update_at' => get_current_date()
        );
        $edituser_mahasiswa = $this->Model_user_mahasiswa->update_user_mahasiswa($id, $user_mahasiswa);
        if ($edituser_mahasiswa) {
            $this->session->set_flashdata('Status', 'Edit Succes');
            redirect('Controller_user_mahasiswa/Controller_user_mahasiswa/get_user_mahasiswa');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('Controller_user_mahasiswa/Controller_user_mahasiswa/get_user_mahasiswa');
        }
    }

    function editStatususer_mahasiswa()
    {
        $id_user_mahasiswa = $this->input->get('id_user_mahasiswa');
        $status = $this->input->get('status');
        $user_mahasiswa  = array(
            'Status' => $status
        );
        $edituser_mahasiswa = $this->Model_user_mahasiswa->update_user_mahasiswa($id_user_mahasiswa, $user_mahasiswa);
        if ($edituser_mahasiswa) {
            $this->session->set_flashdata('Status', 'Edit Succes');
            redirect('Controller_user_mahasiswa/Controller_user_mahasiswa/get_user_mahasiswa');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('Controller_user_mahasiswa/Controller_user_mahasiswa/get_user_mahasiswa');
        }
    }

    function deleteuser_mahasiswa($id_user_mahasiswa)
    {
        
        $deleteuser_mahasiswa  = $this->Model_user_mahasiswa->delete_user_mahasiswa($id_user_mahasiswa);
        if ($deleteuser_mahasiswa) {
            $this->session->set_flashdata('Status', 'Delete Succes');
            redirect('Controller_user_mahasiswa/Controller_user_mahasiswa/get_user_mahasiswa ');
        } else {
            $this->session->set_flashdata('Status', 'Delete Failed');
            redirect('Controller_user_mahasiswa/Controller_user_mahasiswa/get_user_mahasiswa ');
        }
    }
}
