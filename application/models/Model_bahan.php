<?php

class Model_bahan extends CI_Model
{

    function getDatabahan()
    {
        //mendapatkan semua data bahan dari tabel tb_bahan
        $this->db->where('deleted',0);
        $databahan = $this->db->get('tb_bahan')->result();
        return $databahan;
    }

    function getDatabahanById($id)
    {
        //mendapatkan semua data bahan dari tabel tb_bahan
        $this->db->where('id_bahan', $id);
        $this->db->where('deleted',0);
        $databahan = $this->db->get('tb_bahan')->row();
        return $databahan;
    }

    function getDatabahanByName($key)
    {
        $this->db->like('Name', $key);
        $this->db->where('deleted',0);
        $databahan = $this->db->get('tb_bahan')->result();
        return $databahan;
    }

    function insertDatabahan($databahan)
    {
        $databahanInsert = $this->db->insert('tb_bahan', $databahan);
        return $databahanInsert;
    }



    function editDatabahan($id, $databahan)
    {
        $this->db->where('id_bahan', $id);
        $databahanEdit = $this->db->update('tb_bahan', $databahan);
        return $databahanEdit;
    }

    function deleteDatabahan($id)
    {
        $this->db->where('id_bahan', $id);
        $deletbahan = $this->db->delete("tb_bahan");
        return $deletbahan;
    }
}
