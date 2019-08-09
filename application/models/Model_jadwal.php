<?php
class Model_jadwal extends CI_Model
{

    function get_jadwal()
    {

        $datajadwal = $this->db->get('tb_jadwal')->result();
        return $datajadwal;
    }

    function get_jadwal_by_id($id_jadwal)
    {
        $this->db->where("id_jadwal", $id_jadwal);
        $getjadwalById = $this->db->get('tb_jadwal')->row();
        return $getjadwalById;
    }

    function get_jadwal_by_status()
    {
        $this->db->where("Status", 'Aktif');
        $getjadwalByStatus = $this->db->get('tb_jadwal')->result();
        return $getjadwalByStatus;
    }

    function add_jadwal($datajadwal)
    {
        $addjadwal = $this->db->insert("tb_jadwal", $datajadwal);
        return $addjadwal;
    }

    function update_jadwal($id_jadwal, $datajadwal)
    {
        $this->db->where('id_jadwal', $id_jadwal);
        $updatejadwal = $this->db->update("tb_jadwal", $datajadwal);
        return $updatejadwal;
    }

    function delete_jadwal($idjadwal)
    {
        $this->db->where('id_jadwal', $idjadwal);
        $deletejadwal = $this->db->delete("tb_jadwal");
        return $deletejadwal;
    }
}
