<?php
class Model_user_mahasiswa extends CI_Model{

    function get_user_mahasiswa()
    {
        $datauser_group = $this->db->get('tb_user_mahasiswa')->result();
        return $datauser_group;
    }
      
    function get_user_mahasiswa_by_id($id_user_mahasiswa)
    {   
        $this->db->where("id_user_mahasiswa",$id_user_mahasiswa);
        $getuser_mahasiswaById = $this->db->get('tb_user_mahasiswa')->row();
        return $getuser_mahasiswaById;
    }
}
?>