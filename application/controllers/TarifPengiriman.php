<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TarifPengiriman extends CI_Controller {

	public function daftarTarifPengiriman()
	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/pages/daftar_tarif_pengiriman');
		$this->load->view('admin/templates/footer');
	}

  public function tambahTarifPengiriman()
  {
    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/menu');
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/pages/tambah_tarif_pengiriman');
    $this->load->view('admin/templates/footer');
  }

  public function prosesTambahTarifPengiriman()
  {
    // code...
  }

  public function editTarifPengiriman($id)
  {
    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/menu');
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/pages/edit_tarif_pengiriman');
    $this->load->view('admin/templates/footer');
  }

}
