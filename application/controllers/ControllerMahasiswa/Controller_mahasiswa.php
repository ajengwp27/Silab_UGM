<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_mahasiswa extends CI_Controller
{

    /**
     * Class constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_mahasiswa');
    }

    function get_mahasiswa()
    {
        $data['mahasiswa'] = $this->Model_mahasiswa->get_mahasiswa();
        $this->template->load('Template/Template_admin', 'Form_mahasiswa/Form_data_mahasiswa', $data);
    }

    function viewFormEditmahasiswa($id_mahasiswa)
    {
        $data['editmahasiswa'] = $this->Model_mahasiswa->get_mahasiswa_by_id($id_mahasiswa);
        $this->template->load('Template/Template_admin', 'Form_mahasiswa/Form_edit_mahasiswa', $data);;
    }

    function addmahasiswa()
    {
        $mahasiswa = array(
            'Nim'             => $this->input->post('nim'),
            'Name'            => $this->input->post('name'),
            'Gender'          => $this->input->post('gender'),
            'Address'         => $this->input->post('address'),
            'Phone'           => $this->input->post('phone'),
            'Email_mahasiswa' => $this->input->post('email'),
        );
        $validate = $this->Model_mahasiswa->get_mahasiswa_by_NIM($this->input->post('nim'));
        $validateemail = $this->Model_mahasiswa->get_mahasiswa_by_Email($this->input->post('email'));
        if($validate)
        {
            $this->session->set_flashdata('Status', 'Input Failed : NIM Sudah terdaftar');
            redirect('mahasiswa');
        }
        elseif($validateemail)
        {
            $this->session->set_flashdata('Status', 'Input Failed : Email Sudah terdaftar');
            redirect('mahasiswa');
        }
        else
        {
            $addmahasiswa = $this->Model_mahasiswa->add_mahasiswa($mahasiswa);
            if ($addmahasiswa) {
                $this->session->set_flashdata('Status', 'Input Success');
                redirect('mahasiswa');
            } else {
                $this->session->set_flashdata('Status', 'Input Failed');
                redirect('mahasiswa');
            }
        }
    }


    function editmahasiswa()
    {
        $id_mahasiswa = $this->input->post('submitid');
        $mahasiswa = array(
            'Nim'             => $this->input->post('nim'),
            'Name'            => $this->input->post('name'),
            'Gender'          => $this->input->post('gender'),
            'Address'         => $this->input->post('address'),
            'Phone'           => $this->input->post('phone'),
            'Email_mahasiswa' => $this->input->post('email'),
            'Update_at'       => get_current_date()
        );
        $editmahasiswa = $this->Model_mahasiswa->update_mahasiswa($id_mahasiswa, $mahasiswa);
        if ($editmahasiswa) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('mahasiswa');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('mahasiswa');
        }
    }

    function editStatusmahasiswa($id_mahasiswa, $status)
    {
        if($status=='Aktif')
        {
            $mahasiswa = array(
                'Status' => $status
            );
            $editmahasiswa = $this->Model_mahasiswa->update_mahasiswa($id_mahasiswa, $mahasiswa);
            if ($editmahasiswa) {
                $this->session->set_flashdata('Status', 'Edit Success');
                redirect('emailuser/'.$id_mahasiswa);
            } else {
                $this->session->set_flashdata('Status', 'Edit Failed');
                redirect('mahasiswa');
            }
        }
        else
        {
            $mahasiswa = array(
                'Status' => $status
            );
            $editmahasiswa = $this->Model_mahasiswa->update_mahasiswa($id_mahasiswa, $mahasiswa);
            if ($editmahasiswa) {
                $this->session->set_flashdata('Status', 'Edit Success');
                redirect('emailuserNon/'.$id_mahasiswa);
            } else {
                $this->session->set_flashdata('Status', 'Edit Failed');
                redirect('mahasiswa');
            }
        }
    }

    function deletemahasiswa($id_mahasiswa)
    {
        $mahasiswa = array(
            'deleted' => 1
        );
        $editmahasiswa = $this->Model_mahasiswa->update_mahasiswa($id_mahasiswa, $mahasiswa);
        if ($editmahasiswa) {
            $this->session->set_flashdata('Status', 'Delete Success');
            redirect('mahasiswa');
        } else {
            $this->session->set_flashdata('Status', 'Delete Failed');
            redirect('mahasiswa');
        }
    }
}
