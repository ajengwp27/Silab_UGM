<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Controller_report extends CI_Controller{

    /**
     * Class constructor.
     */
    function __construct() {
        parent::__construct();
        $this->load->model('Model_report');
    }

    function cetakAlatAll()
    {
        $data['record']=  $this->Model_report->getalatAll();
        $config = array('format' => 'Folio');
        $mpdf   = new \Mpdf\Mpdf($config);
        $html   = $this->load->view('Form_report/Form_report_alat',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function cetakBahanAll()
    {
        $data['record']=  $this->Model_report->getBahanAll();
        $config = array('format' => 'Folio');
        $mpdf   = new \Mpdf\Mpdf($config);
        $html   = $this->load->view('Form_report/Form_report_bahan',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    function cetakReportPeminjamanbyId()
    {
        $id = urldecode($_GET['url']);
        $data['data']=  $this->Model_report->getDataPeminjamanbyId($id);
        $config = array('format' => 'Folio');
        $mpdf   = new \Mpdf\Mpdf($config);
        $html   = $this->load->view('Form_report/Form_report_peminjaman',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

}
