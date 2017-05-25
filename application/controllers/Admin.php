<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		// $this->load->library('session');
		$this->load->model('mymodel');
	}

	// AKUN
	public function dataReseller(){
		if($this->session->userdata('isLogin')){
			$this->readAkun();
		} else {
			redirect('welcome/login');
		}
	}

	public function readAkun(){
		if($this->session->userdata('isLogin')){
			$data = $this->mymodel->getData();
			$this->load->view('a-index', array('data' => $data));
		} else {
			$this->load->view('404');
		}
	}

	public function logout(){
		if($this->session->userdata('isLogin')){
			$this->session->sess_destroy();
			redirect('welcome/login');
		} else {
			redirect('welcome/login');
		}
	} 

	public function editStatusAkun($username){
		if($this->session->userdata('isLogin')){
			//$this->load->library('email');
			$statusAkun = $this->mymodel->getStatus($username);
			$statusAkhir = $this->input->post('editStatus');
			$update = $this->mymodel->updateStatus($username, $statusAkhir);
			redirect('Admin/readAkun');
		} else {
			redirect('welcome/login');
		}
	}

	public function deleteAkun(){
		if($this->session->userdata('isLogin')){
			$delete = $this->input->post('user_account');
			$this->mymodel->deleteReseller($delete);  
			$this->readAkun();
		} else {
			redirect('welcome/login');
		} 
	}

	// PRODUK
	public function dataProduk(){
		if($this->session->userdata('isLogin')){
			$this->readProduk();
		} else {
			redirect('welcome/login');
		} 
	}

	public function readProduk(){
		if($this->session->userdata('isLogin')){
			$data['data'] = $this->mymodel->getDataProduk();
			$this->load->view('a-produk', $data);
		} else {
			redirect('welcome/login');
		}
	}

	public function tombolTambahProduk(){
		if($this->session->userdata('isLogin')){
			$this->load->view('a-formCreateProduk');
		} else {
			redirect('welcome/login');
		}
	}

	public function createProduk(){
		if($this->session->userdata('isLogin')){
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('upload');

			$is_submit = $this->input->post('is_submit');

			if (isset($is_submit) && $is_submit == 1) {
				$fileUpload = array(); //variabel buat nampung file
				$isUpload = FALSE;

				//konfigurasi file yg boleh diupload dan lokasi penyimpanan file yg diupload
				$config = array(
					'upload_path' => './uploads/',
					'allowed_types' => 'jpg|jpeg|png',
					'max_size' => 1024
				);

				$this->upload->initialize($config);

				if($this->upload->do_upload('gambar')){
					$fileUpload = $this->upload->data();
					$isUpload = TRUE;
				} else {
					echo $this->upload->display_errors('<p>', '</p>');
				}

				if($isUpload){
					$data = array(
						'id_produk' => $this->input->post('id_produk'),
						'nama_produk' 	=> $this->input->post('nama_produk'),
						'merk_produk' 	=> $this->input->post('merk_produk'),
						'kategori_produk'	=> $this->input->post('kategori_produk'),
						'harga_produk'	=> $this->input->post('harga_produk'),
						'gambar' => $fileUpload['file_name']
					);
					$this->mymodel->addDataProduk($data);
					echo "<script>alert('Data produk berhasil di simpan.')</script>";
					$this->readProduk();
					//redirect('produk_hijab');
				} else if(!$isUpload){
					$data = array(
						'id_produk' => $this->input->post('id_produk'),
						'nama_produk' 	=> $this->input->post('nama_produk'),
						'merk_produk' 	=> $this->input->post('merk_produk'),
						'kategori_produk'	=> $this->input->post('kategori_produk'),
						'harga_produk'	=> $this->input->post('harga_produk'),
					);
					$this->mymodel->addDataProduk($data);
					$this->session->set_flashdata('alert',"<script>alert('Data produk berhasil di simpan.')</script>");
					$this->readProduk();
				}
			} else {
				$this->load->view('a-formCreateProduk');
			} 
		} else {
			redirect('welcome/login');
		}
	}

	public function readProdukID($id_produk){
		if($this->session->userdata('isLogin')){
			$produk = $this->mymodel->getProdukID("WHERE id_produk = '$id_produk'");
			$produkData = array(
				'id_produk' => $produk[0]['id_produk'],
				'nama_produk' 	=> $produk[0]['nama_produk'],
				'merk_produk' 	=> $produk[0]['merk_produk'],
				'kategori_produk' 	=> $produk[0]['kategori_produk'],
				'harga_produk'	=> $produk[0]['harga_produk'],
				'gambar'	=> $produk[0]['gambar']
			);
			$this->load->view('a-formUpdateProduk', $produkData);
		} else {
			redirect('welcome/login');
		}
	}

	public function updateDataProduk($id_produk){
		if($this->session->userdata('isLogin')){
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('upload');

			$is_submit = $this->input->post('is_submit');

			if (isset($is_submit) && $is_submit == 1 ) {
				$fileUpload = array(); //variabel buat nampung file
				$isUpload = FALSE;
				$config = array(
					'upload_path' => './uploads/',
					'allowed_types' => 'jpg|jpeg|png',
					'max_size' => 1024
				);
				$this->upload->initialize($config);

				if($this->upload->do_upload('gambar')){
					$fileUpload = $this->upload->data();
					$isUpload = TRUE;
				}

				if($isUpload){
					$data = array(
						'id_produk' => $this->input->post('id_produk'),
						'nama_produk' 	=> $this->input->post('nama_produk'),
						'merk_produk' 	=> $this->input->post('merk_produk'),
						'kategori_produk'	=> $this->input->post('kategori_produk'),
						'harga_produk'	=> $this->input->post('harga_produk'),
						'gambar' => $fileUpload['file_name']
					);
					$this->mymodel->updateProduk($id_produk, $data);
					$this->session->set_flashdata('alert',"<script>alert('Data produk berhasil di simpan.')</script>");
					redirect('Admin/dataProduk/');
				} else if(!$isUpload){
					$data = array(
						'id_produk' => $this->input->post('id_produk'),
						'nama_produk' 	=> $this->input->post('nama_produk'),
						'merk_produk' 	=> $this->input->post('merk_produk'),
						'kategori_produk'	=> $this->input->post('kategori_produk'),
						'harga_produk'	=> $this->input->post('harga_produk'),
					);
					$this->mymodel->updateProduk($id_produk, $data);
					$this->session->set_flashdata('alert',"<script>alert('Data produk berhasil di simpan.')</script>");
					redirect('Admin/dataProduk/');
				} else {
					redirect('Admin/dataProduk/');
				}
			}
		} else {
			redirect('welcome/login');
		}
	}

	public function deleteProduk(){
		if($this->session->userdata('isLogin')){
			$delete = $this->input->post('produk_hijab');
			$this->mymodel->deleteProduk($delete);  
			$this->readProduk();
		} else {
			redirect('welcome/login');
		} 
	}

	public function produkBest(){
		if($this->session->userdata('isLogin')){
			$this->readProdukBest();
		} else {
			redirect('welcome/login');
		}
	}

	public function readProdukBest(){
		if($this->session->userdata('isLogin')){
			$data['data'] = $this->mymodel->getDataProdukBest();
			$this->load->view('a-produk-best', $data);
		} else {
			redirect('welcome/login');
		}
	}

	public function tombolTambahProdukBest(){
		if($this->session->userdata('isLogin')){
			$this->load->view('a-formCreateProdukBest');
		} else {
			redirect('welcome/login');
		}
	}

	public function createProdukBest(){
		if($this->session->userdata('isLogin')){
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('upload');

			$is_submit = $this->input->post('is_submit');

			if (isset($is_submit) && $is_submit == 1) {
				$fileUpload = array(); //variabel buat nampung file
				$isUpload = FALSE;

				//konfigurasi file yg boleh diupload dan lokasi penyimpanan file yg diupload
				$config = array(
					'upload_path' => './uploads/',
					'allowed_types' => 'jpg|jpeg|png',
					'max_size' => 1024
				);

				$this->upload->initialize($config);

				if($this->upload->do_upload('gambar')){
					$fileUpload = $this->upload->data();
					$isUpload = TRUE;
				}

				if($isUpload){
					$data = array(
						'id_produk' => $this->input->post('id_produk'),
						'nama_produk' 	=> $this->input->post('nama_produk'),
						'merk_produk' 	=> $this->input->post('merk_produk'),
						'kategori_produk'	=> $this->input->post('kategori_produk'),
						'harga_produk'	=> $this->input->post('harga_produk'),
						'gambar' => $fileUpload['file_name']
					);
					$this->mymodel->addDataProdukBest($data);
					echo "<script>alert('Data produk berhasil di simpan.')</script>";
					$this->readProdukBest();
				} else if(!$isUpload){
					$data = array(
						'id_produk' => $this->input->post('id_produk'),
						'nama_produk' 	=> $this->input->post('nama_produk'),
						'merk_produk' 	=> $this->input->post('merk_produk'),
						'kategori_produk'	=> $this->input->post('kategori_produk'),
						'harga_produk'	=> $this->input->post('harga_produk'),
					);
					$this->mymodel->addDataProdukBest($data);
					$this->session->set_flashdata('alert',"<script>alert('Data produk berhasil di simpan.')</script>");
					redirect('Admin/readProdukBest/');
				} else {
					echo "gagal insert";
				}
			} else {
				$this->load->view('a-formCreateProdukBest');
			}
		} else {
			redirect('welcome/login');
		}
	}

	public function readProdukIDBest($id_produk){
		if($this->session->userdata('isLogin')){
			$produk = $this->mymodel->getProdukIDBest("WHERE id_produk = '$id_produk'");
			$produkData = array(
				'id_produk' => $produk[0]['id_produk'],
				'nama_produk' 	=> $produk[0]['nama_produk'],
				'merk_produk' 	=> $produk[0]['merk_produk'],
				'kategori_produk' 	=> $produk[0]['kategori_produk'],
				'harga_produk'	=> $produk[0]['harga_produk'],
				'gambar'	=> $produk[0]['gambar']
			);
			$this->load->view('a-formUpdateProdukBest', $produkData);
		} else {
			redirect('welcome/login');
		}
	}

	public function updateDataProdukBest($id_produk){

		if($this->session->userdata('isLogin')){
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('upload');

			$is_submit = $this->input->post('is_submit');

			if (isset($is_submit) && $is_submit == 1 ) {
				$fileUpload = array(); //variabel buat nampung file
				$isUpload = FALSE;
				$config = array(
					'upload_path' => './uploads/',
					'allowed_types' => 'jpg|jpeg|png',
					'max_size' => 1024
				);
				$this->upload->initialize($config);

				if($this->upload->do_upload('gambar')){
					$fileUpload = $this->upload->data();
					$isUpload = TRUE;
				}

				if($isUpload){
					$data = array(
						'id_produk' => $this->input->post('id_produk'),
						'nama_produk' 	=> $this->input->post('nama_produk'),
						'merk_produk' 	=> $this->input->post('merk_produk'),
						'kategori_produk'	=> $this->input->post('kategori_produk'),
						'harga_produk'	=> $this->input->post('harga_produk'),
						'gambar' => $fileUpload['file_name']
					);
					$this->mymodel->updateProdukBest($id_produk, $data);
					$this->session->set_flashdata('alert',"<script>alert('Data produk berhasil di simpan.')</script>");
					redirect('Admin/readProdukBest/');
				} else if(!$isUpload){
					$data = array(
						'id_produk' => $this->input->post('id_produk'),
						'nama_produk' 	=> $this->input->post('nama_produk'),
						'merk_produk' 	=> $this->input->post('merk_produk'),
						'kategori_produk'	=> $this->input->post('kategori_produk'),
						'harga_produk'	=> $this->input->post('harga_produk'),
					);
					$this->mymodel->updateProdukBest($id_produk, $data);
					$this->session->set_flashdata('alert',"<script>alert('Data produk berhasil di simpan.')</script>");
					redirect('Admin/readProdukBest/');
				} else {
					redirect('Admin/produkBest/');
				}
			}
		} else {
			redirect('welcome/login');
		}	
	}

	public function deleteProdukBest(){
		if($this->session->userdata('isLogin')){
			$delete = $this->input->post('produk_hijab_best');
			$this->mymodel->deleteProdukBest($delete);  
			$this->readProdukBest();
		} else {
			redirect('welcome/login');
		} 
	}

	//REVIEW
	public function reviewProduk(){
		if($this->session->userdata('isLogin')){
			$this->readReview();
		} else {
			redirect('welcome/login');
		}
	}

	public function readReview(){
		if($this->session->userdata('isLogin')){
			$data['data'] = $this->mymodel->getReviewProduk();
			$this->load->view('a-reviewProduk', $data);
		} else {
			redirect('welcome/login');
		}
	}

	public function editStatusReview($nomor){
		if($this->session->userdata('isLogin')){
			$statusReview = $this->mymodel->getStatusReview($nomor);
			$statusReviewAkhir = $this->input->post('editStatusR');
			$update = $this->mymodel->updateStatusReview($nomor, $statusReviewAkhir);
			redirect('Admin/reviewProduk');
		} else {
			redirect('welcome/login');
		}
	}

	public function deleteReview(){
		if($this->session->userdata('isLogin')){
			$delete = $this->input->post('review_hijab');
			$this->mymodel->deleteReview($delete);  
			$this->reviewProduk();
		} else {
			redirect('welcome/login');
		} 
	}
}