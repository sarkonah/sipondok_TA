<?php

class Model_input_rapor extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('mapel');
	}

	public function update_input_rapor($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function get_kelas($id)
	{
		$this->db->from('kelas');
		$this->db->where('kelas.id_user', $id);
		$this->db->join('mapel', 'kelas.id_kelas=mapel.id_kelas');
		return $this->db->get();
	}
}