<?php

class Model_janji extends CI_Model{
    // public function tampil_data(){
    //     $this->db->select('*');
    //     $this->db->from('janji');
    //     $this->db->join('guru','guru.id_guru=janji.id_guru');
    //     $this->db->join('pembina','pembina.id_pembina=janji.id_pembina');
    //     $query = $this->db->get ();
    //     return $query->result ();
    // }
    
    public function tampil_data()
    {
        // $this->db->select('*');
        // $this->db->from('guru');
        // $this->db->join('pembina','pembina.status=guru.status');
        // $query = $this->db->get();
        // return $query->result();
        return $this->db->get('pembina');
    }
}
?>