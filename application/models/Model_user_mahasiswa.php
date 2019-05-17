<?php
class Model_user_mahasiswa extends CI_Model{

    function get_user_mahasiswa()
    {
        $this->db->select('a.*, b.Nim , b.Name');   
        $this->db->from('tb_user_mahasiswa as a');
        $this->db->join('tb_mahasiswa as b' , 'b.Id=a.id_mahasiswa');    
        $datauser_mahasiswa = $this->db->get()->result();
        return $datauser_mahasiswa;
    }
      
    function get_user_mahasiswa_by_id($iduser_mahasiswa)
    {   
        $this->db->where("id_user_mahasiswa",$iduser_mahasiswa);
        $getuser_mahasiswaById = $this->db->get('tb_user_mahasiswa')->row();
        return $getuser_mahasiswaById;
    }

    function add_user_mahasiswa($datauser_mahasiswa)
    {
        $adduser_mahasiswa=$this->db->insert("tb_user_mahasiswa",$datauser_mahasiswa);
        return $adduser_mahasiswa;
    }

    function update_user_mahasiswa($iduser_mahasiswa,$datauser_mahasiswa)
    {
        $this->db->where('id_user_mahasiswa',$iduser_mahasiswa);
        $updateuser_mahasiswa=$this->db->update("tb_user_mahasiswa",$datauser_mahasiswa);
        return $updateuser_mahasiswa;
    }

    function delete_user_mahasiswa($iduser_mahasiswa)
    {
        $this->db->where('id_user_mahasiswa',$iduser_mahasiswa);
        $deleteuser_mahasiswa=$this->db->delete("tb_user_mahasiswa");
        return $deleteuser_mahasiswa;
    }
}
?>