<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('PelangganModel');
	}

	public function daftar()
	{
		$this->load->view('user/templates/header');
		$this->load->view('user/pages/daftar');
		$this->load->view('user/templates/footer');
	}

	public function tambahPelangganAdmin()
	{
		$get_prov = $this->db->select('*')->from('wilayah_provinsi')->get();

   	$data['provinsi'] = $get_prov->result();
   	$data['path'] = base_url('assets');

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/pages/tambah_pelanggan', $data);
		$this->load->view('admin/templates/footer');
	}

	public function daftarPelangganAdmin()
	{
		// model
		$data['data_pelanggan']=$this->PelangganModel->getAllPelanggan();
		// view
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/pages/daftar_pelanggan', $data);
		$this->load->view('admin/templates/footer');
	}

	public function prosesTambahPelangganAdmin()
	{
		$config['upload_path']  	= './upload/photopelanggan/';
    $config['allowed_types']	= 'gif|jpg|png';
    $config['file_name']    	= $this->input->post('inputNama');
    $config['overwrite']			= true;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('inputPhoto')) {
        return $this->upload->data("file_name");
    }

	 // input
		$nama = $this->input->post('inputNama');
		$alamat = $this->input->post('inputAlamat');
		$email = $this->input->post('inputEmail');
		$password = $this->input->post('inputPassword');
		$alamat = $this->input->post('inputAlamat');
		$photo = "upload_path".'/'."file_name";

		$data = array(
			'nama_pelanggan' => $nama,
			'email_pelanggan' => $email,
			'password_pelanggan' => $password,
			'alamat_pelanggan' => $alamat,
			'pp_pelanggan' => $photo
			);

		//table insert
		$this->PelangganModel->tambahPelanggan($data);

		//Create Message
		$this->session->set_flashdata('user_saved', 'User has been saved');

		redirect('index.php/Pelanggan/daftarPelangganAdmin');

		// validation
		// $this->form_validation->set_rules('inputNama', 'Nama', 'required|min_length[8]');
		// $this->form_validation->set_rules('inputEmail', 'Email', 'required|valid_email');
		// $this->form_validation->set_rules('inputPassword', 'Password', 'required');
		// $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[inputPassword]');

		// cek
		// if($this->form_validation->run()==false){
		// 	$this->load->view('admin/templates/header');
		// 	$this->load->view('admin/templates/menu');
		// 	$this->load->view('admin/templates/navbar');
		// 	$this->load->view('admin/pages/tambah_pelanggan');
		// 	$this->load->view('admin/templates/footer');
		// }else{
			// input
			// $nama = $this->input->post('inputNama');
			// $alamat = $this->input->post('inputAlamat');
			// $email = $this->input->post('inputEmail');
			// $password = $this->input->post('inputPassword');
			// $alamat = $this->input->post('inputAlamat');
			// $pp = $this->input->post('inputPP');
			//
			// $data = array(
			// 	'nama' => $nama,
			// 	'email' => $email,
			// 	'password' => $password,
			// 	'alamat' => $alamat
			// 	);

			//table insert
			// $this->m_data->input_data($data);

			//Create Message
      // $this->session->set_flashdata('user_saved', 'User has been saved');
			//
			// redirect('crud/index');
		// }
	}

	public function updatePelangganAdmin($id)
	{
		$pelanggan = $this->PelangganModel->detailPelangganAdmin($id);
		$data['pelanggan'] = $pelanggan;

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/pages/edit_pelanggan', $data);
		$this->load->view('admin/templates/footer');
	}

	public function detailPelangganAdmin($id)
	{

		$detail = $this->PelangganModel->detailPelangganAdmin($id);
		$data['detail'] = $detail;
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/menu');
		$this->load->view('admin/templates/navbar');
		$this->load->view('admin/pages/detail_pelanggan', $data);
		$this->load->view('admin/templates/footer');
	}

	public function deletePelangganAdmin($id)
	{
		$this->PelangganModel->deletePelangganAdmin($id);
		redirect('index.php/Pelanggan/daftarPelangganAdmin');
	}

}
