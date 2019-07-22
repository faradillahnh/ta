<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function daftarKaryawan()
	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/pages/daftar_karyawan');
		$this->load->view('admin/templates/footer');
	}

  public function tambahKaryawan()
  {
    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/menu');
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/pages/tambah_karyawan');
    $this->load->view('admin/templates/footer');
  }

  public function prosesTambahKaryawan()
  {
    // code...
  }

  public function editKaryawan($id)
  {
    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/menu');
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/pages/edit_karyawan');
    $this->load->view('admin/templates/footer');
  }

}
