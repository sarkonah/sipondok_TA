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
    
   //  public function coba(){
   //    https://api.whatsapp.com/send/?phone=6285784018007&text&type=phone_number&app_absent=0
   //  }

   private function send_wa($phone, $message){
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