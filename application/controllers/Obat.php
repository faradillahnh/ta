<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ObatModel');
	}

  public function daftarObat()
  {
    // model
    $data['data_obat']=$this->ObatModel->getAllObat();
    // view
    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/menu');
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/pages/daftar_obat', $data);
    $this->load->view('admin/templates/footer');
  }

}
