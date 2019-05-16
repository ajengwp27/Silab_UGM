<?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Dashboard extends CI_Controller{

     /**
     * Class constructor.
     */
    function __construct() {
        parent::__construct();
        $this->load->model('Model_admin');
        $this->load->model('Model_mahasiswa');
        
    }
    
    function index()
    {
        $data['jumlahmahasiswa'] =$this->Model_mahasiswa->get_mahasiswa();
        $data['jumlahmahasiswaaktif'] =$this->Model_mahasiswa->get_mahasiswa_by_status();
        $this->template->load('Template/Template_admin','F_admin/dashboard',$data);
    }
 }
?>