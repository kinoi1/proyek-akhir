<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function daftarakun(){
      $this->db->SELECT('*');
      $this->db->FROM('user');
      $query = $this->db->get();
      return $query->result();
    }
}
