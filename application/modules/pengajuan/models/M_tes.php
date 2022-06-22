<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tes extends CI_Model {

    public function getdata(){
       return $this->db->get('dynamic_form');
    }
    public function getPengajuan(){
      return $this->db->get('tb_pengajuan');
    }
    public function getconfig(){
      return $this->db->get('tb_sbm');
    }

    public function dataPengajuan(){
      $query = $this->db->query("SELECT * FROM dynamic_form ORDER BY kategori ASC");
      return $query->result();
    }
    public function getSBM($id){
      $query = $this->db->query("SELECT * FROM dynamic_form WHERE kategori = '$id' ORDER BY nama_akun ASC");
      return $query->result();
    }
}
