<?php

class data_walikelas extends CI_Controller{

    public function index()
    {
       $data['guru'] = $this->model_guru->tampil_data()->result();
	  
	//    $data['list_guru']    = $this->model_guru->list_guru();
	//    $data['list_walikelas']    = $this->model_guru->list_walikelas();
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('admin/walikelas', $data);
       $this->load->view('templates_admin/footer');
    }
	
    public function tambah_guru(){
        $nama_lengkap 	= $this->input->post('nama_guru');
		$domisili	    = $this->input->post('dom_guru');
		$no_hp	        = $this->input->post('nope_guru');
		
        $data = array(
			'nama_guru' 		=> $nama_lengkap,
			'dom_guru' 		    => $domisili,
			'nope_guru' 		=> $no_hp,
			
        );
       // print_r($data);
        //exit;
        $this->db->insert('guru', $data);
		$this->session->set_flashdata('staff', '<div class="alert alert-success alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-check-circle"></i>
			  Data berhasil ditambahkan!
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>');
		redirect('admin/data_walikelas');
        }
        
    // public function edit($id_guru)
	// { 
	// 	$where = array('id_guru' =>$id_guru);
	// 	$data['guru'] = $this->model_guru->edit_walikelas($where, 'guru')->result();
	// 	$this->load->view('templates_admin/header');
	// 	$this->load->view('templates_admin/sidebar');
	// 	$this->load->view('admin/edit_walikelas', $data);
	// 	$this->load->view('templates_admin/footer');
	// }

	public function update_guru()
	{
		$id_guru 		= $this->input->post('id_guru');
		$nama_lengkap	= $this->input->post('nama_guru');
		$domisili		= $this->input->post('dom_guru');
		$no_hp			= $this->input->post('nope_guru');

		$data = array(
			'id_guru' 			=> $id_guru,
			'nama_guru' 		=> $nama_lengkap,
			'dom_guru'			=> $domisili,
			'nope_guru'			=> $no_hp,
		);

		$where = array(
			'id_guru' => $id_guru
		);

		$this->model_guru->update_guru($where, $data, 'guru');
		$this->session->set_flashdata('staff', '<div class="alert alert-success alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diupdate!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_walikelas');
	}
	
	// public function detail_walikelas($id){
	// 	$data['guru'] = $this->model_guru->tampil_data()->result();
		
	// 	$this->load->model('model_guru');
	// 	$detail_walikelas = $this->model_guru->detail_walikelas($id);
	// 	$data['detail_walikelas'] = $detail_walikelas;
	// }

	public function hapus_guru($id_guru){
        $where = array('id_guru' => $id_guru);
		$this->db->delete('guru', $where);
		$this->session->set_flashdata('staff','<div class="alert alert-success alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-trash-alt"></i>
  				Data berhasil dihapus!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_walikelas');
    }
}