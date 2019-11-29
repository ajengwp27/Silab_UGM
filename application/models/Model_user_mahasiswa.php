<?php
class Model_user_mahasiswa extends CI_Model
{

    function get_user_mahasiswa()
    {
        $this->db->select('a.*, b.Nim , b.Name');
        $this->db->from('tb_user_mahasiswa as a');
        $this->db->join('tb_mahasiswa as b', 'b.id_mahasiswa=a.id_mahasiswa');
        $this->db->where('a.deleted',0);
        $datauser_mahasiswa = $this->db->get()->result();
        return $datauser_mahasiswa;
    }

    function get_user_mahasiswa_by_id($id_user_mahasiswa)
    {
        $this->db->where("id_user_mahasiswa", $id_user_mahasiswa);
        $this->db->where('deleted',0);
        $getuser_mahasiswaById = $this->db->get('tb_user_mahasiswa')->row();
        return $getuser_mahasiswaById;
    }

    function get_user_mahasiswa_by_id_and_password($id_mahasiswa, $password)
    {
        $this->db->where("id_mahasiswa", $id_mahasiswa);
        $this->db->where("Password like BINARY", $password);
        $this->db->where('deleted',0);
        $getuser_mahasiswaByIdNIM = $this->db->get('tb_user_mahasiswa', true)->row();
        // echo  $this->db->last_query();
        return $getuser_mahasiswaByIdNIM;
    }

    function editUserMahasiswa($id,$data)
    {
        $this->db->where('id_mahasiswa', $id);
        return $this->db->update('tb_user_mahasiswa',$data);
    }

    function add_user_mahasiswa($datamahasiswa)
    {
        $addmahasiswa = $this->db->insert("tb_user_mahasiswa", $datamahasiswa);
        return $addmahasiswa;
    }

    function delete_user_mahasiswa($id_user_mahasiswa)
    {
        $this->db->where('id_user_mahasiswa', $id_user_mahasiswa);
        $deleteusermahasiswa = $this->db->delete("tb_user_mahasiswa");
        return $deleteusermahasiswa;
    }
}
