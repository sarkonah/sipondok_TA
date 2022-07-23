<?php 

class Model_kelas_guru extends CI_Model{
	public function tampil_data(){
		return $this->db->get('kelas');
    }
    public function ambil_id_kelas($id_kelas)
	{
		$result = $this->db->where('id_kelas', $id_kelas)->get('kelas');
		if($result->num_rows() >= 0){
			return $result->result();
		}else{
			return false; 
		}
	}
}
?>