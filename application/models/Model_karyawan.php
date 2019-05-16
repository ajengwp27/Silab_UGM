<?php
class Model_karyawan extends CI_Model{

    function get_karyawan()
    {
        $dataKaryawan = $this->db->get('tb_karyawan')->result();
        return $dataKaryawan;
    }
    function get_karyawan_by_status()
    {
        $this->db->where('Status','Aktif');
        $dataKaryawan = $this->db->get('tb_karyawan')->result();
        return $dataKaryawan;
    }
      
    function get_karyawan_by_id($id_karyawan)
    {   
        $this->db->where("id_karyawan",$id_karyawan);
        $getKaryawanById = $this->db->get('tb_karyawan')->row();
        return $getKaryawanById;
    }

    function add_karyawan($dataKaryawan)
    {
        $addKaryawan=$this->db->insert("tb_karyawan",$dataKaryawan);
        return $addKaryawan;
    }

    function update_karyawan($id_karyawan,$datakaryawan)
    {
        $this->db->where('id_karyawan',$id_karyawan);
        $updatekaryawan=$this->db->update("tb_karyawan",$datakaryawan);
        return $updatekaryawan;
    }

    function delete_karyawan($id_karyawan)
    {
        $this->db->where('id_karyawan',$id_karyawan);
        $deletekaryawan=$this->db->delete("tb_karyawan");
        return $deletekaryawan;
    }
}
?>