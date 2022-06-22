<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsulanKegiatan extends MY_Controller {


    public function __construct() {
      parent::__construct();
      $this->load->model('M_usulan');
    }

    public function index(){

      $usulan = $this->M_usulan->getUsulan();
      $data = array('usulan'=>$usulan);
      //print_r($pengajuan); die();
      $this->load->view('template/perencanaan/header');
      $this->load->view('template/perencanaan/navbar');
      $this->load->view('template/perencanaan/sidebar');
      $this->load->view('perencanaan/dashboardUsulan',$data);
      $this->load->view('template/perencanaan/footer');
    }

    public function Usulanbaru(){
      $data['title'] = "Usulan Kegiatan Baru";
      $this->load->view('template/perencanaan/header',$data);
      $this->load->view('template/perencanaan/navbar');
      $this->load->view('template/perencanaan/sidebar');
      $this->load->view('perencanaan/usulanbaru',$data);
      $this->load->view('template/perencanaan/footer');
      $this->load->view('perencanaan/footertambahan');


    }


    public function InsertUsulan(){

      $kode = $this->input->post('kode');
      $program_kegiatan = $this->input->post('program_kegiatan');
      $jenis_kegiatan = $this->input->post('jenis_kegiatan');
      $tanggal = $this->input->post('tanggal');
      $volume = $this->input->post('volume');
      $satuan = $this->input->post('satuan');
      $harga_satuan = $this->input->post('harga_satuan');
      $total = $this->input->post('total');


      $config['upload_path'] = './assets/file/';
      $config['allowed_types'] = 'pdf';
      $config['max_size']      = 1024;
      $this->load->library('upload',$config);
      if(!$this->upload->do_upload('fileusulan')){
        $error = array('error'=> $this->upload->display_errors());
        $this->session->set_flashdata('error',$error['error']);
       redirect('perencanaan/UsulanKegiatan/Usulanbaru/','refresh');

      }else {
        $file = $this->upload->data('file_name');
        $data_usulan = array(
          'kode' => $kode,
          'program_kegiatan' => $program_kegiatan,
          'jenis_kegiatan' => $jenis_kegiatan,
          'tanggal' => $tanggal,
          'volume' => $volume,
          'satuan' => $satuan,
          'harga_satuan' => $harga_satuan,
          'total' => $total,
          'fileusulan' => $file
        );
        $this->db->insert('tb_usulan',$data_usulan);
        redirect('perencanaan/usulankegiatan/');
      }

    }

    
}
