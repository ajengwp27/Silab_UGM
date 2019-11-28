<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{

    /**
     * Class constructor.
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_admin');
        $this->load->model('Model_mahasiswa');
        $this->load->model('Model_alat');
        $this->load->model('Model_peminjaman');
        $this->load->model('Model_kerusakan');
    }

    function index()
    {
        $data['jumlahmahasiswa']      = $this->Model_mahasiswa->get_mahasiswa();
        $data['jumlahmahasiswaaktif'] = $this->Model_mahasiswa->get_mahasiswa_by_status();
        $data['jumlahalat'] = $this->Model_alat->getDataAlat();
        $data['jumlahpeminjaman'] = $this->Model_peminjaman->getDataPeminjamanAll();
        $rusak = $this->Model_kerusakan->getDataKerusakan();
        $jmlrusak = 0;
        foreach($rusak as $r)
        {
            $jmlrusak = $jmlrusak + $r->Jumlah_kerusakan;
        }
        $data['jumlahkerusakan']=$jmlrusak;
        $this->template->load('Template/Template_admin', 'Form_admin/dashboard', $data);
    }
}
