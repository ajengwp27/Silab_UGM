<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_karyawan extends CI_Controller
{

    /**
     * Class constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_karyawan');
    }

    function get_karyawan()
    {
        $data['karyawan'] = $this->Model_karyawan->get_karyawan();
        $this->template->load('Template/Template_admin', 'Form_karyawan/Form_data_karyawan', $data);
    }

    function viewFormEditkaryawan($id_karyawan)
    {
        $data['editkaryawan'] = $this->Model_karyawan->get_karyawan_by_id($id_karyawan);
        $this->template->load('Template/Template_admin', 'Form_karyawan/Form_edit_karyawan', $data);
    }

    function addkaryawan()
    {
        $karyawan = array(
            'Name' => $this->input->post('name'),
            'Gender' => $this->input->post('gender'),
            'Address' => $this->input->post('address'),
            'Phone' => $this->input->post('phone'),
            'email_karyawan' => $this->input->post('email_karyawan'),
        );
        $addkaryawan = $this->Model_karyawan->add_karyawan($karyawan);
        if ($addkaryawan) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('karyawan');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('karyawan');
        }
    }

    function editkaryawan()
    {
        $id_karyawan = $this->input->post('submitid');
        $karyawan = array(
            'Name' => $this->input->post('name'),
            'Gender' => $this->input->post('gender'),
            'Address' => $this->input->post('address'),
            'Phone' => $this->input->post('phone'),
            'email_karyawan' => $this->input->post('email_karyawan'),
            'update_at' => get_current_date()
        );
        $editkaryawan = $this->Model_karyawan->update_karyawan($id_karyawan, $karyawan);
        if ($editkaryawan) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('karyawan');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('karyawan');
        }
    }

    function editStatuskaryawan($id_karyawan, $status)
    {
        $karyawan = array(
            'Status' => $status
        );
        $editkaryawan = $this->Model_karyawan->update_karyawan($id_karyawan, $karyawan);
        if ($editkaryawan) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('karyawan');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('karyawan');
        }
    }

    function deleteKaryawan($id_karyawan)
    {
        echo $id_karyawan;
        $karyawan = array(
            'deleted' => 1
        );
        $editkaryawan = $this->Model_karyawan->update_karyawan($id_karyawan, $karyawan);

        if ($editkaryawan) {
            $this->session->set_flashdata('Status', 'Delete Success');
            redirect('karyawan');
        } else {
            $this->session->set_flashdata('Status', 'Delete Failed');
            redirect('karyawan');
        }
    }
}
