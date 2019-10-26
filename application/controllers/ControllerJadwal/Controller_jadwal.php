<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_jadwal extends CI_Controller
{

    /**
     * Class constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_jadwal');
    }

    function get_jadwal()
    {
        $data['jadwal'] = $this->Model_jadwal->get_jadwal();
        $this->template->load('Template/Template_admin', 'Form_jadwal/Form_data_jadwal', $data);
    }

    function viewFormEditjadwal($id_jadwal)
    {
        $data['jadwal'] = $this->Model_jadwal->get_jadwal_by_id($id_jadwal);
        $this->template->load('Template/Template_admin', 'Form_jadwal/Form_edit_jadwal', $data);;
    }

    function addjadwal()
    {
        $jadwal = array(
            'Kegiatan' => $this->input->post('Kegiatan'),
            'jam'      => $this->input->post('Jam'),
            'hari'     => $this->input->post('Hari'),
        );
        $addjadwal = $this->Model_jadwal->add_jadwal($jadwal);
        if ($addjadwal) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('jadwal');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('jadwal');
        }
    }

    function editjadwal()
    {
        $id_jadwal = $this->input->post('submitid');
        $jadwal = array(
            'Kegiatan' => $this->input->post('Kegiatan'),
            'jam'      => $this->input->post('Jam'),
            'hari'     => $this->input->post('Hari')
        );
        $editjadwal = $this->Model_jadwal->update_jadwal($id_jadwal, $jadwal);
        if ($editjadwal) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('jadwal');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('jadwal');
        }
    }

    function editStatusjadwal($id_jadwal, $status)
    {
        $jadwal = array(
            'Status' => $status
        );
        $editjadwal = $this->Model_jadwal->update_jadwal($id_jadwal, $jadwal);
        if ($editjadwal) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('jadwal');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('jadwal');
        }
    }

    function deletejadwal($id_jadwal)
    {
        $deletejadwal = $this->Model_jadwal->delete_jadwal($id_jadwal);
        if ($deletejadwal) {
            $this->session->set_flashdata('Status', 'Delete Succes');
            redirect('jadwal');
        } else {
            $this->session->set_flashdata('Status', 'Delete Failed');
            redirect('jadwal');
        }
    }
}
