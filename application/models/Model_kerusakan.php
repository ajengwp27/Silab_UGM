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

    function getDataKerusakanbyId($id)
    {
        //mendapatkan semua data alat dari tabel tb_alat
        $this->db->select('a.*, b.Name as NamaAlat');
        $this->db->from('tb_kerusakan as a');
        $this->db->join('tb_alat as b', 'b.id_alat = a.id_alat');
        $this->db->where('a.id_kerusakan',$id);
        $dataalat = $this->db->get()->row();
        return $dataalat;
    }

    function insertDataKerusakan($dataKerusakan)
    {
        $datakerusakaninsert = $this->db->insert('tb_kerusakan', $dataKerusakan);
        return $datakerusakaninsert;
    }

    function editStatusKerusakan($idkerusakan,$dataKerusakan)
    {
        $this->db->where('id_kerusakan', $idkerusakan);
        $datakerusakan = $this->db->update('tb_kerusakan', $dataKerusakan);
        return $datakerusakan;

    }
}
