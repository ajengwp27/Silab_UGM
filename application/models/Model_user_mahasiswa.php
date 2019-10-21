<?php
class Model_user_mahasiswa extends CI_Model
{

    function get_user_mahasiswa()
    {
        $this->db->select('a.*, b.Nim , b.Name');
        $this->db->from('tb_user_mahasiswa as a');
        $this->db->join('tb_mahasiswa as b', 'b.id_mahasiswa=a.id_mahasiswa');
        $datauser_mahasiswa = $this->db->get()->result();
        return $datauser_mahasiswa;
    }

    function get_user_mahasiswa_by_id($id_user_mahasiswa)
    {
        $this->db->where("id_user_mahasiswa", $id_user_mahasiswa);
        $getuser_mahasiswaById = $this->db->get('tb_user_mahasiswa')->row();
        return $getuser_mahasiswaById;
    }

    function get_user_mahasiswa_by_id_and_password($id_mahasiswa, $password)
    {
        $this->db->where("id_mahasiswa", $id_mahasiswa);
        $this->db->where("Password like BINARY", $password);
        $getuser_mahasiswaByIdNIM = $this->db->get('tb_user_mahasiswa', true)->row();
        // echo  $this->db->last_query();
        return $getuser_mahasiswaByIdNIM;
    }

    function add_user_mahasiswa($datamahasiswa)
    {
        $addmahasiswa = $this->db->insert("tb_user_mahasiswa", $datamahasiswa);
        return $addmahasiswa;
    }
}
