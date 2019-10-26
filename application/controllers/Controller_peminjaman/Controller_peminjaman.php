<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_peminjaman extends CI_Controller
{

    /**
     * Class constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_peminjaman');
    }

    function get_peminjaman()
    {
        $data['peminjaman'] = $this->Model_peminjaman->get_peminjaman();
        $this->template->load('Template/Template_admin', 'Form_peminjaman/Form_data_peminjaman', $data);
    }

    function viewFormDetailpeminjaman()
    {
        $id_peminjaman = urldecode($_GET['url']);
        $data['peminjaman'] = $this->Model_peminjaman->getDetailPeminjaman($id_peminjaman);
        $data['id_peminjaman'] = $id_peminjaman;
        $this->template->load('Template/Template_admin', 'Form_peminjaman/Form_detail_peminjaman', $data);;
    }

    
    function viewFormPeminjaman()
    {
        $data['peminjaman'] = $this->Model_peminjaman->getDataPeminjamanAll();
        $this->template->load('Template/Template_admin', 'Form_peminjaman/Form_data_peminjaman', $data);;
    }

    function addpeminjaman()
    {
        $peminjaman = array(
            'Kegiatan' => $this->input->post('Kegiatan'),
            'jam'      => $this->input->post('Jam'),
            'hari'     => $this->input->post('Hari'),
        );
        $addpeminjaman = $this->Model_peminjaman->add_peminjaman($peminjaman);
        if ($addpeminjaman) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('peminjaman');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('peminjaman');
        }
    }

    function editpeminjaman()
    {
        $id_peminjaman = $this->input->post('submitid');
        $peminjaman = array(
            'Kegiatan' => $this->input->post('Kegiatan'),
            'jam'      => $this->input->post('Jam'),
            'hari'     => $this->input->post('Hari')
        );
        $editpeminjaman = $this->Model_peminjaman->update_peminjaman($id_peminjaman, $peminjaman);
        if ($editpeminjaman) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('peminjaman');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('peminjaman');
        }
    }

    function editStatusDetaileminjmana($id_peminjaman)
    {
        $peminjaman = array(
            'Status' => '2'
        );
        $editpeminjaman = $this->Model_peminjaman->updateStatusPeminjaman($id_peminjaman, $peminjaman);
        if ($editpeminjaman) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('peminjaman');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('peminjaman');
        }
    }

    function editStatuspeminjaman($id_peminjaman, $status)
    {
        $peminjaman = array(
            'Status' => $status
        );
        $editpeminjaman = $this->Model_peminjaman->update_peminjaman($id_peminjaman, $peminjaman);
        if ($editpeminjaman) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('peminjaman');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('peminjaman');
        }
    }

    function deletepeminjaman($id_peminjaman)
    {
        $deletepeminjaman = $this->Model_peminjaman->delete_peminjaman($id_peminjaman);
        if ($deletepeminjaman) {
            $this->session->set_flashdata('Status', 'Delete Succes');
            redirect('peminjaman');
        } else {
            $this->session->set_flashdata('Status', 'Delete Failed');
            redirect('peminjaman');
        }
    }
}
