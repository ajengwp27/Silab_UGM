<?php

class Model_paket extends CI_Model
{

    function getDatapaket()
    {
        //mendapatkan semua data paket dari tabel tb_paket
        $datapaket = $this->db->get('tb_paket')->result();
        return $datapaket;
    }

    function getDataDetailpaket($id)
    {
        //mendapatkan semua data paket dari tabel tb_paket
        $this->db->select('a.*, b.Name');
        $this->db->from('tb_detail_paket as a');
        $this->db->join('tb_alat as b','b.id_alat=a.id_alat');
        $this->db->where("a.id_paket",$id);
        $datapaket = $this->db->get()->result();
        return $datapaket;
    }

    function getDatapaketById($id)
    {
        //mendapatkan semua data paket dari tabel tb_paket
        $this->db->where('id_paket', $id);
        $datapaket = $this->db->get('tb_paket')->row();
        return $datapaket;
    }

    function getDatapaketByName($key)
    {
        $this->db->like('nama', $key);
        $datapaket = $this->db->get('tb_paket')->result();
        return $datapaket;
    }

    function insertDatapaket($datapaket)
    {
        $datapaketInsert = $this->db->insert('tb_paket', $datapaket);
        return $datapaketInsert;
    }

    function insertDetailpaket($datapaket)
    {
        $datapaketInsert = $this->db->insert('tb_detail_paket', $datapaket);
        return $datapaketInsert;
    }

    function editDatapaket($id, $datapaket)
    {
        $this->db->where('id_paket', $id);
        $datapaketEdit = $this->db->update('tb_paket', $datapaket);
        return $datapaketEdit;
    }

    function deleteDatapaket($id)
    {
        $this->db->where('id_paket', $id);
        $deletpaket = $this->db->delete("tb_paket");
        return $deletpaket;
    }

    function deleteDetailpaket($id)
    {
        $this->db->where('id_detail_paket', $id);
        $deletpaket = $this->db->delete("tb_detail_paket");
        return $deletpaket;
    }
}
