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

    function cetakAlatPeminjamanbyDate()
    {
        $date1= $_POST['tanggal1'];
        $date2= $_POST['tanggal2'];
        $data['record']=  $this->Model_report->getDataPeminjamanBydate($date1,$date2);
        $config = array('format' => 'Folio','orientation' => 'L');
        $mpdf   = new \Mpdf\Mpdf($config);
        $html   = $this->load->view('Form_report/Form_report_peminjamandate',$data,true);
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

    function cetakReportKerusakan()
    {
        $data['record']=  $this->Model_report->getDataKerusakan();
        $config = array('format' => 'Folio');
        $mpdf   = new \Mpdf\Mpdf($config);
        $html   = $this->load->view('Form_report/Form_report_kerusakan',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

}
