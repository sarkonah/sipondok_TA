<?php

class Model_kelas extends CI_Model
{

	public function tampil_data()
	{
		return $this->db->get('kelas');
	}

	public function get_kelas_user()
	{
		$this->db->select('*');
		$this->db->from('kelas');
		$this->db->join('user', 'kelas.id_user=user.id_user');
		return $this->db->get();
	}

	// public function view_kelas()
	// {
	// 	$this->db->select('kelas.*,walikelas.id as walikelas_id, walikelas.walikelas');
	// 	$this->db->from('kelas');
	// 	$this->db->join('walikelas', 'walikelas.id = kelas.id_walikelas');
	// 	// $this->db->where('id_kelas', $id_kelas);
	// 	//$this->db->where('id_subevent', $id_subevent);
	// 	//$result = $this->db->where('id_subevent', $id_subevent);
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }

	// public function ambil_id_kelas($id_kelas)
	// {
	// 	$result = $this->db->where('id', $id_kelas)->limit(1)->get('kelas');
	// 	if($result->num_rows() >= 0){
	// 		return $result->row();
	// 	}else{
	// 		return false; 
	// 	}
	// }

	// public function ambil_id_walikelas($id_kelas)
	// {
	// 	$result = $this->db->where('id_kelas', $id_kelas)->get('walikelas');
	// 	if ($result->num_rows() >= 0) {
	// 		return $result->result();
	// 	} else {
	// 		return false;
	// 	}
	// }

	// public function nama_walikelas()
	// {
	// 	$this->db->select('walikelas.*,user.*');
	// 	$this->db->from('walikelas');
	// 	$this->db->join('user', 'user.id_user = walikelas.id_user');
	// 	$this->db->where('id_kelas');
	// 	//$result = $this->db->where('id_subevent', $id_subevent);
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }

	public function tambah_kelas($data, $table)
	{
		$this->db->insert($table, $data);
	}

	// public function hapus_kelas($where, $table)
	// {
	// 	$this->db->where($where);
	// 	$this->db->delete($table);
	// }

	public function list_kelas()
	{
		$this->db->select('*');
		$this->db->from('kelas');
		$query = $this->db->get();
		return $query->result();
	}

	// public function edit_kelas($where,$table){
	// 	return $this->db->get_where($table,$where);
	// }

	public function list_walikelas()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('hak_akses', 'Walikelas');
		$query = $this->db->get();
		return $query->result();
	}

	public function update_kelas($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}


	public function tampil_kelas()
	{
		$this->db->select('*');
		$this->db->from('kelas');
		$this->db->join('user', 'user.id_user=kelas.id_user');
		return $this->db->get()->result();
	}
}