<?php

class Model_saran extends CI_Model{
    public function tampil_data(){
        return $this->db->get('saran');    
    }
    
    // public function tambah_saran($data,$table){
	// $this->db->insert($table,$data);
	// }
    
}