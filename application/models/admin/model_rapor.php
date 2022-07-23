<?php

class Model_rapor extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('santri');
	}

	public function detail_indikator($id = NULL)
	{
		$query = $this->db->get_where('mapel', array('id_kelas' => $id))->row();
		return $query;
	}

	public function detail_rapor($id = NULL)
	{
		$query = $this->db->get_where('rapor', array('id_rapor' => $id))->row();
		return $query;
	}


	public function getMapel($id)
	{

		$this->db->select('rapor.*,mapel.*');
		$this->db->from('rapor');
		$this->db->join('mapel', 'mapel.id_mapel = rapor.id_mapel');
		$this->db->where('id_santri', $id);
		//$result = $this->db->where('id_subevent', $id_subevent);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getMapel1($where)
	{

		$this->db->select('*');
		$this->db->from('history_kelas');
		$this->db->join('rapor', 'rapor.id_santri = history_kelas.id_santri');
		$this->db->join('mapel', 'mapel.id_mapel = rapor.id_mapel');
		$this->db->where($where);
		//$result = $this->db->where('id_subevent', $id_subevent);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getSum($id)
	{
		$this->db->select_sum('nilai');
		$this->db->from('rapor');
		$this->db->where('id_santri', $id);
		return $this->db->get()->row();
	}
	public function getSum1($where)
	{
		$this->db->select_sum('nilai');
		$this->db->from('rapor');
		$this->db->join('history_kelas', 'history_kelas.id_santri = rapor.id_santri');
		$this->db->join('mapel', 'mapel.id_mapel = rapor.id_mapel');
		$this->db->where($where);
		return $this->db->get()->row();
	}

	public function getAvg($id)
	{
		$this->db->select_avg('nilai');
		$this->db->from('rapor');
		$this->db->where('id_santri', $id);
		$this->db->join('mapel', 'mapel.id_mapel = rapor.id_mapel');
		return $this->db->get()->row();
	}
	public function getAvg1($where)
	{
		$this->db->select_avg('nilai');
		$this->db->from('rapor');
		$this->db->join('history_kelas', 'history_kelas.id_santri = rapor.id_santri');
		$this->db->where($where);
		return $this->db->get()->row();
	}
	public function tahun() {
        $this->db->select('tahun');
        $this->db->from('history_kelas');
		$this->db->order_by('tahun', 'desc');
        $this->db->distinct();
        return $this->db->get();
	}
	public function tampil_data_rapor($where)
	{
		$this->db->select('*');
        $this->db->from('history_kelas');
		$this->db->join('santri', 'santri.id_santri = history_kelas.id_santri');
		$this->db->where($where);
		return $this->db->get();
	}
}
