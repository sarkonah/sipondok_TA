<?php 

class Model_detail_indikator extends CI_Model{
	public function tampil_data(){
		return $this->db->get('mapel');
	}
	
	// public function walikelas($id_walikelas)
	// {
	// 	$result = $this->db->where('id_walikelas', $id_walikelas)->get('indikator_mapel');
	// 	if($result->num_rows() >= 0){
	// 		return $result->result();
	// 	}else{
	// 		return false; 
	// 	}
	// }
	
	public function ambil_id_kelas($id_kelas)
	{
		$result = $this->db->where('id_kelas', $id_kelas)->get('mapel');
		if($result->num_rows() >= 0){
			return $result->result();
		}else{
			return false; 
		}
	}
	public function tambah_detail_indikator($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function update_indikator($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}
}
?>