<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class web extends MY_Controller {
    public function __construct(){
		parent::__construct();

		$this->load->model('UserModel');
	}
	public function home(){
		
		$this->render_backend('home');
	}
	public function suster()
	{
		if($this->session->userdata('role') != 'Admin')
	    show_404(); 

		$data_suster = $this->UserModel->Getsuster();
		$data_keahlian = $this->UserModel->Getkeahlian();
		$this->render_backend('admin/suster',['data'=>$data_suster,'dataJ'=>$data_keahlian]);
	}
	public function sus()
	{
		$data_suster = $this->UserModel->Getsuster();
		$data_keahlian = $this->UserModel->Getkeahlian();
		$this->render_backend('suster',['data'=>$data_suster,'dataJ'=>$data_keahlian]);
	}
	public function pesan($id)
	{
		if($this->session->userdata('role') != 'Suster') 
	    show_404(); 

		$data_pesan = $this->UserModel->Getpesan($id);
		$this->render_backend('pesan',['data'=>$data_pesan]);
	}
    public function hapussuster($id)
	{
		$this->UserModel->hapus_suster($id);
		redirect('web/suster');
	}
	public function pesann($nid,$noreservasi)
	{
		$this->UserModel->hapus_pesan($noreservasi);
		$data_pesan = $this->UserModel->Getpesan($nid);
		$this->render_backend('pesan',['data'=>$data_pesan]);
	}
	public function tambahpesan()	{
	
		$input_data = [
			'id' => $this->input->post('id', true),
			'nama' => $this->input->post('nama', true),
			'subjek' => $this->input->post('subjek', true),
			'pesan' => $this->input->post('pesan', true),
			'pengirim' => $this->input->post('pengirim', true),
			'tanggal' => $this->input->post('tanggal', true),
			'jam' => $this->input->post('jam', true)
		];
		$this->UserModel->tambah_pesan($input_data);
		$this->session->set_flashdata('message', 'Layanan telah dipesan');
		redirect('web/sus');

	}

	public function editsuster()
	{
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
				$id = $this->input->post('id');
				$nama = $this->input->post('nama');
				$alamat = $this->input->post('alamat');
				$id_keahlian = $this->input->post('id_keahlian');
				$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'id_keahlian' => $id_keahlian,
			'foto' =>$gambar
		);
		$this->UserModel->edit_suster($id,$data);

		redirect('web/suster');	
	}
}

}


