<?php

class Model_peminjaman extends CI_Model
{

    function getDataPeminjaman($idmahasiswa)
    {
        $this->db->where('id_mahasiswa',$idmahasiswa);
        $datapeminjamant = $this->db->get('tb_detail_peminjaman')->result();
        return $datapeminjamant;
    }

    function getDataPeminjamanAll()
    {
        $this->db->select("a.*, b.nama_paket");
        $this->db->from("tb_peminjaman_alat as a");
        $this->db->join("tb_paket as b", "b.id_paket=a.id_paket");
        $dataRiwayatPeminjaman =  $this->db->get()->result();
        return $dataRiwayatPeminjaman;
    }

    function getDetailPeminjaman($id_peminjaman)
    {
        $this->db->select('a.*, b.Name');
        $this->db->from('tb_detail_peminjaman as a');
        $this->db->join('tb_alat as b','b.id_alat=a.id_alat');
        $this->db->where('id_peminjaman', $id_peminjaman);
        $dataRiwayatPeminjaman =  $this->db->get()->result();
        return $dataRiwayatPeminjaman;
    }

    function get_detail_peminjaman($id_peminjaman)
    {
        $this->db->where('id_peminjaman', $id_peminjaman);
        $datapeminjaman = $this->db->get('tb_peminjaman_alat')->row();
        return $datapeminjaman;
    }

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

    function updateStatusPeminjaman($id_peminjaman,$datadetail)
    {
        $this->db->where('id_peminjaman',$id_peminjaman);
        $this->db->set($datadetail);
        $dataupdate = $this->db->update('tb_peminjaman_alat');
        return $dataupdate;

    }

    function updateDetailPeminjaan($datapinjam,$idmahasiswa)
    {
        $this->db->where('id_mahasiswa',$idmahasiswa);
        $this->db->where('Status', 0);
        $this->db->set($datapinjam);
        $dataupdate = $this->db->update('tb_detail_peminjaman');
        return $dataupdate;
    }

    function getRiwayatPeminjaman($idmahasiswa)
    {
        $this->db->select("a.*, b.nama_paket, c.Name, c.Nim");
        $this->db->from("tb_peminjaman_alat as a");
        $this->db->join("tb_mahasiswa as c", "c.id_mahasiswa=a.id_mahasiswa");
        $this->db->join("tb_paket as b", "b.id_paket=a.id_paket");
        $this->db->where('a.id_mahasiswa', $idmahasiswa);
        $dataRiwayatPeminjaman =  $this->db->get()->result();
        return $dataRiwayatPeminjaman;
    }

    function getPeminjamanbyId($id_mahasiswa)
    {
        $this->db->where("status", 1);
        $this->db->where("id_mahasiswa", $id_mahasiswa);
       return $this->db->get('tb_peminjaman_alat')->result();
    }

}
    