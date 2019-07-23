<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('ObatModel');
		$this->load->model('KategoriModel');
	}

  public function daftarObat(){
    // model
    $data['data_obat']=$this->ObatModel->getAllObat();
    // view
    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/menu');
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/pages/daftar_obat', $data);
    $this->load->view('admin/templates/footer');
  }

	public function tambahObat(){
		//model
		$data['data_kategori']=$this->KategoriModel->getAllKategoriObat();

		// view
    $this->load->view('admin/templates/header');
    $this->load->view('admin/templates/menu');
    $this->load->view('admin/templates/navbar');
    $this->load->view('admin/pages/tambah_obat', $data);
    $this->load->view('admin/templates/footer');
	}

	public function prosesTambahObat(){
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

			//config
			$config['upload_path']          = './upload/photoproduk/obat/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			//$config['file_name']        = $_FILES["inputPhoto"];

		  $this->load->library('upload',$config);

   		$this->upload->initialize($config);
			if (! $this->upload->do_upload('inputPhoto')) {
				 //echo $this->upload->display_errors('<p>', '</p>');
				$data['data_kategori']=$this->KategoriModel->getAllKategoriObat();

				// view
		    $this->load->view('admin/templates/header');
		    $this->load->view('admin/templates/menu');
		    $this->load->view('admin/templates/navbar');
		    $this->load->view('admin/pages/tambah_obat', $data);
		    $this->load->view('admin/templates/footer');
			}else{
	   		$photo = $this->upload->data();

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
			 		 'photo' => base_url('upload/photoproduk/obat/').$photo['file_name']
			 	 );

				 //table insert
	 			$this->ObatModel->tambahObat($data);

	 			redirect('index.php/Obat/daftarObat');
			}
	}

		public function deleteObat($id)
		{
			$this->ObatModel->deleteObat($id);
			redirect('index.php/Obat/daftarObat');
		}

}
