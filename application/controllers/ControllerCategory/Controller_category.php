<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Controller_category extends CI_Controller
    {
        //ini harus ada untuk load model
        function __construct() {
            parent::__construct();
            $this->load->model('Model_category');
            
        }

        function getDataCategory()
        {
            $data['Category'] = $this->Model_category->getDataCategory();
            $this->template->load('Template/Template_admin','Form_Category/Form_data_Category',$data);
        }

        function addCategory()
        {       //ini array buat insert, isinya nama kolom sama isinya  'Name_category' itu nama kolom 
                $Category = array (
                    'Name_category' =>$this->input->post('name')// isinya ambil dari input tadi
                );
            //ini panggil function insert di model_category sekalian kirim data arraynya 
            $addCategory= $this->Model_category->insertDataCategory($Category); //ini buat insertnya iya ters
            if($addCategory)
            {
                $this->session->set_flashdata('Status','Input Succes');
                redirect('kategori');
            }
        }

        function viewFormEditCategory($id)
        {
            $data['editcategory'] = $this->Model_category->getDataCategoryById($id);
            $this->template->load('Template/Template_admin','Form_category/Form_edit_category',$data);;
        }


        function editCategory()
        {
            $id_Category = $this->input->post('submitid');
            $Category = array(
                            'Name_category' =>$this->input->post('name')
                            );
            $editCategory= $this->Model_category->editDataCategory($id_Category,$Category);
            if($editCategory)
            {   
            $this->session->set_flashdata('Status','Edit Succes');
            redirect('kategori');
            }
            else
            {
            $this->session->set_flashdata('Status','Edit Failed');
            redirect('kategori');  
            } 
        }

        function deleteCategory($id_Category )
        {
          
            $deleteCategory  = $this->Model_category->deleteDataCategory($id_Category);
            if($deleteCategory)
            {   
                $this->session->set_flashdata('Status','Delete Succes');
                redirect('kategori');
            }
            else
            {
                $this->session->set_flashdata('Status','Delete Failed');
                redirect('kategori');
            }
        }
        
    }
?>