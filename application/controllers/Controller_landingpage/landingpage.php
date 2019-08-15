<?php
defined('BASEPATH') or exit('No direct script access allowed');
class landingpage extends CI_Controller
{

    /**
     * Class constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user_mahasiswa');
        $this->load->model('Model_alat');
    }

    function index()
    {
        $data['alat']     = $this->Model_alat->getDataAlat();
        $this->load->view('Form_landingpage/landingpage', $data);
    }

    function peminjaman()
    {
        $this->load->view('Form_landingpage/peminjaman_alat');
    }
}
