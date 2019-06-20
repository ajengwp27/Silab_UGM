<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Controller_alat extends CI_Controller
    {
        //ini harus ada untuk load model
        function __construct() {
            parent::__construct();
            $this->load->model('Model_alat');
            $this->load->model('Model_category');
            
        }

        function getDataAlat()
        {
            $data['alat']     = $this->Model_alat->getDataAlat();
            $data['kategori'] = $this->Model_category->getDataCategory();
            $this->template->load('Template/Template_admin','Form_alat/Form_data_alat',$data);
        }

        function addAlat()
        {
                $alat = array (
                    'Name'           => $this->input->post('name'),
                    'Category_id'    => $this->input->post('Category_id'),
                    'Number_of_rack' => $this->input->post('nomorrak')
                );
            $addalat= $this->Model_alat->insertDataAlat($alat);
            if($addalat)
            {
                $this->session->set_flashdata('Status','Input Succes');
                redirect('alat');
            }
        }

        function viewFormEditAlat($id)
        {
            $data['editalat'] = $this->Model_alat->getDataAlatById($id);
            $this->template->load('Template/Template_admin','Form_alat/Form_edit_alat',$data);;
        }

        function editAlat()
        {
            $id_alat = $this->input->post('submitid');
            $alat = array(
                            'Name'           => $this->input->post('name'),
                            'Category_id'    => $this->input->post('Category_id'),
                            'Number_of_rack' => $this->input->post('nomorrak'),
                            );
            $editalat= $this->Model_alat->editDataAlat($id_alat,$alat);
            if($editalat)
            {   
            $this->session->set_flashdata('Status','Edit Succes');
            redirect('alat');
            }
            else
            {
            $this->session->set_flashdata('Status','Edit Failed');
            redirect('alat');  
            } 
        }

        function deleteAlat($id)
        {
            $deletealat = $this->Model_alat->deleteDataAlat($id);
            if($deletealat)
            {   
                $this->session->set_flashdata('Status','Delete Success');
                redirect('alat');
            }
            else
            {
                $this->session->set_flashdata('Status','Delete Failed');
                redirect('alat');
            }
        }
        
    }
?>