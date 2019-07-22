<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('CabangModel');
    }

	public function daftarCabang()
	{
		//data
		$data['data_cabang']=$this->CabangModel->getAllCabang();

		//view
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/pages/daftar_cabang', $data);
		$this->load->view('admin/templates/footer');
	}

  public function tambahCabang()
  {
    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/menu');
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/pages/tambah_cabang');
    $this->load->view('admin/templates/footer');
  }

  public function prosesTambahCabang()
  {
    // code...
  }

  public function editCabang($id)
  {
    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/menu');
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/pages/edit_cabang');
    $this->load->view('admin/templates/footer');
  }

}
