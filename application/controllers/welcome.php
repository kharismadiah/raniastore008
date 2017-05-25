<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model('mymodel');
	}
	
	public function index(){
		$data['data'] = $this->mymodel->getDataKategori();
		$data['merk'] = $this->mymodel->getDataMerk();
		$data['produkBest'] = $this->mymodel->getDataProdukBest();
		$this->load->view('home', $data);		
	}

	public function login(){
		$this->load->view('login');
	}

	public function shop(){
		$data['data'] = $this->mymodel->getDataKategori();
		$data['merk'] = $this->mymodel->getDataMerk();
		$data['produk'] = $this->mymodel->getDataProduk();
		$this->load->view('shop',$data);
	}

	public function viewDetailID($id_produk){
		$produk = $this->mymodel->getProdukID("WHERE id_produk = '$id_produk'");
		$data = array(
			'id_produk' 		=> $produk[0]['id_produk'],
			'nama_produk' 		=> $produk[0]['nama_produk'],
			'merk_produk' 		=> $produk[0]['merk_produk'],
			'kategori_produk' 	=> $produk[0]['kategori_produk'],
			'harga_produk'		=> $produk[0]['harga_produk'],
			'gambar' 			=> $produk[0]['gambar']
		);
		$data['data'] = $this->mymodel->getDataKategori();
		$data['merk'] = $this->mymodel->getDataMerk();
		$this->load->view('product-details', $data);
	}

	public function viewDetailIDBest($id_produk){
		$produk = $this->mymodel->getProdukIDBest("WHERE id_produk = '$id_produk'");
		$data = array(
			'id_produk' 		=> $produk[0]['id_produk'],
			'nama_produk' 		=> $produk[0]['nama_produk'],
			'merk_produk' 		=> $produk[0]['merk_produk'],
			'kategori_produk' 	=> $produk[0]['kategori_produk'],
			'harga_produk'		=> $produk[0]['harga_produk'],
			'gambar' 			=> $produk[0]['gambar']
		);
		$data['data'] = $this->mymodel->getDataKategori();
		$data['merk'] = $this->mymodel->getDataMerk();
		$this->load->view('product-details', $data);
	}

	public function blog_list(){
		$this->load->view('blog');
	}

	public function blog_single(){
		$this->load->view('blog-single');
	}

	public function contact_us(){
		$this->load->view('contact-us');
	}

	// AKUN
	public function createAkun(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('upload');

		$is_submit = $this->input->post('is_submit');

		if (isset($is_submit) && $is_submit == 1) {
			$fileUpload = array(); //variabel buat nampung file
			$isUpload = FALSE;

			//konfigurasi file yg boleh diupload dan lokasi penyimpanan file yg diupload
			$config = array(
				'upload_path' => './uploadsPP/',
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
					'username' 	=> $this->input->post('username'),
					'email' 	=> $this->input->post('email'),
					'password' 	=> $this->input->post('password'),
					'phone'		=> $this->input->post('phone'),
					'gambar' => $fileUpload['file_name']
				);
				$this->mymodel->addDataAkun($data);
				echo "<script>alert('Selamat! Anda telah berhasil membuat akun. Silahkan login untuk masuk ke akun Anda.')</script>";
				$this->index();
				//redirect('produk_hijab');
			} else if(!$isUpload){
				$data = array(
					'username' 	=> $this->input->post('username'),
					'email' 	=> $this->input->post('email'),
					'password' 	=> $this->input->post('password'),
					'phone'		=> $this->input->post('phone')
				);
				$this->mymodel->addDataAkun($data);
				echo "<script>alert('Selamat! Anda telah berhasil membuat akun. Silahkan login untuk masuk ke akun Anda.')</script>";
				$this->index();
			} else {
				echo "gagal insert";
			}
		} else {
			$this->load->view('login');
		}
	}

	public function loginUser(){
		$username = $this->input->post('username');
    	$password = $this->input->post('password');

    	$isLogin = $this->mymodel->login_authen($username, $password);
    	$i = $this->mymodel->authen_user($username);

    	$session = array(
		    	'username' => $i[0]['username'],
		    	'password' => $i[0]['password']
		    );

	    if ($isLogin == true && $i[0]['authentication'] < 3) { 
	    	$this->session->set_userdata('isLogin', TRUE);
	    	if($_SESSION['isLogin']==TRUE){   	
		    	$this->session->set_userdata('isLogin',TRUE);
		    	$this->session->set_userdata('username', $username);
		    	echo "<script>alert('SELAMAT ANDA BERHASIL LOGIN')</script>";
	    		redirect('/Admin/readAkun');
	    	} else {
	    		echo "<script>alert('GAGAL LOGIN')</script>";
		        $this->load->view('login');
	    	}
	    } else {
	    	if ($i[0]['authentication'] < 3) {
	    		echo "<script>alert('GAGAL LOGIN')</script>";
		        $update = $this->mymodel->wrong_password($username, $i[0]['authentication']+1); 
		        $this->load->view('login');
	      	} else{
	      		echo "<script>alert('AKUN ANDA TERBLOKIR !! Silahkan buat akun baru.')</script>";
		        $this->load->view('login');
	      	} 
	    }
	}

	//REVIEW
	public function createReview(){
		$data = array(
			'nama_review' => $this->input->post('nama_review'),
			'email_review' => $this->input->post('email_review'),
			'pesan_review' => $this->input->post('pesan_review'),
			'datetime_review' => $this->input->post('datetime_review'),
		);
		$this->mymodel->addDataReview($data);
		echo "<script>alert('Review hijab berhasil di simpan. Terimakasih atas review Anda')</script>";
		$this->index();
	}	
}
