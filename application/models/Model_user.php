<?php
class Model_user extends CI_Model{

    function get_user()
    {
        $this->db->select('a.*,b.Description as Hak_akses,c.Name as Karyawan');
        $this->db->from('tb_user as a');
        $this->db->join('tb_hak_akses as b', 'b.id_level = a.id_level');
        $this->db->join('tb_karyawan as c', 'c.id_karyawan = a.id_karyawan');
        $datauser = $this->db->get()->result();
        return $datauser;
    }

    function get_user_by_status()
    {
        $this->db->where("Status",'Approve');
        $getuserByStatus = $this->db->get('tb_user')->result();
        return $getuserByStatus;
    }
      
    function get_user_by_id($id_user)
    {   
        $this->db->where("id_user",$id_user);
        $getuserById = $this->db->get('tb_user')->row();
        return $getuserById;
    }

    function add_user($datauser)
    {
        $adduser=$this->db->insert("tb_user",$datauser);
        return $adduser;
    }

    function update_user($id_user,$datauser)
    {
        $this->db->where('id_user',$id_user);
        $updateuser = $this->db->update("tb_user",$datauser);
        return $updateuser;
    }

    function delete_user($id_user)
    {
        $this->db->where('id_user',$id_user);
        $deleteuser = $this->db->delete("tb_user");
        return $deleteuser;
    }
}
?>