<?php
class Model_mahasiswa extends CI_Model{

    function get_mahasiswa()
    {
       
        $datamahasiswa = $this->db->get('tb_mahasiswa')->result();
        return $datamahasiswa;
    }

    function get_mahasiswa_by_id($id_mahasiswa)
    {
        $this->db->where("Id_mahasiswa",$id_mahasiswa);
        $getmahasiswaById = $this->db->get('tb_mahasiswa')->row();
        return $getmahasiswaById;
    }

    function get_mahasiswa_by_NIM($id_mahasiswa)
    {
        $this->db->where("Nim",$id_mahasiswa);
        $getmahasiswaById = $this->db->get('tb_mahasiswa')->row();
        return $getmahasiswaById;
    }

    function get_mahasiswa_by_status()
    {   
        $this->db->where("Status",'Aktif');
        $getmahasiswaByStatus = $this->db->get('tb_mahasiswa')->result();
        return $getmahasiswaByStatus;
    }

    function add_mahasiswa($datamahasiswa)
    {
        $addmahasiswa=$this->db->insert("tb_mahasiswa",$datamahasiswa);
        return $addmahasiswa;
    }

    function update_mahasiswa($id_mahasiswa,$datamahasiswa)
    {
        $this->db->where('id_mahasiswa',$id_mahasiswa);
        $updatemahasiswa=$this->db->update("tb_mahasiswa",$datamahasiswa);
        return $updatemahasiswa;
    }

    function delete_mahasiswa($idmahasiswa)
    {
        $this->db->where('id_mahasiswa',$idmahasiswa);
        $deletemahasiswa=$this->db->delete("tb_mahasiswa");
        return $deletemahasiswa;
    }
}
?>