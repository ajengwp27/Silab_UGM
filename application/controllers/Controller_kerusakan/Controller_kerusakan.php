<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_kerusakan extends CI_Controller
{
    //ini harus ada untuk load model
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_alat');
        $this->load->model('Model_category');
        $this->load->model('Model_kerusakan');
    }

    function getData()
    {
        $data['alat']     = $this->Model_alat->getDataAlat();
        $data['kerusakan']     = $this->Model_kerusakan->getDataKerusakan();
        $this->template->load('Template/Template_admin', 'Form_kerusakan/Form_data_kerusakan', $data);
    }

    function addKerusakan()
    {
        $id_alat = $this->input->post('alat');
        $jml = $this->input->post('jml');
        $status = $this->input->post('status');
        $alat = array(
            'id_alat'          => $id_alat,
            'Jumlah_kerusakan' => $jml,
            'Status'           => $status,
            'Name'             => $NamaMahasiswa
        );
        $dataAlatbyId     = $this->Model_alat->getDataAlatById($id_alat);
        $edialat = array('stok' => $dataAlatbyId->stok - $jml);
        $this->Model_alat->editDataAlat($id_alat,$edialat);
        $addkerusakan = $this->Model_kerusakan->insertDataKerusakan($alat);
        if ($addkerusakan) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('kerusakan');
        }
    }

    function viewFormEditkerusakan($id)
    {
        $data['k'] = $this->Model_kerusakan->getDataKerusakanbyId($id);
        $this->template->load('Template/Template_admin', 'Form_kerusakan/Form_edit_kerusakan', $data);;
    }

    function editKeruskan()
    {
        $id_alat      = $this->input->post('idalat');
        $id_kerusakan = $this->input->post('id_kerusakan');
        $status       = $this->input->post('status');
        $jmlold       = $this->input->post('jmlold');
        $NamaMahasiswa  = $this->input->post('Name');
        $jml = $this->input->post('jml');
        if($status == "2")
        {
            $editrusak    = array('Status' => "2");
            $hasil =$this->Model_kerusakan->editStatusKerusakan($id_kerusakan,$editrusak);
        }
        if($status == "3")
        {
            $dataAlatbyId = $this->Model_alat->getDataAlatById($id_alat);
            $editalat  = array('stok'   => $dataAlatbyId->stok + $jml);
            $editrusak = array('Status' => "3");
            $this->Model_kerusakan->editStatusKerusakan($id_kerusakan,$editrusak);
            $hasil = $this->Model_alat->editDataAlat($id_alat,$editalat);
        }
        if ($hasil) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('kerusakan');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('kerusakan');
        }
    }

    function deleteAlat($id)
    {
        $deletealat = $this->Model_alat->deleteDataAlat($id);
        if ($deletealat) {
            $this->session->set_flashdata('Status', 'Delete Success');
            redirect('alat');
        } else {
            $this->session->set_flashdata('Status', 'Delete Failed');
            redirect('alat');
        }
    }

    public function aksi_upload($imgname)
    {
        $config['upload_path']   = './assets/gambar_alat/';
        $config['allowed_types'] = '*';
        $config['file_name']     = $imgname;
        //$config['max_size']             = 100;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $error = array('error'       => $this->upload->display_errors());
            echo json_encode($error);
        } else {
            $data  = array('upload_data' => $this->upload->data());
            return true;
        }
    }
}
