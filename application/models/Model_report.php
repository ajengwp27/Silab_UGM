<?php

class Model_report extends CI_Model
{

    function getalatAll()
    {
        $this->db->select('a.*, b.Name_Category as NamaKategori');
        $this->db->from('tb_alat as a');
        $this->db->join('tb_category as b', 'b.Category_id = a.Category_id');
        $dataalat = $this->db->get()->result();
        return $dataalat;
    }

    function getBahanAll()
    {
        $datasbahan = $this->db->get('tb_bahan')->result();
        return $datasbahan;
    }

    function getDataPeminjamanbyId($id)
    {
        $this->db->select("a.*, b.nama_paket, c.Name, c.Nim");
        $this->db->from("tb_peminjaman_alat as a");
        $this->db->join('tb_mahasiswa as c', 'c.id_mahasiswa=a.id_mahasiswa');
        $this->db->join("tb_paket as b", "b.id_paket=a.id_paket");
        $this->db->where('a.id_peminjaman', $id);
        $dataRiwayatPeminjaman =  $this->db->get()->row();
        return $dataRiwayatPeminjaman;
    }

}
