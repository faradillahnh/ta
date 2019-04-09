<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  public function index()
  {
    $this->load->view('admin/templates/headerhome');
    $this->load->view('admin/pages/index');
    $this->load->view('admin/templates/footerhome');
  }

	public function daftar()
	{
		$this->load->view('admin/templates/headerhome');
		$this->load->view('admin/pages/daftar');
		$this->load->view('admin/templates/footerhome');
	}

}
