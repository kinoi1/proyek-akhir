<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends MY_Controller
{

  public function __construct(){
      parent::__construct();
      $this->load->model('M_admin');
  }

  public function DataUser(){

    $this->load->view('template/header');
    $this->load->view('template/navbar');
    $this->load->view('template/sidebar');
    $data['tes'] = $this->M_admin->daftarakun();
    $this->load->view('regis',$data);
    $this->load->view('template/footer');
  }
}
