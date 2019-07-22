<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BlogModel extends CI_Model {

	public function getAllBlog()
	{
    $query = $this->db->get('tbl_blog_konten');
    return $query->result();
	}

  public function tambahBlog($data)
  {
    $this->db->insert('tbl_blog_konten',$data);
  }

}
