<?php
	class Mymodel extends CI_Model {
		//AKUN
		public function getData(){
			$query = $this->db->get('user_account');
			return $query->result_array();
		}

		public function addDataAkun($data){
			return $this->db->insert('user_account', $data);
		}

		public function login_authen($username, $password){
		    $this->db->select('*');
		    $this->db->where('username', $username);
		    $this->db->where('password', $password);
		    $this->db->from('user_account');

		    $query = $this->db->get();

		    if ($query->num_rows() == 1) {
		    	return true;
		    } else{
		    	return false;
		    }
		}

		public function authen_user($username){
		    $this->db->select('authentication');
		    $this->db->where('username', $username);
		    $this->db->from('user_account');
		    $query = $this->db->get();
		    return $query->result_array();
		}

		public function wrong_password($username, $value){
		    $this->db->set('authentication', $value);
		    $this->db->where("username", $username);
		    $this->db->update('user_account');
		}

		public function getStatus($username){
			$this->db->select('status');
			$this->db->where('username', $username);
			$s = $this->db->get('user_account');
			$data = $s->result_array();
			return ($data[0]['status']);
		}

		public function updateStatus($username, $statusAkun){
		 	$this->db->set('status', $statusAkun);
		 	$this->db->where('username', $username);
		 	$this->db->update('user_account');
		}

		public function deleteReseller($username){
			$this->db->where_in('username', $username);  
			$this->db->delete('user_account');
		}

		//PRODUK
		public function getDataProduk(){
			$query = $this->db->get('produk_hijab');
			return $query->result_array();
		}

		public function addDataProduk($data){
			return $this->db->insert('produk_hijab', $data);
		}

		public function getProdukID($where=""){
			$data = $this->db->query('SELECT * FROM produk_hijab '.$where);
			return $data->result_array();
		}

		public function updateProduk($id_produk, $data){
			$this->db->where('id_produk', $id_produk);
		 	return $this->db->update('produk_hijab', $data);
		}

		public function deleteProduk($id_produk){
			$this->db->where_in('id_produk', $id_produk);  
			$this->db->delete('produk_hijab');
		}

		public function getDataProdukBest(){
			$query = $this->db->get('produk_hijab_best');
			return $query->result_array();
		}

		public function addDataProdukBest($data){
			return $this->db->insert('produk_hijab_best', $data);
		}

		public function getProdukIDBest($where=""){
			$data = $this->db->query('SELECT * FROM produk_hijab_best '.$where);
			return $data->result_array();
		}

		public function updateProdukBest($id_produk, $data){
			$this->db->where('id_produk', $id_produk);
		 	return $this->db->update('produk_hijab_best', $data);
		}

		public function deleteProdukBest($id_produk){
			$this->db->where_in('id_produk', $id_produk);  
			$this->db->delete('produk_hijab_best');
		}
		
		public function addDataReview($data){
			return $this->db->insert('review_hijab', $data);
		}

		public function getReviewProduk(){
			$query = $this->db->get('review_hijab');
			return $query->result_array();
		}

		public function getStatusReview($nomor){
			$this->db->select('status_review');
			$this->db->where('nomor', $nomor);
			$s = $this->db->get('review_hijab');
			$data = $s->result_array();
			return ($data[0]['status_review']);
		}

		public function updateStatusReview($nomor, $statusReview){
		 	$this->db->set('status_review', $statusReview);
		 	$this->db->where('nomor', $nomor);
		 	$this->db->update('review_hijab');
		}

		public function deleteReview($nomor){
			$this->db->where_in('nomor', $nomor);  
			$this->db->delete('review_hijab');
		}

		public function getDataKategori(){
			$query = $this->db->get('kategori_hijab');
			return $query->result_array();
		}

		public function getDataMerk(){
			$query = $this->db->get('merk_hijab');
			return $query->result_array();
		}	
	}
?>