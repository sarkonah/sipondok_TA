<?php

use \Dompdf\Dompdf;

class Data_rapor extends CI_Controller
{

    public function index()
    {
        $data['list_tahun'] = $this->model_rapor->tahun()->result_array();
        // echo print_r($data['list_tahun']);
        $data['tahun'] = $this->input->post('tahun');
        if ($data['tahun'] == "") {
            $data['tahun'] = $data['list_tahun'][0]['tahun'];
        }

        $where = array(
            'tahun' => $data['tahun']
        );
        $data['rapor'] = $this->model_rapor->tampil_data_rapor($where)->result();
        // echo "<pre>";
        // print_r($data);
        // exit;
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/rapor', $data);
        $this->load->view('templates_admin/footer');
    }

    public function detail_rapor($id, $tahun)
    {
        $rapor = $this->db->get_where('santri', array('id_santri' => $id))->row();
        $kelas = $this->db->get_where('history_kelas', array('id_santri' => $id))->row();
        $real_kelas =  $this->db->get_where('kelas', array('id_kelas' => $kelas->id_kelas))->row();

        $where = array(
            'history_kelas.id_santri'   => $id,
            'rapor.tahun'       => $tahun
        );
        $id_kelas = $rapor->id_kelas;
        // $nama_kelas = $this->db->get_where('kelas', array('id_kelas' => $id_kelas))->row()->nama_kelas;
        $data = [
            'rapor' => $rapor,
            'mapel' => $this->model_rapor->getMapel1($where),
            'kelas' => $real_kelas->nama_kelas,
            'sum'   => $this->model_rapor->getSum1($where),
            'avg'   => $this->model_rapor->getAvg1($where),
        ];


        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Laporan.pdf";
        $this->pdf->load_view('admin/pdf', $data);







        // $this->load->view('templates_admin/header');
        // $this->load->view('templates_admin/sidebar');
        // $this->load->view('admin/detail_rapor', $data);
        // $this->load->view('templates_admin/footer');
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['rapor'] = $this->model_rapor->tampil_data()->result();
        $this->load->view('print_rapor', $data);

        // setting paper
        $paper_size = 'A5';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        $html             = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("rapor_santri.pdf", array('Attachment' => 0));
    }
}