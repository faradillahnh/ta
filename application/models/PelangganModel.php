<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PelangganModel extends CI_Model {

	public $image = "./upload/photopelanggan/default.jpg";

	public function getAllPelanggan()
	{
    $query = $this->db->get('tbl_pelanggan');
    return $query->result();
	}

	public function tambahPelanggan($data)
	{
		$this->db->insert('tbl_pelanggan',$data);
	}

	public function updatePelangganAdmin($id)
	{

		// belum diedit
		$post = $this->input->post();
    $this->product_id = $post["id"];
    $this->name = $post["name"];
    $this->price = $post["price"];
    $this->description = $post["description"];
    $this->db->update($this->_table, $this, array('product_id' => $post['id']));
	}

	public function detailPelangganAdmin($id)
	{
		return $this->db->get_where('tbl_pelanggan', ["id_pelanggan" => $id])->row();
	}

	public function deletePelangganAdmin($id)
	{
		return $this->db->delete('tbl_pelanggan', array("id_pelanggan" => $id));
	}

}
