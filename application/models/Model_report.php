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

    function getDataPeminjamanBydate($date1,$date2)
    {
        $this->db->select("a.*, b.nama_paket, c.Name");
        $this->db->from("tb_peminjaman_alat as a");
        $this->db->join('tb_mahasiswa as c', 'c.id_mahasiswa=a.id_mahasiswa');
        $this->db->join("tb_paket as b", "b.id_paket=a.id_paket");
        $this->db->where('date(a.tanggal_penggunaan) >=',$date1);
        $this->db->where('date(a.tanggal_penggunaan) <=',$date2);
        $dataRiwayatPeminjaman =  $this->db->get()->result();
        return $dataRiwayatPeminjaman;
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

    function getDataKerusakan()
    {
        $this->db->select("a.*, b.Name");
        $this->db->from("tb_kerusakan as a");
        $this->db->join('tb_alat as b', 'b.id_alat=a.id_alat');
        return $this->db->get()->result();
    }

}
