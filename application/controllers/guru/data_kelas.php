<?php

class data_kelas extends CI_Controller
{
	// public function __construct(){
	// 	parent::__construct();
	// 	if($this->session->userdata('hak_akses') != 'walikelas'){
	// 		$this->session->set_flashdata('pesan_login','<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
	// 		        Anda belum login !
	//             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 	            <span aria-hidden="true">&times;</span>
	//             </button>
	//             </div>');
	// 		redirect('login');
	// 	}
	// }

	public function index()
	{
		$id_walikelas 	= $this->session->userdata('id_user');
		$kelas 		= $this->db->get_where('kelas', ['id_user' => $id_walikelas])->row();
		$santri = $this->db->get_where('santri', ['id_kelas' => $kelas->id_kelas])->result_array();

		$data['santri'] = $this->db->get_where('santri', ['id_kelas' => $kelas->id_kelas])->result();
		// $data['santri'] = $this->model_input_rapor($id_walikelas)->result_array();
		$data['mapel'] = $this->model_input_rapor->tampil_data()->result();
		$data['pelajaran'] = $this->model_input_rapor->get_kelas($id_walikelas)->result();
		// var_dump($santri);
		// die;
		$tahun = array();
		foreach ($santri as $str) {
			$tahun[] = $this->db->get_where('history_kelas', ['id_santri' => $str['id_santri']])->row();
		}
		$data['tahun_now'] = $tahun;
		// var_dump($tahun);
		// die;

		$this->load->view('templates_guru/header');
		$this->load->view('templates_guru/sidebar');
		$this->load->view('guru/kelas', $data);
		$this->load->view('templates_guru/footer');
	}

	public function kelas_guru($id_kelas)
	{
		// $data['list_nominator'] = $this->model_nominator->list_nama_nominator();
		$data['kelas'] = $this->model_kelas_guru->ambil_id_kelas($id_kelas);
		$data['santri'] = $this->model_kelas_guru->ambil_id_kelas($id_kelas);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('guru/kelas', $data);
		$this->load->view('templates_admin/footer');
	}
}