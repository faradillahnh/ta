<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function daftar()
	{
		$this->load->view('user/templates/header');
		$this->load->view('user/pages/daftar');
		$this->load->view('user/templates/footer');
	}
}
