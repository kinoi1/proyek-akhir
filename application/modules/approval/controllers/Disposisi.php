<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disposisi extends MY_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_approval');
    is_logged_in();
  }

  public function index(){
    $data['nama'] = $this->session->userdata('nama');
    $nama = $data['nama'];
    $data['role'] = $this->input->post('role');
    $data['title'] = " Tampilan Awal";
    $data['dispo'] = $this->db->query("SELECT *FROM tb_disposisi WHERE nama='$nama'")->result();
    $this->load->view('template/header',$data);
    $this->load->view('template/navbar',$data);
    $this->load->view('template/unit/sidebar');
    $this->load->view('approval/daftar_disposisi',$data);
    $this->load->view('template/footer');
  }

  public function detail($id){

    $data['nama'] = $this->session->userdata('nama');
    $data['role'] = $this->input->post('role');
    $data['title'] = " Tampilan Awal";
    $data['disposisi'] = $this->db->query("SELECT *FROM tb_disposisi WHERE id_pengajuan ='$id'")->row();
    $this->load->view('template/header',$data);
    $this->load->view('template/navbar',$data);
    $this->load->view('template/unit/sidebar');
    $this->load->view('approval/detail',$data);
    $this->load->view('template/footer');
  }

public function disposisites($id){
  $data['nama'] = $this->session->userdata('nama');
  $data['role'] = $this->session->userdata('role');
  $data['title'] = " Tampilan Awal";
  $data['id'] = $id;
  $this->load->view('template/header',$data);
  $this->load->view('template/navbar',$data);
  $this->load->view('template/unit/sidebar');
  $this->load->view('approval/tambah_disposisi',$data);
  $this->load->view('template/footer');
}

public function AksiTambahDispo(){
  $nama = $this->session->userdata('nama');
  $sifat  = $this->input->post('sifat');
  $agenda  = $this->input->post('agenda');
  $nosurat  = $this->input->post('nosurat');
  $tglsurat  = $this->input->post('tglsurat');
  $asalsurat  = $this->input->post('asalsurat');
  $perihal  = $this->input->post('perihal');
  $diteruskan  = $this->input->post('diteruskan');
  $informasi    = $this->input->post('informasi');
  $id_pengajuan  = $this->input->post('id_pengajuan');
  $data_dispo = array(
    'id_pengajuan'=> $id_pengajuan,
    'nama'       => $nama,
    'sifat'      => $sifat,
    'no_agenda'  => $agenda,
    'no_surat'   => $nosurat,
    'tgl_surat'   => $tglsurat,
    'asal_surat'  => $asalsurat,
    'perihal'    => $perihal,
    'diteruskan' => $diteruskan,
    'informasi'  => $informasi
  );

   $result = $this->db->insert('tb_disposisi',$data_dispo);
   if ($result = 1) {
     $user = $this->session->userdata('nama');
     $notifikasi = $this->M_approval->getDataPengajuan($id_pengajuan);
     $data = $notifikasi->nama_pengajuan;
     $nama_unit = $notifikasi->nama_unit;

     $this->session->set_flashdata('success','<div class="alert alert-success"> Berhasil Validasi RAB </div>');

     $msg = $user."Mengirimkan Disposisi Pengajuan ".$data." Kepada anda";

     $data_notif = array(
       'id_pengajuan' => $id_pengajuan,
       'nama' => $user,
       'message' => $msg,
       'tujuan' => $diteruskan,
     );
       $this->db->insert('tb_notifikasi',$data_notif);
     redirect('Approval/Approval/daftarapprove');
   }else {
     $this->session->set_flashdata('error','<div class="alert alert-danger"> Berhasil Validasi RAB </div>');
     redirect('Approval/Disposisi/disposisites',$id_pengajuan);
   }
}
}
