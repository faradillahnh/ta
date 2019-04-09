<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserHome extends CI_Controller {

	public function index()
	{
		$this->load->view('user/templates/header');
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
