<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriModel extends CI_Model {

	public function getAllObat()
	{
    $query = $this->db->get('tbl_kategori_obat');
    return $query->result();
	}

  public function getAllAlat()
  {
    $query = $this->db->get('tbl_kategori_alat');
    return $query->result();
  }

}
