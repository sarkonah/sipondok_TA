<?php 

class Model_user extends CI_Model{
	public function tampil_data(){
		return $this->db->get('user');
	} 

	// public function edit_user($where,$table){
	// 	return $this->db->get_where($table,$where);
	// }

	public function update_user($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}
}
?>