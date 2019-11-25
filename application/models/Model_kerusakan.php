<?php

class Model_kerusakan extends CI_Model
{

    function getDataKerusakan()
    {
        //mendapatkan semua data alat dari tabel tb_alat
        $this->db->select('a.*, b.Name as NamaAlat');
        $this->db->from('tb_kerusakan as a');
        $this->db->join('tb_alat as b', 'b.id_alat = a.id_alat');
        $dataalat = $this->db->get()->result();
        return $dataalat;
    }

    function insertDataKerusakan($dataKerusakan)
    {
        $datakerusakaninsert = $this->db->insert('tb_kerusakan', $dataKerusakan);
        return $datakerusakaninsert;
    }


    function deleteDataAlat($id)
    {
        $this->db->where('id_alat', $id);
        $deletAlat = $this->db->delete("tb_alat");
        return $deletAlat;
    }
}
