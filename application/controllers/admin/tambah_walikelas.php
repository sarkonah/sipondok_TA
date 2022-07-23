<?php

class tambah_walikelas extends CI_Controller{

    public function index()
    {
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('admin/tambah_walikelas');
       $this->load->view('templates_admin/footer');
    }
    public function tambah_walikelas(){ 
		$id 	 		= $this->input->post('id_guru');
		$nama_guru 		= $this->input->post('nama_guru');
		$kelas			= $this->input->post('kelas');
        
		

		$data = array(
            'nama_guru' 		=> $nama_guru,
			'kelas' 	=> $kelas, 
            
		);

		$where = array(
			'id_gru' => $id 
		);
        $where = array('id_guru' => $id);
		$this->model_guru->update_guru($where,$data, 'guru');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diupdate!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_walikelas'); 
	}
}