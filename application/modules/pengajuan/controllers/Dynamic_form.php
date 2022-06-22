<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dynamic_form extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tes');
    }
    public function index()
    {
        $this->load->view('dynamic_form');
        $this->load->view('template/footer');
    }

    public function save_detail()
    {
        $request = $this->input->post();
        $data_arr = array();
        for ($m = 1; $m <= $request['license_count']; $m++) {
            $data_arr = array(
                'nama_akun' => $request['nama_akun' . $m],
                'nominal' => $request['nominal' . $m],
            );
            $result = $this->db->insert('dynamic_form', $data_arr);
        }
        print_r($data_arr);
        die();
        if ($result) {
            echo '<script>
            alert("data inserted successfully");
            </script>';
        }
        redirect('pengajuan/dynamic_form');
    }
    public function tampil(){
        $data['data_tes'] = $this->M_tes->getdata();
        $this->load->view('tes',$data);
    }
}
