<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ObatModel extends CI_Model {

  public function getAllObat()
  {
    $this->db->select('*');
    $this->db->from('tbl_obat');
    $this->db->join('tbl_kategori_obat', 'tbl_obat.id_kategori_obat = tbl_kategori_obat.id_kategori_obat');
    $query = $this->db->get();
    //$query = $this->db->get('tbl_obat');
    return $query->result();
  }

  public function tambahObat($data)
  {
    $this->db->insert('tbl_obat',$data);
  }

  public function deleteObat($id)
	{
		return $this->db->delete('tbl_obat', array("id_obat" => $id));
	}
}
