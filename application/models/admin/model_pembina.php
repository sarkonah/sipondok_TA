<?php 

class Model_pembina extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('pembina');
	} 
	public function tambah_pembina($data,$table)
	{
		$this->db->insert($table,$data);
	}
	
	// public function edit_pembina($where,$table){
	// 	return $this->db->get_where($table,$where);
	// }
	
	public function update_pembina($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	// public function detail_pembina($id = NULL){
	// 	$query = $this->db->get_where('pembina', array('id_pembina' => $id))->row();
	// 	return $query;
	// }
}
?>