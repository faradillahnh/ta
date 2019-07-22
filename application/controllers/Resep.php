<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Controller {

	public function daftarResep()
	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/pages/daftar_resep');
		$this->load->view('admin/templates/footer');
	}

  public function tambahResep()
  {
    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/menu');
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/pages/tambah_resep');
    $this->load->view('admin/templates/footer');
  }

  public function prosesTambahResep()
  {
    // code...
  }

  public function editResep($id)
  {
    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/menu');
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/pages/edit_resep');
    $this->load->view('admin/templates/footer');
  }

}
