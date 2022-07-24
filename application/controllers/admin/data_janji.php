<?php

class Data_janji extends CI_Controller{

    public function index()
    {
       $data['pembina'] = $this->model_janji->tampil_data()->result();
    //    $data['guru'] = $this->model_janji->tampil_data()->result();
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('admin/janji', $data);
       $this->load->view('templates_admin/footer');
    }
    
    public function send_message()
    {
        $nomor = $this->input->post('nomor');
        $pesan = $this->input->post('pesan');

        $data = [
            'number' => $nomor,
            'message' => $pesan
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "http://localhost:5000/send-message");
        curl_setopt($ch, CURLOPT_POST, 1);

        // In real life you should use something like:
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            http_build_query($data)
        );

        // Receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // execute!
        $response = json_decode(curl_exec($ch));
        curl_close($ch);
        
        if($response->status == 'true'){
            $this->session->set_flashdata('pesan_janji', 
                '<div class="alert alert-success alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-trash-alt"></i>
  				    Berhasil Kirim Pesan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
		header('Location: ' . $_SERVER['HTTP_REFERER']);        
    } else{
            $this->session->set_flashdata('pesan_janji', 
                '<div class="alert alert-danger alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-trash-alt"></i>
  				    Nomor Tidak Terdaftar!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
		header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

   public function send_wa($phone, $message){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://nusagateway.com/api/send-message.php',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('token' => 'Masukkan Token WA disini','phone' => $phone,'message' => $message),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $content = json_decode($response);
        $status = $content->result;
        if($status == 'true'){
            return true;
        }else{
            return false;
        
        }
    }

    public function kirim_janji(){
        $no_hp = $this->input->post('no_hp');
        $message = 'ini test admin';
        $this->send_wa($no_hp, $message);
    }
}