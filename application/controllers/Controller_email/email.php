<?php
class Email extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->Model('Model_mahasiswa');
        $this->load->Model('Model_user_mahasiswa');
    }

    function sendMailUser($id)
    {
        $dataMahasiswa = $this->Model_mahasiswa->get_mahasiswa_by_id($id);
        $email = $dataMahasiswa->Email_mahasiswa;
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'sistemlaboratoriumugm@gmail.com',
            'smtp_pass' => 'silabugm',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
    
        $this->email->from('sistemlaboraturiumugm@gmail.com', 'Admin SILAB');
        $this->email->to($email);
        $this->email->subject('Aktivasi Akun Laboraturium Nutrisi UGM');
        $this->email->message("Akun Sistem Laboraturium sudah aktif dan bisa digunakan untuk login . <br> Silahkan Login di ".base_url('LoginMahasiswa')." <br> Regard, <br> Admin SILAB");
        if (!$this->email->send()) {
            // Raise error message
            show_error($this->email->print_debugger());
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('mahasiswa');
        } else {
            // Show success notification or other things here
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('mahasiswa');

        }
    }

    function sendMailUserPassword()
    {
        $NIM = $this->input->post('NIM');
        $passwordbaru = mt_rand(100000, 999999);
        $dataMahasiswa = $this->Model_mahasiswa->get_mahasiswa_by_NIM($NIM);
        $email = $dataMahasiswa->Email_mahasiswa;
        $data = array('password'=>$passwordbaru);
        if($dataMahasiswa)
        {
            $this->Model_user_mahasiswa->editUserMahasiswa($dataMahasiswa->id_mahasiswa,$data);
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'sistemlaboratoriumugm@gmail.com',
                'smtp_pass' => 'silabugm',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
        
            $this->email->from('sistemlaboraturiumugm@gmail.com', 'Admin SILAB');
            $this->email->to($email);
            $this->email->subject('Reset Password Laboraturium Nutrisi UGM');
            $this->email->message("Password baru Anda : ".$passwordbaru." <br>Gunakan untuk login dan segera ganti password anda melalui menu ganti password . <br> Silahkan Login di ".base_url('LoginMahasiswa')." <br> Regard, <br> Admin SILAB");
            if (!$this->email->send()) {
                // Raise error message
                show_error($this->email->print_debugger());
                $this->session->set_flashdata('Status', 'Reset Failed');
                redirect('Userlanding');
            } else {
                // Show success notification or other things here
                $this->session->set_flashdata('Status', 'Reset Success, Cek Email');
                redirect('Userlanding');
    
            }
        } 
    }


    function sendMailUserNon($id)
    {
        $dataMahasiswa = $this->Model_mahasiswa->get_mahasiswa_by_id($id);
        $email = $dataMahasiswa->Email_mahasiswa;
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'sistemlaboratoriumugm@gmail.com',
            'smtp_pass' => 'silabugm',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
    
        $this->email->from('sistemlaboraturiumugm@gmail.com', 'Admin SILAB');
        $this->email->to($email);
      
        $this->email->subject('Akun Laboraturium Nutrisi UGM');
        $this->email->message("Akun Sistem Laboraturium Tidak Aktif . <br> Untuk informasi lebih lanjut hubungi Admin LAB <br> Regard, <br> Admin SILAB");
        if (!$this->email->send()) {
            // Raise error message
            show_error($this->email->print_debugger());
            $this->session->set_flashdata('Status', 'Edit Failed');
            redirect('mahasiswa');
        } else {
            // Show success notification or other things here
            $this->session->set_flashdata('Status', 'Edit Success');
            redirect('mahasiswa');

        }
    }
}
?>
    