<?php

class tambah_kelas extends CI_Controller{

    public function index()
    {
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('admin/tambah_kelas');
       $this->load->view('templates_admin/footer');
    }
    public function tambah_kelas(){ 
		$id 	 		= $this->input->post('id_kelas');
		$kelas 			= $this->input->post('kelas');
		$nis_santri 	= $this->input->post('nis_santri');
        $nama_santri	= $this->input->post('nama_santri');
		

		$data = array(
            'kelas' 		=> $kelas,
			'nis_santri' 	=> $nis_santri, 
            'nama_santri' 	=> $nama_santri, 
			
		);

		$where = array(
			'id_kls' => $id 
		);
        $where = array('id_kelas' => $id);
		$this->model_kelas->update_kelas($where,$data, 'kelas');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diupdate!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_kelas'); 
	}
}