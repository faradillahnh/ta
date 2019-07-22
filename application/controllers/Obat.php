<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ObatModel');
		$this->load->model('KategoriModel');
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

	public function tambahObat()
	{
		//model
		$data['data_kategori']=$this->KategoriModel->getAllKategoriObat();

		// view
    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/menu');
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/pages/tambah_obat', $data);
    $this->load->view('admin/templates/footer');
	}

	public function prosesTambahObat()
	{
		//config
		$config['upload_path']          = './upload/photoproduk/obat/';
		$config['allowed_types']        = 'gif|jpg|png';
		$new_name 											= 'produk-obat'.$_FILES['name'];
		$config['file_name']            = $new_name;

		//load library
		 $this->load->library('upload', $config);
		 $this->upload->do_upload('inputPhoto');

		 $kode = $this->input->post('kode');
		 $nama = $this->input->post('nama');
		 $deskripsi = $this->input->post('deskripsi');
		 $satuan = $this->input->post('satuan');
		 $onhand = $this->input->post('onhand');
		 $min = $this->input->post('min');
		 $max = $this->input->post('max');
		 $hja = $this->input->post('hja');
		 $hjappn = $this->input->post('hjappn');
		 $kategori = $this->input->post('kategori_obat');
		 $photo = $this->input->post('inputPhoto');

		 // query
		 $data= array(
			 'id_obat' => $kode,
			 'nama_obat' => $nama,
			 'deskripsi_obat' => $deskripsi,
			 'satuan' => $satuan,
			 'min' => $onhand,
			 'max' => $min,
			 'onhand' => $max,
			 'hja' => $hja,
			 'hjappn' => $hjappn,
			 'id_kategori_obat' => $kategori,
			 'photo' => $photo
		 );

		 //table insert
		 $this->ObatModel->tambahObat($data);

		 redirect('index.php/Obat/daftarObat');
	}

		public function deleteObat($id)
		{
			$this->ObatModel->deleteObat($id);
			redirect('index.php/Obat/daftarObat');
		}

}
