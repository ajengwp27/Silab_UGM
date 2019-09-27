<?php

class Model_peminjaman extends CI_Model
{

    function insertDataPeminjaman($dataPeminjaman)
    {
        $datapeminjamantInsert = $this->db->insert('tb_detail_peminjaman', $dataPeminjaman);
        return $datapeminjamantInsert;
    }

    function insertPeminjaman($dataPinjam)
    {
        $datapeminjamantInsert = $this->db->insert("tb_peminjaman_alat", $dataPinjam);
        return $datapeminjamantInsert;
    }

    function updateDetailPeminjaan($datapinjam,$idmahasiswa)
    {
        $this->db->where('id_mahasiswa',$idmahasiswa);
        $this->db->where('Status', 0);
        $this->db->set($datapinjam);
        $dataupdate = $this->db->update('tb_detail_peminjaman');
        return $dataupdate;
    }
}
