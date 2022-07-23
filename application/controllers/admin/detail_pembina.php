<?php

class detail_pembina extends CI_Controller{

    public function index()
    {
     $data['pembina'] = $this->model_pembina->tampil_data()->result();
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('admin/detail_pembina', $data);
       $this->load->view('templates_admin/footer');
    }
   
}