<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminHome extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/pages/dashboard');
		$this->load->view('admin/templates/footer');
	}

}
