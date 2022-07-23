<?php

class Model_login extends CI_Model
{
	public function cek_login()
	{
		$email		= set_value('email');
		$password	= set_value('password');

		$this->input->post('email', $email);
		$this->input->post('password', $password);

		$cek  = $this->db->get_where('user', ['email' => $email]);

		if ($cek->num_rows() > 0) {
			$hasil = $cek->row();
            $pwd1 = md5($password);
            $pwd2 = $hasil->password;
            if($pwd1 == $pwd2){
                return $hasil;
            } else {
                return false;
            }
		} else {
			$this->session->set_flashdata('pesan_login', '<div class="alert alert-danger alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
			        Email Tidak Ditemukan!
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
	            </button>
	            </div>');
			redirect('login');
		}
	}
	
}