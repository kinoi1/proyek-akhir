<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
    public function index(){


        $this->load->view('login_page');

    }

    public function Auth() {
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $user = $this->db->get_where('user',['email' => $email])->row_array();
      if (password_verify($password,$user['password'])) {
        $data = [
          'nama' => $user['name'],
          'email' => $user['email'],
          'role' => $user['role']
        ];
        $this->session->set_userdata($data);
        if($user['role'] == "admin"){
          redirect('admin');
        }else if($user['role'] == "unit"){
        redirect('pengajuan');
      }else if($user['role'] == "bagkeuangan"){
        redirect('bagkeuangan');
      }else if($user['role'] == "ppspm"){
        redirect('approval');
      }else if($user['role'] == "ppk"){
        redirect('approval');
      }
        print_r($data);
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Wrong email or password!
      </div>');
      redirect('login/');
    }

    }
}
