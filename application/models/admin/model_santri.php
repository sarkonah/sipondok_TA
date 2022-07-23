<?php

class Model_santri extends CI_Model
{

	public function tampil_data()
	{
		return $this->db->get('santri');
	}

	public function list_kelas()
	{
		$this->db->select('*');
		$this->db->from('kelas');
		$query = $this->db->get();
		return $query->result();
	}
	//public function tambah_santri($data,$table){
	//	$this->db->insert($table,$data);
	//}

	//public function edit_santri($where,$table){
	//return $this->db->get_where($table,$where);
	//}

	public function update_santri($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	public function detail_santri($id = NULL)
	{
		$query = $this->db->get_where('santri', array('id_santri' => $id))->row();
		return $query;
	}
	public function getKelas($id)
	{
		$this->db->select('santri.*,kelas.*');
		$this->db->from('santri');
		$this->db->join('kelas', 'santri.id_kelas = kelas.id_kelas');
		//$result = $this->db->where('id_subevent', $id_subevent);
		$query = $this->db->get();
		return $query->row();
	}
	// public function getSantri()
	// {
	// 	# code...
	// 	$this->db->select('*');
	// 	$this->db->from('history_kelas');
	// 	$this->db->join('santri', 'santri.id_santri = history_kelas.id_kelas');
	// 	//$result = $this->db->where('id_subevent', $id_subevent);
	// 	$query = $this->db->get();
	// 	return $query->row();
	// }
}