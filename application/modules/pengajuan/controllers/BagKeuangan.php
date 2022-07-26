<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BagKeuangan extends MY_Controller {

  public function __construct() {
    parent::__construct();

    $this->load->model('M_tes');
    $this->load->model('M_unit');
  }

  public function index(){
      $data['nama'] = $this->session->userdata('nama');
      $data['title'] = " Tampilan Awal";
      $data['role'] = $this->session->userdata('role');
      $this->load->view('template/header',$data);
      $this->load->view('template/navbar',$data);
      $this->load->view('template/unit/sidebar');
      $this->load->view('bagKeuangan/dashboard',$data);
      $this->load->view('template/footer');
      $this->load->view('footerAdd');
  }

  public function DaftarSBM() {
    $data['nama'] = $this->session->userdata('nama');
    $data['role'] = $this->session->userdata('role');
    $data['title'] = " Tampilan Awal";
    $data['dat'] = $this->load->M_tes->getconfig();
    $this->load->view('template/header',$data);
    $this->load->view('template/navbar',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('dasboard_sbm',$data);
    $this->load->view('template/footer');
  }

  public function TambahSBM(){
      $data['nama'] = $this->session->userdata('nama');
      $data['tes'] = $this->M_unit->getsbm();
      $data['title'] = " Tampilan Awal";
      $data['role'] = $this->session->userdata('role');
      $this->load->view('template/header',$data);
      $this->load->view('template/navbar',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('tambah_config',$data);
      $this->load->view('template/footer');
      $this->load->view('bagKeuangan/footbagkeuangan');
  }
  public function save_detail()
  {

      $request = $this->input->post();
      $kode = $this->input->post('kode_sbm');
      $kategori = $this->input->post('kategori');
      $sub_kategori = $this->input->post('sub_kategori');
      $nama_sbm = $this->input->post('nama_sbm');
      $satuan = $this->input->post('satuan');
      $nominal = $this->input->post('nominal');
      $data = array(
        'kode_sbm' => $kode,
        'kategori' => $kategori,
        'sub_kategori' => $sub_kategori,
        'nama_sbm' => $nama_sbm,
        'satuan' => $satuan,
        'nominal' => $nominal,
      );


      $this->db->insert('tb_sbm',$data);
      redirect('pengajuan/BagKeuangan/DaftarSBM');
  }

  public function getSBMById(){
    $id = $this->input->post('kategori');
    $data = $this->M_tes->getSBM($id);
      echo json_encode($data);
  }

}
