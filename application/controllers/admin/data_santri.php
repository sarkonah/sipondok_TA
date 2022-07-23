<?php

class Data_santri extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}

	public function index()
	{
		$data['santri'] 	= $this->model_santri->tampil_data()->result();
		// $data['list_kelas'] = $this->model_kelas->list_kelas();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/santri', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_santri()
	{
		// $id_santri 	 	= $this->input->post('id_santri');
		$nama_santri 	= $this->input->post('nama_santri');
		$nis		= $this->input->post('nis');
		// $id_kelas		= $this->input->post('id_kelas');
		$tempat_lahir	= $this->input->post('tempat_lahir');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$jenis_kelamin	= $this->input->post('gender');
		$status_santri	= $this->input->post('status_santri');
		$alamat_santri	= $this->input->post('alamat_santri');
		$nama_ortu		= $this->input->post('nama_ortu');
		// $no_hp_ayah		= $this->input->post('nope_ayah');
		// $nama_ibu		= $this->input->post('nama_ayah');
		// $no_hp_ibu		= $this->input->post('nope_ibu');
		$no_hp_ortu		= $this->input->post('nope_ortu');
		$alamat_ortu	= $this->input->post('alamat_ortu');
		// $nama_wali 		= $this->input->post('nama_wali');
		// $nope_wali 		= $this->input->post('nope_wali');
		// $alamat_wali 	= $this->input->post('alamat_wali');
		$tanggal_masuk_pondok	= $this->input->post('tgl_masuk');
		$tahun_masuk		=$this->input->post('tahun_masuk');

		// $data = array(
		// 	'nama_ayah'			=> $nama_ayah,
		// 	// 'nope_ayah' 		=> $no_hp_ayah,
		// 	'nama_ibu'			=> $nama_ibu,
		// 	// 'nope_ibu' 			=> $no_hp_ibu,
		// 	'nope_ortu'			=> $no_hp_ortu,
		// );
		// $this->db->insert('ortu', $data);
		// $id_ortu = $this->db->insert_id();

		$data = array(
			// 'id_santri' 		=> $id_santri,
			'nama_santri' 		=> $nama_santri,
			'nis'		=> $nis,
			// 'id_kelas'			=> $id_kelas,
			'tempat_lahir' 		=> $tempat_lahir,
			'tanggal_lahir'		=> $tanggal_lahir,
			'gender'			=> $jenis_kelamin,
			'status_santri' 	=> $status_santri,
			'alamat_santri' 	=> $alamat_santri,
			'nama_ortu'			=> $nama_ortu,
			// 'nama_ibu'			=> $nama_ibu,
			'nope_ortu'			=> $no_hp_ortu,
			'alamat_ortu'		=> $alamat_ortu,
			// 'nama_wali'			=> $nama_wali,
			// 'nope_wali'			=> $nope_wali,
			// 'alamat_wali'		=> $alamat_wali,
			'tgl_masuk' 		=> $tanggal_masuk_pondok,
			'tahun_masuk'		=> $tahun_masuk
		);

		// echo "<pre>";
		// print_r($data);
		// exit;

		$this->db->insert('santri', $data);
		$this->session->set_flashdata('santri', '<div class="alert alert-success alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-check-circle"></i>
			  Data berhasil ditambahkan!
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>');
		redirect('admin/data_santri');
	}

	//public function edit($id)
	//{
	//	$where = array('id_santri' => $id);
	//	$data['santri'] = $this->model_santri->edit_santri($where, 'santri')->result();
	//	$this->load->view('templates_admin/header');
	//	$this->load->view('templates_admin/sidebar');
	//	$this->load->view('admin/edit_santri');
	//	$this->load->view('templates_admin/footer');
	//}

	public function update_santri()
	{
		$id_santri 	 	= $this->input->post('id_santri');
		$nis	    = $this->input->post('nis');
		$nama_santri 	= $this->input->post('nama_santri');
		$kelas_santri	= $this->input->post('id_kelas');
		$status_santri	= $this->input->post('status_santri');
		$tanggal_masuk  = $this->input->post('tgl_masuk');
		$tanggal_keluar = $this->input->post('tgl_keluar');
		$nama_ortu		= $this->input->post('nama_ortu');
		// $nama_ibu		= $this->input->post('nama_ibu');
		$nope_ortu		= $this->input->post('nope_ortu');
		$alamat_ortu	= $this->input->post('alamat_ortu');
		// $nama_wali 		= $this->input->post('nama_wali');
		// $nope_wali 		= $this->input->post('nope_wali');
		// $alamat_wali 	= $this->input->post('alamat_wali');

		$data = array(
			'id_santri' 		=> $id_santri,
			'nis' 		=> $nis,
			'nama_santri' 		=> $nama_santri,
			'id_kelas' 			=> $kelas_santri,
			'status_santri' 	=> $status_santri,
			'tgl_masuk' 		=> $tanggal_masuk,
			'tgl_keluar'		=> $tanggal_keluar,
			'nama_ortu'			=> $nama_ortu,
			// 'nama_ibu'			=> $nama_ibu,
			'nope_ortu'			=> $nope_ortu,
			'alamat_ortu'		=> $alamat_ortu,
			// 'nama_wali'			=> $nama_wali,
			// 'nope_wali'			=> $nope_wali,
			// 'alamat_wali'		=> $alamat_wali,
		);

		$where = array(
			'id_santri' => $id_santri
		);

		$this->model_santri->update_santri($where, $data, 'santri');
		$this->session->set_flashdata('santri', '<div class="alert alert-success alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diupdate!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_santri');
	}

	public function naik_kelas(){
		
	}

	public function hapus_santri($id_santri)
	{
		$where = array('id_santri' => $id_santri);
		$this->db->delete('santri', $where);
		$this->session->set_flashdata('santri', '<div class="alert alert-success alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-trash-alt"></i>
  				Data berhasil dihapus!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_santri');
	}

	public function detail_santri($id)
	{
		$data['santri'] = $this->model_santri->tampil_data()->result();

		$this->load->model('model_santri');
		$detail_santri = $this->model_santri->detail_santri($id);
		$data['detail_santri'] = $detail_santri;

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_santri', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_history_kelas()
	{
		$id_santri 	= $this->input->post('id_santri');
		$id_kelas 	= $this->input->post('id_kelas');
		$tahun 		= $this->input->post('tahun');

		$this->db->update('santri', ['id_kelas' => $id_kelas], ['id_santri' => $id_santri]);

		$data = [
			'id_santri'	=> $id_santri,
			'id_kelas'	=> $id_kelas,
			'tahun'		=> $tahun,
		];

		$where = [
			'id_santri'	=> $id_santri,
			'tahun'		=> $tahun,
		];

		$cek_history = $this->db->get_where('history_kelas', $where)->num_rows();
		if($cek_history > 0 ){
			$this->db->update('history_kelas', $data, $where);
		}else{
			$this->db->insert('history_kelas', $data);
		}

		$this->session->set_flashdata('santri', '
			<script type="text/javascript">
				alert("Sukses kelas santri berhasil diubah");
			</script>
		');
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
}