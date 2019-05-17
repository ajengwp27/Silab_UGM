<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_mahasiswa extends CI_Controller{

    /**
     * Class constructor.
     */
    function __construct() {
        parent::__construct();
        $this->load->model('Model_mahasiswa');
    }

    function get_mahasiswa()
    {
        $data['mahasiswa'] = $this->Model_mahasiswa->get_mahasiswa();
        $this->template->load('Template/Template_admin','Form_mahasiswa/Form_data_mahasiswa',$data);
    }

    function viewFormEditmahasiswa()
    {
        $id_mahasiswa = $this->input->get('id_mahasiswa');
        $data['editmahasiswa'] = $this->Model_mahasiswa->get_mahasiswa_by_id($id_mahasiswa);
        $this->template->load('Template/Template_admin','Form_mahasiswa/edit_mahasiswa',$data);;
    }

    function addmahasiswa()
    {
        $mahasiswa = array(
                        'Nim'=>$this->input->post('nim'),
                        'Name'=>$this->input->post('name'),
                        'Gender'=>$this->input->post('gender'),
                        'Address'=>$this->input->post('address'),
                        'Phone'=>$this->input->post('phone'),
                        'Email_mahasiswa'=>$this->input->post('email_mahasiswa'),
                     );
        $addmahasiswa=$this->Model_mahasiswa->add_mahasiswa($mahasiswa);
        if($addmahasiswa)
        {
            $this->session->set_flashdata('Status','Input Success');
            redirect('ContollerMahasiswa/Controller_mahasiswa/get_mahasiswa');
        }
    }

    function editmahasiswa()
    {
        $id_mahasiswa = $this->input->post('submited');
        $mahasiswa = array(
                        'Nim'=>$this->input->post('nim'),
                        'Name'=>$this->input->post('name'),
                        'Gender'=>$this->input->post('gender'),
                        'Address'=>$this->input->post('address'),
                        'Phone'=>$this->input->post('phone'),
                        'Email_mahasiswa'=>$this->input->post('email_mahasiswa'),
                        'Update_at'=>get_current_date()
                    );
        $editmahasiswa = $this->Model_mahasiswa->update_mahasiswa($id_mahasiswa,$mahasiswa);
        if($editmahasiswa)
        {
            $this->session->set_flashdata('Status','Edit Success');
            redirect('ControllerMahasiswa/Controller_mahasiswa/get_mahasiswa');
        }
        else
        {
            $this->session->set_flashdata('Status','Edit Failed');
            redirect('ControllerMahasiswa/Controller_mahasiswa/get_mahasiswa');
        }
    }

    function editStatusmahasiswa()
    {
        $id_mahasiswa = $this->input->get('id_mahasiswa');
        $status = $this->input->get('Status');
        $mahasiswa = array(
                        'Status'=>$status
                        );
        $editmahasiswa = $this->Model_mahasiswa->update_mahaiswa($id_mahasiswa,$mahasiswa);
        if($editmahasiswa)
        {
            $this->session->set_flashdata('Status','Edit Success');
            redirect('ControllerMahasiswa/Controller_mahasiswa/get_mahasiswa');
        }
        else
        {
            $this->session->set_flashdata('Status','Edit Failed');
            redirect('ControllerMahasiswa/Controller_mahasiswa/get_mahasiswa');
        }
    }

    function deletemahasiswa()
    {
        $id_mahasiswa=$this->input->get('id_mahasiswa');
        $deletemahasiswa = $this->Model_mahasiswa->delete_mahasiswa($id_mahasiswa);
        if($deletemahasiswa)
        {
            $this->session->set_flashdata('Status','Delete Succes');
            redirect('ControllerMahasiswa/Controller_mahasiswa/get_mahasiswa');
        }
        else
        {
            $this->session->set_flashdata('Status','Delete Failed');
            redirect('ControllerMahasiswa/Controller_mahasiswa/get_mahasiswa');
        }
    }
}
?>