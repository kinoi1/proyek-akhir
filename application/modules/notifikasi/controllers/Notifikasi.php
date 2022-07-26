<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi extends MY_Controller {

  public function notif($id){
    $user = $this->session->userdata('role');
    $result = $this->db->query("SELECT * FROM tb_notifikasi where id=".$id)->row();
    
    if ($user == "unit") {
      $this->db->set('status', 1);
      $this->db->where('id', $id);
      $this->db->update('tb_notifikasi');
      redirect('pengajuan/pengajuan/DaftarPengajuan');
    }else {
      $this->load->view('template/404');
    }
  }
}
