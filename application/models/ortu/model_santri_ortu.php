<?php 

class Model_santri_ortu extends CI_Model{
	
	public function tampil_data(){
		return $this->db->get('santri');
	} 
}