<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BagKeuangan extends MY_Controller {

  public function index(){

      $data['title'] = " Tampilan Awal";
      $this->load->view('template/header');
      $this->load->view('template/navbar');
      $this->load->view('template/unit/sidebar');
      $this->load->view('bagKeuangan/dashboard',$data);
      $this->load->view('template/footer');
      $this->load->view('footerAdd');
  }

}
