<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_bahan extends CI_Controller
{
    //ini harus ada untuk load model
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_bahan');
        $this->load->model('Model_category');
    }

    function getDatabahan()
    {
        $data['bahan']     = $this->Model_bahan->getDatabahan();
        $this->template->load('Template/Template_admin', 'Form_bahan/Form_data_bahan', $data);
    }

    function addbahan()
    {
        $bahan = array(
            'nama_bahan' => $this->input->post('name'),
            'stok'       => $this->input->post('stok'),
            'satuan'     => $this->input->post('satuan')
        );
        $addbahan     = $this->Model_bahan->insertDatabahan($bahan);
        if ($addbahan) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('bahan');
        }
    }

    function viewFormEditbahan($id)
    {
        $data['editbahan'] = $this->Model_bahan->getDatabahanById($id);
        $this->template->load('Template/Template_admin', 'Form_bahan/Form_edit_bahan', $data);;
    }

    function editbahan()
    {
        $id_bahan = $this->input->post('submitid');
        $bahan = array(
            'nama_bahan' => $this->input->post('name'),
            'satuan'     => $this->input->post('satuan'),
            'Stok'       => $this->input->post('stok'),
            'update_at'  => get_current_date()
        );
        $editbahan = $this->Model_bahan->editDatabahan($id_bahan, $bahan);
        if ($editbahan) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('bahan');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('bahan');
        }
    }

    function deletebahan($id)
    {
        $bahan = array(
            'deleted' => 1,
            'update_at' => get_current_date()
        );
        $editbahan = $this->Model_bahan->editDatabahan($id, $bahan);
        if ($editbahan) {
            $this->session->set_flashdata('Status', 'Delete Success');
            redirect('bahan');
        } else {
            $this->session->set_flashdata('Status', 'Delete Failed');
            redirect('bahan');
        }
    }
}
