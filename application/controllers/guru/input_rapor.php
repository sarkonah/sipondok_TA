<?php

class input_rapor extends CI_Controller
{
    public function index()
    {
        $data['mapel'] = $this->model_input_rapor->tampil_data()->result();
        $data['santri'] = $this->model_santri->tampil_data()->result();
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar');
        $this->load->view('guru/input_rapor', $data);
        $this->load->view('templates_guru/footer');
    }

    public function update_input_rapor()
    {
        $id_mapel              = $this->input->post('id_mapel');
        $nilai                 = $this->input->post('nilai');

        $data = array(
            'id_mapel' => $id_mapel,
            'nilai' => $nilai

        );

        $this->model_input_rapor->update_input_rapor($data, 'mapel');
        $this->session->set_flashdata('popup_user', '<div class="alert alert-success alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-check-circle"></i>
              Data berhasil diupdate!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect('guru/kelas');
    }


    public function tambah()
    {
        $id_santri          = $this->input->post('id_santri');
        $id_kelas          = $this->input->post('id_kelas');
        $tahun          = $this->input->post('tahun');
        $data = array();
        foreach ($_POST['nilai'] as $key => $val) {
            $data = array(
                'nilai' => $_POST['nilai'][$key],
                'id_mapel' => $_POST['id_mapel'][$key],
                'id_santri'     => $id_santri,
                'id_kelas'  => $id_kelas,
                'tahun'     => $tahun,
            );
            $cek = array(
                'id_mapel' => $_POST['id_mapel'][$key],
                'id_santri'     => $id_santri,
                'id_kelas'  => $id_kelas,
                'tahun'     => $tahun,
            );
            $ada = $this->db->get_where('rapor', $cek)->row()->id_rapor;
            if ($ada) {
                $this->db->update('rapor', $data, array('id_rapor' => $ada));
            } else {
                $this->db->insert('rapor', $data);
            }
        }
        // $this->db->insert_batch('rapor', $data);

        $this->session->set_flashdata('message_nominator', '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
            <script type ="text/JavaScript">  
            swal("Sukses","Nilai berhasil disimpan","success")  
            </script>');
        redirect('guru/data_kelas');
    }
}
