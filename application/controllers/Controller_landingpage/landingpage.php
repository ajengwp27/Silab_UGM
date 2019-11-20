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
        $this->load->model('Model_jadwal');
        $this->load->model('Model_peminjaman');
        $this->load->model('Model_paket');
        $this->load->model('Model_bahan');
    }

    function index()
    {
        $data['alat']    = $this->Model_alat->getDataAlat();
        $this->load->view('Form_landingpage/landingpage', $data);
    }

    function search()
    {
        $key = $this->input->get('key');
        if (isset($key)) {
            $data['alat'] = $this->Model_alat->getDataAlatByName($key);
            $data['key']  = $key;
            $this->load->view('Form_landingpage/pencarian_alat', $data);
        } else {
            $data['alat'] = $this->Model_alat->getDataAlat();
            $this->load->view('Form_landingpage/pencarian_alat', $data);
        }
    }

    function peminjaman()
    {
        $jumlah = $this->Model_paket->getDatajumlahDetailpaket();
        foreach ($jumlah as $d) {
            $detail[$d->nama_paket . '#' . $d->id_paket] = array('detail' => $this->Model_paket->getDataDetailpaket($d->id_paket));
        }
        $data['details'] = $detail;
        $data['bahan'] = $this->Model_bahan->getDatabahan();
        $this->load->view('Form_landingpage/peminjaman_alat', $data);
    }



    function getdatariwayat($id)
    {
        $data['riwayat'] = $this->Model_peminjaman->getRiwayatPeminjaman($id);
        $this->load->view('Form_landingpage/riwayat_peminjaman', $data);
    }

    function pencarian()
    {
        $data['alat']     = $this->Model_alat->getDataAlat();
        $this->load->view('Form_landingpage/pencarian_alat', $data);
    }
    function dafarpeminjaman()
    {
        $data['jadwal'] = $this->Model_jadwal->get_jadwal();
        $this->load->view('Form_landingpage/daftar_peminjaman', $data);
    }

    function get_paketall()
    {
        $data = $this->Model_paket->getDatajumlahDetailpaket();
        foreach ($data as $d) {
            $detail[$d->nama_paket . '#' . $d->id_paket] = array('detail' => $this->Model_paket->getDataDetailpaket($d->id_paket));
        }
        // foreach($detail as $k=>$key)
        // {
        //     echo $k.'='.json_encode($key['detail']).'<br>';
        // }
    }

    // function set_peminjaman()
    // {
    //     $Id_alat = $this->input->post('idalat');
    //     $Qty     = $this->input->post('jml');
    //     $data    = $this->Model_alat->getDataAlatById($Id_alat);
    //     $analisis = implode("#", $this->input->post('analisis'));
    //     echo $analisis;
    //     $Name    = $data->Name;
    //     $iamge   = $data->image;
    //     $description = $data->description;

    //     if (isset($_SESSION['pinjaman'][$Id_alat])) {
    //         $_SESSION['pinjaman'][$Id_alat]['Qty'] = $_SESSION['cart'][$Id_alat]['Qty'] + $Qty;
    //     } else {
    //         if (isset($_SESSION['pinjaman'])) {
    //             $datapinjaman = $this->session->userdata('pinjaman');
    //             $datapinjaman[$Id_alat] = array(
    //                 'id_alat'     => $Id_alat,
    //                 'Qty'         => $Qty,
    //                 'Name'        => $Name,
    //                 'image'       => $iamge,
    //                 'analisis'    => $analisis,
    //                 'description' => $description
    //             );
    //             $this->session->set_userdata('pinjaman', $datapinjaman);
    //         } else {
    //             $datapinjaman[$Id_alat] = array(
    //                 'id_alat'     => $Id_alat,
    //                 'Qty'         => $Qty,
    //                 'Name'        => $Name,
    //                 'image'       => $iamge,
    //                 'analisis'    => $analisis,
    //                 'description' => $description
    //             );
    //             $this->session->set_userdata('pinjaman', $datapinjaman);
    //         }
    //     }
    //     redirect("Userlanding");
    // }

    function addPeminjaantoDB()
    {
        $paket       = $this->input->post('paket');
        $bahan       = $this->input->post('bahan');
        $idpinjam    = $_SESSION['User']->Nim . get_current_date_img();
        $idMahasiswa = $_SESSION['User']->id_mahasiswa;
        $analisis    = implode("#",$this->input->post('analisis'));
        

        $dataPinjam = array(
                        'id_peminjaman' => $idpinjam,
                        'id_paket'      => $paket,
                        'analisa'       => $analisis,
                        'id_mahasiswa'  => $idMahasiswa,
        );
        $peminjaman = $this->Model_peminjaman->insertPeminjaman($dataPinjam);
        if ($peminjaman) {
            $dataalat = $this->Model_paket->getDataDetailpaket($paket);
            foreach($dataalat as $a) 
            {
                $StokAlat =array('stok' => $a->stok -  $a->jumlah);
                $this->Model_alat->editDataAlat($a->id_alat,$StokAlat);
            }
            $this->session->set_flashdata('Status', 'Edit Succes');
            redirect('Userlanding');
        } else {
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('Userlanding');
        }

    }
}
