<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengajuanPP extends MY_Controller {


    public function __construct() {
      parent::__construct();

      $this->load->model('M_tes');
      $this->load->model('M_unit');
    }

    public function index(){

      $data1 = $this->M_tes->getPengajuan()->result_array();
      $data = array('pengajuan'=>$data1);

      $this->load->view('template/header');
      $this->load->view('template/navbar');
      $this->load->view('template/sidebar');
      $this->load->view('dashboard',$data);
      $this->load->view('template/footer');
    }

    public function TambahConfig(){

        $data['tes'] = $this->M_unit->getsbm();
        $this->load->view('template/header');
	    	$this->load->view('template/navbar');
	    	$this->load->view('template/sidebar');
        $this->load->view('tambah_config',$data);
        $this->load->view('template/footer');
        $this->load->view('bagKeuangan/footbagkeuangan');
    }

    public function TambahSBM(){
        $data['datakategori'] = $this->M_tes->dataPengajuan();
        $this->load->view('template/header');
	    	$this->load->view('template/navbar');
	    	$this->load->view('template/sidebar');
        $this->load->view('tambah_SBM', $data);
        $this->load->view('template/footer');
        $this->load->view('tes');
    }

    public function getSBMById(){
      $id = $this->input->post('kategori');
      $data = $this->M_tes->getSBM($id);
        echo json_encode($data);
    }


    public function save_detail()
    {

        $request = $this->input->post();
         

        $data_arr = array();
        for ($m = 1; $m <= $request['license_count']; $m++) {
          $data_arr = array(
              'kode_sbm' => $request['kode_sbm' . $m],
              'kategori' => $request['kategori' . $m],
              'sub_kategori' => $request['sub_kategori' . $m],
              'nama_sbm' => $request['nama_sbm' . $m],
              'satuan' => $request['satuan' . $m],
              'nominal' => $request['nominal' . $m],
          );
          print_r($data_arr);
          die();
            $result = $this->db->insert('tb_sbm', $data_arr);

        }

        // echo "<pre>";
         //print_r($data_arr);die;

        if ($result) {
            echo '<script>
            alert("data inserted successfully");
            </script>';
        }
        redirect('admin/dynamic_form');

    }

    public function tess(){
      $this->load->view('template/header');
      $this->load->view('template/navbar');
      $this->load->view('template/sidebar');
      $this->load->view('tes');
      $this->load->view('template/footer');

    }
}
