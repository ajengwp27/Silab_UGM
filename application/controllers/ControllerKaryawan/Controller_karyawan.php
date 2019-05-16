<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_karyawan extends CI_Controller{

    /**
     * Class constructor.
     */
    function __construct() {
        parent::__construct();
        $this->load->model('Model_karyawan');
    }

    function get_karyawan()
    {
        $data['karyawan'] = $this->Model_karyawan->get_karyawan();
        $this->template->load('Template/Template_admin','Form_karyawan/Form_data_karyawan',$data);
    }

    function viewFormEditKaryawan()
    {
        $id_karyawan = $this->input->get('id_karyawan');
        $data['editkaryawan'] = $this->Model_karyawan->get_karyawan_by_id($id_karyawan);
        $this->template->load('Template/Template_admin','Form_karyawan/edit_karyawan',$data);
    }

    function addKaryawan()
    {
        $karyawan = array(
            'Name'=>$this->input->post('name'),
            'Gender'=>$this->input->post('gender'),
            'Address'=>$this->input->post('address'),
            'Phone'=>$this->input->post('phone'),
            'email_karyawan'=>$this->input->post('email_karyawan')
            );
        $addkaryawan= $this->Model_karyawan->add_karyawan($karyawan);
        if($addkaryawan)
        {
            $this->session->set_flashdata('Status','Input Success');
            redirect('ControllerKaryawan/Controller_karyawan/get_karyawan');
        }
        else
        {
            $this->session->set_flashdata('Status','Input Failed');
            redirect('ControllerKaryawan/Controller_karyawan/get_karyawan');
        }
    }

    function editKaryawan()
    {
        $id_karyawan = $this->input->post('submited');
        $karyawan = array(
            'Name'=>$this->input->post('name'),
            'Gender'=>$this->input->post('gender'),
            'Address'=>$this->input->post('address'),
            'Phone'=>$this->input->post('phone'),
            'email_karyawan'=>$this->input->post('email_karyawan')
            );
        $editkaryawan= $this->Model_karyawan->update_karyawan($id_karyawan,$karyawan);
        if($editkaryawan)
        {
            $this->session->set_flashdata('Status','Edit Success');
            redirect('ControllerKaryawan/Controller_karyawan/get_karyawan');
        }
        else
        {
            $this->session->set_flashdata('Status','Edit Failed');
            redirect('ControllerKaryawan/Controller_karyawan/get_karyawan');
        }
    }

    function deleteKaryawan()
    {
        $id_karyawan=$this->input->get('id_karyawan');
        $deleteKaryawan = $this->Model_karyawan->delete_karyawan($id_karyawan);
        if($deleteKaryawan)
        {
            $this->session->set_flashdata('Status','Delete Succes');
            redirect('ControllerKaryawan/Controller_karyawan/get_karyawan');
        }
    }
}
?>