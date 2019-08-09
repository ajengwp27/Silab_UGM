<?php
class Model_karyawan extends CI_Model
{

    function get_karyawan()
    {
        $dataKaryawan = $this->db->get('tb_karyawan')->result();
        return $dataKaryawan;
    }

    function get_karyawan_by_status()
    {
        $this->db->where("Status", 'Aktif');
        $getKaryawanByStatus = $this->db->get('tb_karyawan')->result();
        return $getKaryawanByStatus;
    }

    function get_karyawan_by_id($id_karyawan)
    {
        $this->db->where("id_karyawan", $id_karyawan);
        $getKaryawanById = $this->db->get('tb_karyawan')->row();
        return $getKaryawanById;
    }

    function get_karyawan_by_email($email)
    {
        $this->db->where("email_karyawan", $email);
        $getKaryawanByEmail = $this->db->get('tb_karyawan')->row();
        return $getKaryawanByEmail;
    }

    function add_karyawan($dataKaryawan)
    {
        $addkaryawan = $this->db->insert("tb_karyawan", $dataKaryawan);
        return $addkaryawan;
    }

    function update_karyawan($id_karyawan, $dataKaryawan)
    {
        $this->db->where('id_karyawan', $id_karyawan);
        $updatekaryawan = $this->db->update("tb_karyawan", $dataKaryawan);
        return $updatekaryawan;
    }

    function delete_karyawan($id_karyawan)
    {
        $this->db->where('id_karyawan', $id_karyawan);
        $deletekaryawan = $this->db->delete("tb_karyawan");
        return $deletekaryawan;
    }
}
