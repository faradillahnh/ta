<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserHome extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('KategoriModel');
				$this->load->model('BlogModel');
    }

	public function index()
	{
		// data
		$data['all_kategori'] = $this->KategoriModel->getAllKategoriObat();
		$data['all_alat'] = $this->KategoriModel->getAllKategoriAlat();
		$data['data_blog']=$this->BlogModel->getAllBlog();

		// view
		$this->load->view('user/templates/header', $data);
		$this->load->view('user/pages/index', $data);
		$this->load->view('user/templates/footer');
	}

	public function faqCaraPesanObat()
	{
		$this->load->view('user/templates/header');
		$this->load->view('user/pages/carapesan');
		$this->load->view('user/templates/footer');
	}
}
