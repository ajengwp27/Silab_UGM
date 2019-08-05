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
                //$this->load->view('Template/Template_admin');
                $this->session->set_userdata('User',$getuserdata);
                $this->load->view('Form_landingpage/landingpage');
                //$this->template->load('Template/Template_admin','Form_admin/dashboard',$data);
            }
            else
            {
                $this->session->set_flashdata('Error','Username and Password Incorect'); 
                $this->load->view('Form_landingpage/landingpage');
            }
        }
    }

    function logout()
    {
        session_destroy();
        redirect('Welcome');
    }
}
?>