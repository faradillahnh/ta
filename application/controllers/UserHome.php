<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserHome extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('KategoriModel');
    }

	public function index()
	{
		// data
		$data['all_kategori'] = $this->KategoriModel->getAllObat();
		$data['all_alat'] = $this->KategoriModel->getAllAlat();

		// view
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/pages/index');
		$this->load->view('user/templates/footer');
	}

	public function faqCaraPesanObat()
	{
		$this->load->view('user/templates/header');
		$this->load->view('user/pages/carapesan');
		$this->load->view('user/templates/footer');
	}
}
