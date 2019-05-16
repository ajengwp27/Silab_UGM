<?php
 
 class Model_alat extends CI_Model
 {

     function getDataAlat()
     {
         //mendapatkan semua data alat dari tabel tb_alat
         $this->db->select('a.*, b.Name_Category as NamaKategori');
         $this->db->from('tb_alat as a');
         $this->db->join('tb_category as b','b.Category_id=a.Categori_id');
         $dataalat = $this->db->get()->result();
         return $dataalat;
     }

     function getDataAlatById($id)
     {
         //mendapatkan semua data alat dari tabel tb_alat
         $this->db->where('id_alat',$id);
         $dataalat = $this->db->get('tb_alat')->row();
         return $dataalat;
     }

     function insertDataAlat($dataAlat)
     {
         $dataAlatInsert = $this->db->insert('tb_alat',$dataAlat);
         return $dataAlatInsert;
     }

     function editDataAlat($id,$dataAlat)
     {
         $this->db->where('id_alat',$id);
         $dataAlatEdit = $this->db->update('tb_alat',$dataAlat);
         return $dataAlatEdit;
     }

     function deleteDataAlat($id)
     {
        $this->db->where('id_alat',$id);
        $deletAlat =$this->db->delte("tb_alat");
        return $deletAlat;
     }


 }

?>