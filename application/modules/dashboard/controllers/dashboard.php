<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
    public function __construct()
    {
      parent::__construct();
      // load session library
      $this->load->library('session');
      $this->load->helper('url');
      //mencegah peretas
      if(empty($this->session->userdata('role'))){
        redirect('login/akses_masuk');
      }
      $data = $this->session->userdata();
    }

    public function index(){
       $data = $this->session->userdata();
            // echo '<div class="row">';
            //  echo '<div class="col-12 col-sm-6 col-lg-3">';
            //    echo '<div class="card">';
            //      echo '<div class="card-body text-center">';
            //        echo' <div class="mb-2">Simple Sweet Alert</div>';
            //         echo '<button class="btn btn-primary" id="swal-1">Launch</button>';
            //       echo '</div>';
            //     echo '</div>';
            //   echo '</div>';

        if($data['role'] == "admin"){
          redirect('admin/admin');
            $data['title'] = 'Dashboard Admin';
            $this->load->view('template/header',$data);
            $this->load->view('template/navbar');
            $this->load->view('admin/sidebar_admin');
            $this->load->view('template/dashboard',$data);
            $this->load->view('template/footer');
          }elseif ($data['role'] == "unit"){
            $data['title'] = " Dashboard Unit";
            $this->load->view('template/header',$data);
            $this->load->view('template/navbar');
            $this->load->view('template/unit/sidebar');
            $this->load->view('unit/dashboard',$data);
            $this->load->view('template/footer');
            $this->load->view('footerAdd');
          }elseif ($data['role'] == "bagiankeuangan"){
            $data['title'] = 'Dashboard Bagian Keuangan';
            $this->load->view('template/header',$data);
            $this->load->view('template/navbar');
            $this->load->view('template/sidebar_bagiankeuangan');
            $this->load->view('template/dashboard_keuangan',$data);
            $this->load->view('template/footer');
          }
          elseif ($data['role'] == "kemahasiswaan"){
            $data['title'] = 'Dashboard PPSPM';
            $this->load->view('template/header',$data);
            $this->load->view('template/navbar');
            $this->load->view('template/unit/sidebar');
            $this->load->view('approver/dashboard',$data);
            $this->load->view('template/footer');
            $this->load->view('footerAdd');
          }
          elseif ($data['role'] == "kajur"){
            $data['title'] = 'Dashboard kajur';
            $this->load->view('template/header',$data);
            $this->load->view('template/navbar');
            $this->load->view('template/unit/sidebar');
            $this->load->view('approver/dashboard',$data);
            $this->load->view('template/footer');
            $this->load->view('footerAdd');
          }
          elseif ($data['role'] == "ppspm"){
            $data['title'] = 'Dashboard PPSPM';
            $this->load->view('template/header',$data);
            $this->load->view('template/navbar');
            $this->load->view('template/unit/sidebar');
            $this->load->view('approver/dashboard',$data);
            $this->load->view('template/footer');
            $this->load->view('footerAdd');
          }
          elseif ($data['role'] == "ppk"){
            $data['title'] = " Dashboard PPK";
            $this->load->view('template/header',$data);
            $this->load->view('template/navbar');
            $this->load->view('template/unit/sidebar');
            $this->load->view('approver/dashboard',$data);
            $this->load->view('template/footer');
            $this->load->view('footerAdd');
          }
    }
    public function logout()
    {
      $this->session->sess_destroy();
      redirect('login');
    }
}
