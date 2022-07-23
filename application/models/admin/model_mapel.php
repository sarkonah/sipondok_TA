<?php 

class Model_mapel extends CI_Model{
	public function tampil_data(){
		return $this->db->get('mapel');
	} 
	public function tambah_walikelas($data,$table){
		$this->db->insert($table,$data);
	}
	
	public function edit_walikelas($where,$table){
		return $this->db->get_where($table,$where);
	}
}
?>