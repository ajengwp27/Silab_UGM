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
    }

    function index()
    {
        $data['alat']     = $this->Model_alat->getDataAlat();
        $this->load->view('Form_landingpage/landingpage', $data);
    }

    function search()
    {
        $key = $this->input->get('key');
        if (isset($key))
        {
            $data['alat'] = $this->Model_alat->getDataAlatByName($key);
            $data['key']  = $key;
            $this->load->view('Form_landingpage/pencarian_alat', $data);
        }
        else
        {
            $data['alat'] = $this->Model_alat->getDataAlat();
            $this->load->view('Form_landingpage/pencarian_alat',$data);
        }
    }

    function peminjaman($ID)
    {
        $data["alat"]= $this->Model_alat->getDataAlatById($ID);
        $this->load->view('Form_landingpage/peminjaman_alat',$data);
    }

    function pencarian()
    {
        $data['alat']     = $this->Model_alat->getDataAlat();
        $this->load->view('Form_landingpage/pencarian_alat',$data);
    }
    function dafarpeminjaman()
    {
        $data['jadwal'] = $this->Model_jadwal->get_jadwal();
        $this->load->view('Form_landingpage/daftar_peminjaman',$data);
    }

    function set_peminjaman()
    {
        $Id_alat = $this->input->post('idalat');
        $Qty     = $this->input->post('jml');
        $data    = $this->Model_alat->getDataAlatById($Id_alat);
        $analisis= implode("#",$this->input->post('analisis'));
        echo $analisis;
        $Name    = $data->Name;
        $iamge   = $data->image;
        $description = $data->description;
        
        if (isset($_SESSION['pinjaman'][$Id_alat]))
        {   
            $_SESSION['pinjaman'][$Id_alat]['Qty']=$_SESSION['cart'][$Id_alat]['Qty']+$Qty;
        }
        else
        {  
            if(isset($_SESSION['pinjaman']))
            {
            $datapinjaman = $this->session->userdata('pinjaman');
            $datapinjaman[$Id_alat] = array(
                                        'id_alat'     => $Id_alat,
                                        'Qty'         => $Qty,
                                        'Name'        => $Name,
                                        'image'       => $iamge,
                                        'analisis'    => $analisis,
                                        'description' => $description);
            $this->session->set_userdata('pinjaman',$datapinjaman);
            } 
            else
            {
            $datapinjaman[$Id_alat] = array(
                                        'id_alat'     => $Id_alat,
                                        'Qty'         => $Qty,
                                        'Name'        => $Name,
                                        'image'       => $iamge,
                                        'analisis'    => $analisis,
                                        'description' => $description);
            $this->session->set_userdata('pinjaman',$datapinjaman);
            }
        }
       redirect("Userlanding");
    }

    function addPeminjaantoDB()
    {
        $id_kegiatan = $this->input->post('idkegiatan');
        $idpinjam = $_SESSION['User']->Nim.get_current_date_img();
        foreach($_SESSION['pinjaman'] as $dataSession)
        {
            $dataPinjam = array(
                                'id_alat'      => $dataSession['id_alat'],
                                'Amount'      => $dataSession['Qty'],
                                'id_mahasiswa' => $_SESSION['User']->id_mahasiswa,
                                'analisis'  => $dataSession['analisis']
            );
            $datadetail = $this->Model_peminjaman->insertDataPeminjaman($dataPinjam);
        }
        if ($datadetail)
        {
            $data = array(
                        'id_peminjaman' => $idpinjam,
                        'id_kegiatan'   => $id_kegiatan
            );
            $dataPinjaman = $this->Model_peminjaman->insertPeminjaman($data);
            if ($dataPinjaman)
            {
                $dataFinal = array(
                                'id_peminjaman' => $idpinjam,
                                'Status' => 1
                );
                $dataFinalInsert =  $this->Model_peminjaman->updateDetailPeminjaan($dataFinal,$_SESSION['User']->id_mahasiswa);
                if ($dataFinalInsert)
                {
                    unset($_SESSION['pinjaman']);
                    redirect('Userlanding');
                }
            }
        }
    }
}