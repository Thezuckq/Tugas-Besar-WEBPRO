<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {
    
    public function get($username){
        $this->db->where('username', $username);
        $result = $this->db->get('user')->row(); 
        return $result;
    }
    public function Getsuster(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('keahlian','keahlian.id_keahlian=user.id_keahlian');
		$this->db->where('role','Suster');
		$query = $this->db->get();
		return $query->result();
	}
	public function Getkeahlian(){
		$this->db->select('*');
		$this->db->from('keahlian');
		$query = $this->db->get();
		return $query->result();
	}
	public function Getpesan($id){
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->where('id',$id);
		$query = $this->db->get();
		return $query->result();
	}
	public function hapus_suster($id)
	{
		return $this->db->delete('user', ['id' => $id]);
	}
	public function hapus_pesan($noreservasi)
	{
		return $this->db->delete('pesan', ['noreservasi' => $noreservasi]);
	}
	public function edit_suster($id,$data)
	{
		$this->db->where('id', $id);
		$this->db->update('user', $data);
	    return;
	}
	public function tambah_suster($data)
	{
		return $this->db->insert('suster', $data);
	}
	public function tambah_pesan($data)
	{
		return $this->db->insert('pesan', $data);
	}
	public function check_username($username){
		$condition = "username =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}
	public function insert_new_profle($data){
		$this->db->insert('user', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
}
