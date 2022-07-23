<?php

class Data_kelas extends CI_Controller
{

	public function index()
	{
		// $data['walikelas'] 		= $this->model_kelas->tampil_data()->result();
		$data['list_kelas']    	= $this->model_kelas->list_kelas();
		$data['list_walikelas']  = $this->model_kelas->list_walikelas();
		// $data['nama_walikelas']	= $this->model_kelas->nama_walikelas();
		// $wali = $this->model_kelas->walikelas();
		// $data['list'] = $wali;
		$data['user'] = $this->model_user->tampil_data();
		$data['join2'] = $this->model_kelas->tampil_kelas();
		// $data['kelas'] = $this->model_kelas->tampil_data();
		$data['kelas'] = $this->model_kelas->get_kelas_user()->result();
		// echo json_encode($data['kelas']);
		// exit;

		$data['wali'] = $this->db->get_where('user', array('hak_akses' => 'walikelas'))->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/kelas', $data);
		$this->load->view('templates_admin/footer');
	}

	// public function tambah_kelas()
	// {
	// 	$id_kelas		= $this->input->post('id_kelas');
	// 	$id_user 		= $this->input->post('id_user');

	// 	$data = array(
	// 		'id_kelas'  => $id_kelas,
	// 		'id_user' 	=> $id_user, 
	// 	);

	// 	// echo "<pre>";
	// 	// print_r($data);
	// 	// exit;

	// 	$this->model_kelas->tambah_kelas($data, 'kelas');
	// 	$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
	// 			Data berhasil ditambahkan!
	// 	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 	    <span aria-hidden="true">&times;</span>
	// 	  </button>
	// 	</div>');
	// 	redirect('admin/data_kelas');
	// }

	// public function edit($id)
	// { 
	// 	$where = array('id_kelas' =>$id);
	// 	$data['santri'] = $this->model_kelas->edit_kelas($where, 'kelas')->result();
	// 	$this->load->view('templates_admin/header');
	// 	$this->load->view('templates_admin/sidebar');
	// 	$this->load->view('admin/edit_kelas', $data);
	// 	$this->load->view('templates_admin/footer');

	// }

	public function update_kelas($id)
	{
		// $id_kelas			= $this->input->post('kelas');
		$id_user 			= $this->input->post('wali');

		$data = array(
			// 'id_kelas' 			=> $id_kelas,
			'id_user' 			=> $id_user
		);

		$where = array(
			// 'id_kelas' => $id_kelas
			'id_kelas'	=> $id
		);

		// echo "<pre>";
		// print_r($data);
		// exit;

		// $where = array('id_kelas' => $id_kelas);
		// $this->model_kelas->update_kelas($where, $data, 'kelas');
		$this->db->update('kelas', $data, $where);
		$this->session->set_flashdata('pesan_santri', '<div class="alert alert-success alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diupdate!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_kelas');
	}

	// public function hapus_kelas($id_walikelas){
	// 	$where = array('id_walikelas'=>$id_walikelas);
	// 	$this->db->delete('walikelas', $where);
	// 	$this->session->set_flashdata('pesan_santri','<div class="alert alert-success alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
	// 			Data berhasil dihapus!
	// 	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 	    <span aria-hidden="true">&times;</span>
	// 	  </button>
	// 	</div>');
	// 	redirect('admin/data_kelas');
	// }

	// public function getKelas()
	// {
	// 	$this->db->select('kelas.*,santri.*');
	// 	$this->db->from('walikelas');
	// 	$this->db->join('user', 'user.id_user = walikelas.id_user');
	// 	$this->db->where('id_kelas');
	// 	//$result = $this->db->where('id_subevent', $id_subevent);
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }
}