<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Reg_user_mahasiswa extends CI_Controller
{
    /**
     * Class constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user_mahasiswa');
        $this->load->model('Model_mahasiswa');
    }

    function index()
    {
        $data['mahasiswa'] = $this->Model_mahasiswa->get_mahasiswa();
        $this->load->view('Form_landingpage/register_mahasiswa', $data);
    }

    function adduser_mahasiswa()
    {
        $id = $this->input->post('id');
        $validasi = $this->Model_mahasiswa->get_mahasiswa_by_NIM($id);
        if ($validasi) {
            $user_mahasiswa  = array(
                'id_mahasiswa' => $validasi->id_mahasiswa,
                'Password'     => $this->input->post('password')
            );
            $adduser_mahasiswa = $this->Model_user_mahasiswa->add_user_mahasiswa($user_mahasiswa);
            if ($adduser_mahasiswa) {
                $this->session->set_flashdata('Status', 'Input Succes');
                redirect('Controller_landingpage/landingpage');
            } else {
                $this->session->set_flashdata('Status', 'Input Failed');
                redirect('Controller_landingpage/landingpage');
            }
        } else {
            $this->session->set_flashdata('Status', 'Input Failed');
            redirect('Controller_landingpage/Reg_user_mahasiswa');
        }
    }

    function addmahasiswaFromRegistrasi()
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
            redirect('Controller_landingpage/Reg_user_mahasiswa');
        }
        elseif($validateemail)
        {
            $this->session->set_flashdata('Status', 'Input Failed : Email Sudah terdaftar');
            redirect('Controller_landingpage/Reg_user_mahasiswa');
        }
        else
        {
            $addmahasiswa = $this->Model_mahasiswa->add_mahasiswa($mahasiswa);
            $validasi = $this->Model_mahasiswa->get_mahasiswa_by_NIM($this->input->post('nim'));
            if($addmahasiswa)
            {

                $user_mahasiswa  = array(
                    'id_mahasiswa' => $validasi->id_mahasiswa,
                    'Password'     => $this->input->post('password')
                );
                $adduser_mahasiswa = $this->Model_user_mahasiswa->add_user_mahasiswa($user_mahasiswa);
                if ($adduser_mahasiswa) {
                    $this->session->set_flashdata('Status', 'Input Success');
                    redirect('Controller_landingpage/landingpage');
                } else {
                    $this->session->set_flashdata('Status', 'Input Failed');
                    redirect('Controller_landingpage/Reg_user_mahasiswa');
                }
            }
        }
    }
}
