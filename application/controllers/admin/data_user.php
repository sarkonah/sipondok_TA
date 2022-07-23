<?php

class Data_user extends CI_Controller{

    public function index()
    {
       $data['user'] = $this->model_user->tampil_data()->result();
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('admin/user', $data);
       $this->load->view('templates_admin/footer');
    }

    public function tambah_user(){
        $nama_lengkap 	= $this->input->post('nama');
        $email 	        = $this->input->post('email');
        $password 	    = md5($this->input->post('password'));
        $hak_akses 	    = $this->input->post('hak_akses');

        $data = array(
           'nama' => $nama_lengkap,
           'email'  => $email,
           'password'=> $password,
           'hak_akses' => $hak_akses
        );
        
    //     echo "<pre>";
		// print_r($data);
		// exit;
        
        $this->db->insert('user', $data);
		$this->session->set_flashdata('popup_user', '<div class="alert alert-success alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-check-circle"></i>
			  Data berhasil ditambahkan!
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
	        </button>
	        </div>');
		redirect('admin/data_user');
    }

    public function hapus_user($id_user){
        $where = array('id_user' => $id_user);
		$this->db->delete('user', $where);
		$this->session->set_flashdata('popup_user','<div class="alert alert-success alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-trash-alt"></i>
  				Data berhasil dihapus!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_user');
    }

    // public function edit_user($id_user){
    //   $where = array('id_user' =>$id_user);
		//   $data['user'] = $this->model_user->edit_user($where, 'user')->result();
		//   $this->load->view('templates_admin/header');
		//   $this->load->view('templates_admin/sidebar');
		//   $this->load->view('admin/edit_user', $data);
		//   $this->load->view('templates_admin/footer');
    // }

    public function update_user(){ 
      $id_user 	 		  = $this->input->post('id_user');
      $nama_lengkap 	= $this->input->post('nama');
      $email 	        = $this->input->post('email');
      $password 	    = md5($this->input->post('password'));
      $hak_akses 	    = $this->input->post('hak_akses');

      $data = array(
      'id_user' => $id_user,
      'nama' => $nama_lengkap,
      'email'  => $email,
      'password'=> $password,
      'hak_akses' => $hak_akses
      );
  
      $where = array(
        'id_user' => $id_user
      );
  
    // echo "<pre>";
		// print_r($data);
		// exit;
    
      $this->model_user->update_user($where,$data, 'user');
      $this->session->set_flashdata('popup_user','<div class="alert alert-success alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-check-circle"></i>
            Data berhasil diupdate!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('admin/data_user'); 
    }
}