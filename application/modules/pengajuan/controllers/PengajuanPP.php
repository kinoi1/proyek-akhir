<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengajuanPP extends MY_Controller {



    public function index(){

        $this->load->view('template/header');
	    	$this->load->view('template/navbar');
	    	$this->load->view('template/sidebar');
        $this->load->view('form_pengajuan');
        $this->load->view('template/footer');


    }

    public function save_detail()
    {

        $request = $this->input->post();
         //print_r($request);die;

        $data_arr = array();
        for ($m = 1; $m <= $request['license_count']; $m++) {
          $data_arr = array(
              'nama_akun' => $request['nama_akun' . $m],
              'nominal' => $request['nominal' . $m],
          );
            $result = $this->db->insert('dynamic_form', $data_arr);

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
}
