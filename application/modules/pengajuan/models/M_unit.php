<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_unit extends CI_Model {

    public function getDaftarPengajuan($unit){
      $this->db->select('*');
      $this->db->from('tb_pengajuan');
      $this->db->join('tb_approval', 'tb_approval.id_pengajuan = tb_pengajuan.id_pengajuan');
      $this->db->where('tb_pengajuan.nama_unit', $unit);
      $query = $this->db->get('');
      return $query->result_array();
      //return $this->db->get_where('tb_pengajuan',['nama_unit' => $unit])->result_array();
    }

    public function getsbm(){
      $query = $this->db->query("SELECT * FROM tb_sbm ORDER BY nama_sbm ASC");
      return $query->result();
    }
    public function getsingkatan(){
      $query = $this->db->query("SELECT * FROM tb_satuan ORDER BY singkatan ASC");
      return $query->result();
    }
}
