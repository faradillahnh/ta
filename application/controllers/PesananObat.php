<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PesananObat extends CI_Controller {

	public function daftarPesananObat()
	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/pages/daftar_pesanan_obat_masuk');
		$this->load->view('admin/templates/footer');
	}

}
