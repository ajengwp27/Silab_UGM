<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_user extends CI_Controller{

    /**
     * Class constructor.
     */
    function __construct() {
        parent::__construct();
        $this->load->model('Model_user_mahasiswa');
        $this->load->model('Model_mahasiswa');
        $this->load->model('Model_alat');
        
    }

    function index()
    {
        if(isset($_SESSION['User']))
		{
			//redirect('ControllerAdmin/Dashboard');
		}
		else
		{
        $this->load->view('Form_landingpage/landingpage');
        }
    
    }
    function Viewlogin()
    {
        $this->load->view('Form_landingpage/login_mahasiswa');
    }
    function login()
    {
    
        $NIM = $_POST['NIM'];
        $password = $_POST['password'];
        $getuserdata = $this->Model_mahasiswa->get_mahasiswa_by_NIM($NIM);
        if($getuserdata)
        {
            $getUser = $this->Model_user_mahasiswa->get_user_mahasiswa_by_id_and_password($getuserdata->id_mahasiswa,$password);
            if($getUser && $getuserdata->Status== "Aktif")
            {   
                $this->session->set_userdata('User',$getuserdata);
                $data['alat']     = $this->Model_alat->getDataAlat();
                $this->load->view('Form_landingpage/landingpage',$data);
            }
            else 
            {
                $this->session->set_flashdata('Error','Password Incorect');
                redirect('LoginMahasiswa');
            }
            
        }
        else {
            $this->session->set_flashdata('Error','NIM Incorect');
            redirect('LoginMahasiswa');
        }
    }

    function logout()
    {
        session_destroy();
        redirect('Userlanding');
    }
}
?>