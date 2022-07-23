<?php

class detail_santri extends CI_Controller{

    public function index()
    {
     $data['santri'] = $this->model_santri->tampil_data()->result();
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('admin/detail_santri', $data);
       $this->load->view('templates_admin/footer');
    }
   
}