<?php

class tambah_pembina extends CI_Controller{

    public function index()
    {
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('admin/tambah_pembina');
       $this->load->view('templates_admin/footer');
    }
    public function tambah_pembina(){ 
		$id 	 		= $this->input->post('id_pembina');
		$nama_pembina 	= $this->input->post('nama_pembina');
		$status_pembina	= $this->input->post('status_pembina');
        
		$data = array(
            'nama_pembina' 		=> $nama_pembina,
			'status_pembina' 	=> $status_pembina, 
            
		);

		$where = array(
			'id_pnb' => $id 
		);
        $where = array('id_pembina' => $id);
		$this->model_pembina->update_pembina($where,$data, 'pembina');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diupdate!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_pembina'); 
	}
}