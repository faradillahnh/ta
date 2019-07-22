<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CabangModel extends CI_Model {

	public function getAllCabang()
	{
    $query = $this->db->get('tbl_cabang');
    return $query->result();
	}

  public function tambahCabang($data)
  {
    $this->db->insert('tbl_cabang',$data);

  }

  public function deleteCabang($id)
  {
    return $this->db->delete('tbl_cabang', array("id_cabang" => $id));
  }
}
