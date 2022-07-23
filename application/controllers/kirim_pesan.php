<?php
class Kirim_pesan extends CI_Controller
{
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
            $this->session->set_flashdata('notif_pembina', '<div class="alert alert-success alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-trash-alt"></i>
  				Berhasil Kirim Pesan!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_pembina');
        } else{
            $this->session->set_flashdata('notif_pembina', '<div class="alert alert-danger alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-trash-alt"></i>
  				Nomor Tidak Terdaftar!
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>');
		redirect('admin/data_pembina');;
        }
    }
}