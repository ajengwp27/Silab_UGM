<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Controller_paket extends CI_Controller
{

    /**
     * Class constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_paket');
        $this->load->model('Model_alat');
    }

    function get_paket()
    {
        $data['paket'] = $this->Model_paket->getDatapaket();
        $this->template->load('Template/Template_admin', 'Form_paket/Form_data_paket', $data);
    }

    function get_paketall()
    {
        $data = $this->Model_paket->getDatajumlahDetailpaket();
        foreach($data as $d)
        {
            $detail[$d->nama_paket.'#'.$d->id_paket] = array('detail'=> $this->Model_paket->getDataDetailpaket($d->id_paket));
        }
        foreach($detail as $k=>$key)
        {
            $id= explode("#",$k);
            echo $id[1].'='.json_encode($key['detail']).'<br>';
        }
    }

    function viewFormDetailpaket($id_paket)
    {
        $data['detailpaket'] = $this->Model_paket->getDataDetailpaket($id_paket);
        $data['alat'] = $this->Model_alat->getDataAlat();
        $data['id_paket'] = $id_paket;
        $this->template->load('Template/Template_admin', 'Form_paket/Form_detail_paket', $data);;
    }

    
    function addpaket()
    {
        $paket = array(
            'nama_paket' => $this->input->post('namapaket')
        );
        $addpaket = $this->Model_paket->insertDatapaket($paket);
        if ($addpaket) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('paket');
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('paket');
        }
    }

    function adddetailpaket()
    {   
        $id_paket = $this->input->post('idpaket');
        $detail_alat = $this->input->post('detailalat');
        foreach ($detail_alat as $data)
        {
            $paket = array(
                'id_alat'  => $data,
                'jumlah'   => 1,
                'id_paket' => $id_paket
            );
            $addpaket = $this->Model_paket->insertDetailpaket($paket);
        }
        if ($addpaket) {
            $this->session->set_flashdata('Status', 'Input Success');
            redirect('formdetail/'.$id_paket);
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('formdetail/'.$id_paket);
        }
    }

    function editpaket()
    {
        $id_paket = $this->input->post('submitid');
        $paket = array(
            'Kegiatan' => $this->input->post('Kegiatan'),
            'jam'      => $this->input->post('Jam'),
            'hari'     => $this->input->post('Hari')
        );
        $editpaket = $this->Model_paket->update_paket($id_paket, $paket);
        if ($editpaket) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('paket');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('paket');
        }
    }

    function editStatusDetaileminjmana()
    {
        $id_paket = urldecode($_GET['url']);
        $paket = array(
            'Status' => '2'
        );
        $editpaket = $this->Model_paket->updateStatuspaket($id_paket, $paket);
        if ($editpaket) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('paket');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('paket');
        }
    }

    function editStatuspaket($id_paket, $status)
    {
        $paket = array(
            'Status' => $status
        );
        $editpaket = $this->Model_paket->update_paket($id_paket, $paket);
        if ($editpaket) {
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('paket');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('paket');
        }
    }

    function deletepaket($id_paket)
    {
        $deletepaket = $this->Model_paket->deleteDatapaket($id_paket);
        if ($deletepaket) {
            $this->session->set_flashdata('Status', 'Delete Success');
            redirect('paket');
        } else {
            $this->session->set_flashdata('Status', 'Delete Failed');
            redirect('paket');
        }
    }

    function deleteDetailpaket($id_detail_paket)
    {
        $deletepaket = $this->Model_paket->deleteDetailpaket($id_detail_paket);
        if ($deletepaket) {
            $this->session->set_flashdata('Status', 'Delete Success');
            redirect('paket');
        } else {
            $this->session->set_flashdata('Status', 'Delete Failed');
            redirect('paket');
        }
    }
}
