<?php

class Login extends CI_Controller{

    public function index()
    { 
         
        $this->load->view('templates_admin/header');
        $this->load->view('form_login');
        $this->load->view('templates_admin/footer');        
    }

	public function login_user()
	{
	    
		$this->form_validation->set_rules('email', 'email', 'required', ['required' => 'Email wajib diisi!']);
		$this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi!']);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates_admin/header');
            $this->load->view('form_login');
            $this->load->view('templates_admin/footer');
		} else {
            $auth = $this->model_login->cek_login();
            
			if ($auth == FALSE) {
				$this->session->set_flashdata('pesan_login', '<div class="alert alert-danger alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
			        Password Anda Salah!
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		            <span aria-hidden="true">&times;</span>
	            </button>
	            </div>');
				redirect('login');
			} else {
                
				$this->session->set_userdata('nama', $auth->nama);
				$this->session->set_userdata('id_user', $auth->id_user);
				$this->session->set_userdata('email', $auth->email);
				$this->session->set_userdata('hak_akses', $auth->hak_akses);
				

				switch ($auth->hak_akses) {
					case 'admin':
						redirect('admin/data_santri');
						break;
					case 'walikelas':
						redirect('guru/data_kelas');
						break;
                    case 'pembina':
                        redirect('dashboard');
                        break;
                    case 'ortu':
                        redirect('ortu/santri');
                        break;
					default:
						break;
				}
			}
		}
	
    }
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}