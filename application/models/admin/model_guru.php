<?php 

class Model_guru extends CI_Model{
	public function tampil_data(){
		return $this->db->get('guru');
	}
	
	// public function list_guru() {
	// 	$this->db->select('*');
	// 	$this->db->from('guru');
	// 	//$this->db->where('hak_akses','Penilai');
	// 	$query = $this->db->get();
	// 	return $query->result();
	//    }
	
	//    public function list_walikelas() {
	// 	$this->db->select('*');
	// 	$this->db->from('walikelas');
	// 	//$this->db->where('hak_akses','Penilai');
	// 	$query = $this->db->get();
	// 	return $query->result();
	//    }
	
	//    public function detail_walikelas($id = NULL){
	// 	$query = $this->db->get_where('guru', array('id_guru' => $id))->row();
	// 	return $query;
	// }
	
	public function tambah_walikelas($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_walikelas($where,$table){
		return $this->db->get_where($table,$where);
	}
	
	public function update_guru($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
?>