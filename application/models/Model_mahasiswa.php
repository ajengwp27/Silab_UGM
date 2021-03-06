<?php
class Model_mahasiswa extends CI_Model
{

    function get_mahasiswa()
    {

        $this->db->where('deleted',0);
        $datamahasiswa = $this->db->get('tb_mahasiswa')->result();
        return $datamahasiswa;
    }

    function get_mahasiswa_by_id($id_mahasiswa)
    {
        $this->db->where("Id_mahasiswa", $id_mahasiswa);
        $this->db->where('deleted',0);
        $getmahasiswaById = $this->db->get('tb_mahasiswa')->row();
        return $getmahasiswaById;
    }

    function get_mahasiswa_by_NIM($id_mahasiswa)
    {
        $this->db->where("Nim", $id_mahasiswa);
        $this->db->where('deleted',0);
        $getmahasiswaById = $this->db->get('tb_mahasiswa')->row();
        // echo json_encode($getmahasiswaById);

        return $getmahasiswaById;
    }

    function get_mahasiswa_by_Email($email)
    {
        $this->db->where("Email_mahasiswa", $email);
        $this->db->where('deleted',0);
        $getmahasiswaById = $this->db->get('tb_mahasiswa')->row();
        // echo json_encode($getmahasiswaById);

        return $getmahasiswaById;
    }

    function get_mahasiswa_by_status()
    {
        $this->db->where("Status", 'Aktif');
        $this->db->where('deleted',0);
        $getmahasiswaByStatus = $this->db->get('tb_mahasiswa')->result();
        return $getmahasiswaByStatus;
    }

    function add_mahasiswa($datamahasiswa)
    {
        $addmahasiswa = $this->db->insert("tb_mahasiswa", $datamahasiswa);
        return $addmahasiswa;
    }

    function update_mahasiswa($id_mahasiswa, $datamahasiswa)
    {
        $this->db->where('id_mahasiswa', $id_mahasiswa);
        $updatemahasiswa = $this->db->update("tb_mahasiswa", $datamahasiswa);
        return $updatemahasiswa;
    }

    function delete_mahasiswa($idmahasiswa)
    {
        $this->db->where('id_mahasiswa', $idmahasiswa);
        $deletemahasiswa = $this->db->delete("tb_mahasiswa");
        return $deletemahasiswa;
    }
}
