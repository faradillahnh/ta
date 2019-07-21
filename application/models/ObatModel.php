<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ObatModel extends CI_Model {

  public function getAllObat()
  {
    $query = $this->db->get('tbl_obat');
    return $query->result();
  }
}
