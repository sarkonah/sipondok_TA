<?php

class Model_kelas_guru extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('kelas');
	}
	public function ambil_id_kelas($id_kelas)
	{
		$result = $this->db->where('id_kelas', $id_kelas)->get('kelas');
		if ($result->num_rows() >= 0) {
			return $result->result();
		} else {
			return false;
		}
	}
	public function filter($id_kelas, $tahun)
	{
		$this->db->select('*');
		$this->db->from('history_kelas');
		$this->db->join('santri', 'history_kelas.id_kelas=santri.id_kelas');
		$this->db->where('history_kelas.id_kelas', $id_kelas);
		$this->db->where('history_kelas.tahun', $tahun);
		return $this->db->get();
	}
	public function get_nilai($id_kelas, $tahun)
	{
		$this->db->select('*');
		$this->db->from('rapor');
		$this->db->where('id_kelas', $id_kelas);
		$this->db->where('tahun', $tahun);
		return $this->db->get();
	}

	public function tahun($id_kelas)
	{
		$this->db->select('tahun');
		$this->db->from('history_kelas');
		$this->db->where('history_kelas.id_kelas', $id_kelas);
		$this->db->group_by('tahun');
		$this->db->order_by('tahun', 'ASC');
		return $this->db->get('kelas');
	}
}
