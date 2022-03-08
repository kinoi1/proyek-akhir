<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormLoop extends MY_Controller {
    public function index(){
        $data['title'] = 'test formloop';
        $this->load->view('form_loop',$data);

    }

    public function post()
    {
      
      $a = $this->input->post('first_name');
      $b = $this->input->post('last_name');
      if ($a[0] !== null) 
      {
        for ($i=0; $i<count($a); $i++) 
        {
          $data = [
            'first_name'=>$row,
            'last_name'=>$b[$i],
          ];
          
          $insert = $this->db->insert('biodata', $data);
          if ($insert) {
            $i++;
          }
        }
      }
     
      die();
      $arr['success'] = true;
      $arr['notif']  = '<div class="alert alert-success">
        <i class="fa fa-check"></i> Data Berhasil Disimpan
      </div>';
      return $this->output->set_output(json_encode($arr));
  
    }
}