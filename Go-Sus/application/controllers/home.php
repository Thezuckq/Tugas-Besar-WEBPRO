<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MY_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('UserModel');
	}

	public function index(){
		if($this->session->userdata('authenticated')) 
			redirect('web/home'); 

		  $this->render_login('login');  

	}
	public function registerindex(){
		if($this->session->userdata('authenticated')) 
			redirect('web/home'); 
			$this->render_register('register'); 
		
	}

	public function loginindex(){
		if($this->session->userdata('authenticated')) 
			redirect('web/home'); 

		
		$this->render_login('login'); 
	}

	public function login(){
		$username = $this->input->post('username'); 
		$password = $this->input->post('password'); 
		$user = $this->UserModel->get($username); 

		if(empty($user)){ 
			$this->session->set_flashdata('message', 'Username tidak ditemukan'); 
			redirect('home/loginindex'); 
		}else{
			if($password == $user->password){
				$session = array(
					'authenticated'=>true,
					'username'=>$user->username,  
					'nama'=>$user->nama, 
					'role'=>$user->role, 
					'alamat'=>$user->alamat, 
					'nohp'=>$user->nohp,
					'id'=>$user->id 
				);

				$this->session->set_userdata($session); 
				redirect('web/home'); 
			}else{
				$this->session->set_flashdata('message', 'Password salah'); 
				redirect('home/loginindex'); 
			}
		}
	}
	public function register(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$repass = $this->input->post('re-password');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$nohp = $this->input->post('nohp');
		if ($pass != $repass){
			$this->session->set_flashdata('message', 'Password tidak cocok'); 
			redirect('home/registerindex');
		}else if($this->UserModel->check_username($username)){
			$this->session->set_flashdata('message', 'Username sudah ada'); 
			redirect('home/registerindex');
		}else{
				$data = array(
					'username' => $username,
					'password' => $pass,
					'nama' => $nama,
					'nohp' => $nohp,
					'alamat' => $alamat
				);
				$result = $this->UserModel->insert_new_profle($data);
				if($result){
					$this->session->set_flashdata('message', 'Register Berhasil'); 
					redirect('home/registerindex');
				} else {
					$this->session->set_flashdata('message', 'Register Gagal'); 
					redirect('home/registerindex');
				}
			}
		}
		public function registersuster(){
		$username = $this->input->post('username');
		$pass = $this->input->post('password');
		$repass = $this->input->post('re-password');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$nohp = $this->input->post('nohp');
		$nid = $this->input->post('nid');
		$id_keahlian = $this->input->post('id_keahlian');
		$role = $this->input->post('role');
		if ($pass != $repass){
			$this->session->set_flashdata('message', 'Password tidak cocok'); 
			redirect('home/registerindex');
		}else if($this->UserModel->check_username($username)){
			$this->session->set_flashdata('message', 'Username sudah ada'); 
			redirect('home/registerindex');
		}else{
			$initialize = $this->upload->initialize(array(
				"upload_path" => './assets/ava/',
				"allowed_types" => "gif|jpg|jpeg|png|bmp",
				"remove_spaces" => TRUE
				
				
			));
			$this->load->library('upload', $initialize);
			if (!$this->upload->do_upload('foto')) {
				$error = array('error' => $this->upload->display_errors());
				$data['error_message'] = $this->upload->display_errors();
				echo 'anda gagal upload';
			} else {
				$data = $this->upload->data();
				$gambar = $data['file_name'];
				$input_data = array(
					'username' => $username,
					'password' => $pass,
					'nama' => $nama,
					'nohp' => $nohp,
					'role' => $role,
					'alamat' => $alamat,
					'id_keahlian' => $id_keahlian,
					'foto' => $gambar
				);
				$result = $this->UserModel->insert_new_profle($input_data);
				if($result){
					$this->session->set_flashdata('message', 'Tambah Berhasil'); 
					redirect('web/suster');
				} else {
					$this->session->set_flashdata('message', 'Tambah Gagal'); 
					redirect('web/suster');
				}
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy(); 
		redirect('home'); 
	}
}
