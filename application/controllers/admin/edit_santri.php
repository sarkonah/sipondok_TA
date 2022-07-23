<?php

class edit_santri extends CI_Controller{

    public function index()
    {
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('admin/edit_santri');
       $this->load->view('templates_admin/footer');
    }
	
    public function edit($id)
	{ 
		$where = array('id' =>$id);
		$data['santri'] = $this->model_santri->edit_santri($where, 'santri')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_santri');
		$this->load->view('templates_admin/footer');

	}

	public function update(){ 
		$id 	 		= $this->input->post('id');
		$nis_santri	    = $this->input->post('nis_santri');
		// $event 		= $this->input->post('event');
		$nama_santri 	= $this->input->post('nama_santri');
		$kelas_santri	= $this->input->post('kelas_santri');
		$status_santri	= $this->input->post('status_santri');
		$tgl_masuk  	= $this->input->post('tgl_masuk');
		

		$data = array(
			'nis_santri' 		=> $nis_santri,
			// 'event' 		=> $event, 
			'nama_santri' 		=> $nama_santri,
			'kelas_santri' 		=> $kelas_santri,
			'status_santri' 		=> $status_santri, 
			'tgl_masuk' 		=> $tgl_masuk,
			
		);

		$where = array(
			'id' => $id 
		);

		$this->model_santri->update_santri($where,$data, 'santri');
		$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
  				Data berhasil diupdate!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_santri'); 
	}
}