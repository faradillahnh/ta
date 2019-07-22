<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('BlogModel');
	}

	public function daftarKontenBlog()
	{
		//model
		$data['data_blog']=$this->BlogModel->getAllBlog();

		//view
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/pages/daftar_konten_blog', $data);
		$this->load->view('admin/templates/footer');
	}

  public function tambahKontenBlog()
  {
    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/menu');
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/pages/tambah_konten_blog');
    $this->load->view('admin/templates/footer');
  }

  public function prosesTambahKontenBlog()
  {
    // code...
  }

  public function editKontenBlog($id)
  {
    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/menu');
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/pages/edit_konten_blog');
    $this->load->view('admin/templates/footer');
  }

}
