<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approval extends MY_Controller {
    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_approval');
      is_logged_in();
      $role = $this->session->userdata('nama');
      if($role == "unit"){
        redirect('template/template/');
      }{
      }
    }


public function index(){
  $data['nama'] = $this->session->userdata('nama');
  $data['title'] = " Tampilan Awal";
  $data['role'] = $this->session->userdata('role');
  $this->load->view('template/header',$data);
  $this->load->view('template/navbar',$data);
  $this->load->view('template/sidebar',$data);
  $this->load->view('approval/dashboard',$data);
  $this->load->view('template/footer');

}

public function daftarapprove(){
  $data['title'] = " Tampilan Awal";
  $data['role'] = $this->session->userdata('role');
  $data['nama'] = $this->session->userdata('nama');
  $nama = $this->session->userdata('nama');
  $role = $data['role'];
  if($role == "direktur"){
    $data['pengajuan'] = $this->M_approval->getValidasipengajuan($role,$nama);
    $data['pengajuan2'] = $this->M_approval->getValidasipengajuan2($role,$nama);
    $data['pengajuan3'] = $this->M_approval->getValidasipengajuan3($role,$nama);
  }else{
  $data['pengajuan'] = $this->M_approval->getpengajuan($role,$nama);
  $data['pengajuan2'] = $this->M_approval->getpengajuan2($role,$nama);
  $data['pengajuan3'] = $this->M_approval->getpengajuan3($role,$nama);
  $data['pengajuan4'] = $this->M_approval->getpengajuan4($role,$nama);

}
  $this->load->view('template/header',$data);
  $this->load->view('template/navbar',$data);
  $this->load->view('template/sidebar',$data);
  $this->load->view('approval/daftarpengajuan',$data);
  $this->load->view('template/footer');
}
public function ApproveKegiatan($id){
  $data['file_tor'] = $this->db->query("SELECT file_tor FROM tb_tor where id= ".$id)->row();
  $data['file_rab'] = $this->db->query("SELECT file_rab FROM tb_rab where id_pengajuan= ".$id)->row();
  $data['file_proposal'] = $this->db->query("SELECT file_proposal FROM tb_proposal where id_proposal= ".$id)->row();
  $data['id'] = $id;

  $data['nama'] = $this->session->userdata('nama');
  $data['validasi_rab'] = $this->db->query("SELECT id_rab FROM tb_rab WHERE id_pengajuan=".$id)->row();
  $data['validasi_tor'] = $this->db->query("SELECT id FROM tb_tor WHERE id=".$id)->row();

  $data['role'] = $this->session->userdata('role');
  $data['title'] = " Tampilan Awal";
  $data['rab'] = $this->M_approval->getrab($id);
  $data['row'] = $this->db->query("SELECT * FROM tb_tor WHERE id_pengajuan=".$id)->row();
  $this->load->view('template/header',$data);
  $this->load->view('template/navbar',$data);
  $this->load->view('template/sidebar',$data);
  $this->load->view('approval/approval',$data);
  $this->load->view('template/footer');
  $this->load->view('approval/tambahan',$data);

}
public function ApproveRabDirektur($id){
  //$data['file_tor'] = $this->db->query("SELECT file_tor FROM tb_tor where id= ".$id)->row();
  $data['file_rab'] = $this->db->query("SELECT file_rab FROM tb_rab where id_pengajuan= ".$id)->row();
  //$data['file_proposal'] = $this->db->query("SELECT file_proposal FROM tb_proposal where id_proposal= ".$id)->row();
  //print_r($data); die;
  $data['id'] = $id;
  $data['nama'] = $this->session->userdata('nama');
  $data['validasi_rab'] = $this->db->query("SELECT id_rab FROM tb_rab WHERE id_pengajuan=".$id)->row();
  $data['role'] = $this->session->userdata('role');
  $data['title'] = " Tampilan Awal";
  $data['rab'] = $this->M_approval->getrab($id);
  $data['tor'] = $this->M_approval->gettor($id);
  $this->load->view('template/header',$data);
  $this->load->view('template/navbar',$data);
  $this->load->view('template/sidebar',$data);
  $this->load->view('approval/approval',$data);
  $this->load->view('template/footer');
  $this->load->view('approval/tambahan',$data);
}
public function FastMode($id){

  $data['sticky_bar'] = "<div class='dropdown-menu-right' id='sticky-sidebar'>
  <div class='dropdown-menu dropdown-menu-right show' >
    <a href='#tor' class='dropdown-item has-icon'>
      <i class='far fa-user'></i> TOR
    </a>
    <a href='#rab' class='dropdown-item has-icon'>
      <i class='fas fa-bolt'></i> RAB
    </a>
    <a href='#file_tor' class='dropdown-item has-icon'>
      <i class='fas fa-cog'></i> File TOR
    </a>
    <a href='#file_rab' class='dropdown-item has-icon'>
      <i class='fas fa-cog'></i> File RAB
    </a>
    <a href='#file_proposal' class='dropdown-item has-icon'>
      <i class='fas fa-cog'></i> File Proposal
    </a>
    <a href='#validasi' class='dropdown-item has-icon'>
      <i class='fas fa-sign-out-alt'></i> Validasi
    </a>
  </div>
  </div>";
  $data['file_tor'] = $this->db->query("SELECT file_tor FROM tb_tor where id= ".$id)->row();
  $data['file_rab'] = $this->db->query("SELECT file_rab FROM tb_rab where id_pengajuan= ".$id)->row();
  $data['file_proposal'] = $this->db->query("SELECT file_proposal FROM tb_proposal where id_proposal= ".$id)->row();
  $data['id'] = $id;

  $data['nama'] = $this->session->userdata('nama');
  $data['validasi_rab'] = $this->db->query("SELECT id_rab FROM tb_rab WHERE id_pengajuan=".$id)->row();
  $data['validasi_tor'] = $this->db->query("SELECT id FROM tb_tor WHERE id=".$id)->row();

  $data['role'] = $this->session->userdata('role');
  $data['title'] = " Fast Mode";
  $data['rab'] = $this->M_approval->getrab($id);
  $data['row'] = $this->db->query("SELECT * FROM tb_tor WHERE id_pengajuan=".$id)->row();
  $this->load->view('template/header',$data);
  $this->load->view('template/navbar',$data);
  $this->load->view('template/sidebar',$data );
  $this->load->view('approval/Fastmode',$data);
  $this->load->view('template/footer');
  $this->load->view('approval/tambahan',$data);

}
public function AksiApprove($id){
  $title = $this->input->post('title');
  $deskripsi = $this->input->post('deskripsi');
  $val = $this->input->post('vallidasi');
  $this->form_validation->set_rules('validasi', 'Validasi', 'required');
  $validasi = $this->input->post('validasi');
  $role = $this->session->userdata('role');
  $user = $this->session->userdata('nama');

  if($val == NULL){

    $this->session->set_flashdata('error','<div class="alert alert-danger"> Data belum divalidasi </div>');
   redirect('Approval/Approval/ApproveKegiatan/'.$id,'refresh');
}else{
  $notifikasi = $this->M_approval->getDataPengajuan($id);
  $data = $notifikasi->nama_pengajuan;
  $nama_unit = $notifikasi->nama_unit;

  $this->db->set('status_'.$role, $validasi);
  $this->db->where('id_pengajuan',$id);
  $result =  $this->db->update('tb_approval');
  if($result = 1){

////////////////// Data Notifikasi //////////////////////
  if($validasi == "disetujui"){
    $msg = $user." Telah menyetujui pengajuan ".$data;
  }else if($validasi == "ditolak"){
    $msg = $user." Menolak Pengajuan ".$data;
  }else{
    $msg = $user." Telah memberikan Revisi pada pengajuan ".$data.". Segera Perbaiki dan ajukan kembali";
  }
  $data_notif = array(
    'id_pengajuan' => $id,
    'nama' => $user,
    'message' => $msg,
    'tujuan' => $nama_unit
  );

  $this->db->insert('tb_notifikasi',$data_notif);
  redirect('Approval/Approval/daftarapprove');
}else {
  redirect('Approval/Approval/ApproveKegiatan/'.$id);
}
}
}

public function aksi_approval($id){
  $notifikasi = $this->M_approval->getDataPengajuan($id);
  $nama_pengajuan = $notifikasi->nama_pengajuan;
  $nama_unit = $notifikasi->nama_unit;
  $user  = $this->session->userdata('nama');
  $role  = $this->session->userdata('role');
  $nama_validator  = $this->session->userdata('nama');
  $id_pengajuan = $this->db->query(" SELECT id_pengajuan FROM tb_rab WHERE id_rab=".$id)->row();
  $id_pengajuan = $id_pengajuan->id_pengajuan;
  $config['upload_path'] = './assets/file/foto/';
  $config['allowed_types'] = 'jpg|PNG|png|JPG';
  $config['max_size'] = 5000;
  $this->load->library('upload',$config);

  if(!$this->upload->do_upload('ttd')){
    $error = $this->session->set_flashdata('error','<div class="alert alert-danger"> Jenis data harus JPG/PNG </div>');
    redirect('Approval/Approval/ApproveKegiatan/'.$id_pengajuan,'refresh');
 }else {
   $file = $this->upload->data();
   $file = $this->upload->data('file_name');
   if ($role == "ppspm") {
     $data = array(
       'id_rab' =>$id,
       'ppspm' =>$nama_validator,
       'file_ppspm' =>$file,
       'status_ppspm' => "valid"
     );
     $this->db->set($data);
     $this->db->where('id_rab',$id);
     $this->db->where($role,$nama_validator);
     $result = $this->db->update('tb_validasi_rab');
     /// Notif
       $msg = $user." Telah Menyetujui RAB".$nama_pengajuan;

     $data_notif = array(
       'id_pengajuan' => $id,
       'nama' => $user,
       'message' => $msg,
       'tujuan' => $nama_unit
     );
     $this->db->insert('tb_notifikasi',$data_notif);
     $this->session->set_flashdata('success','<div class="alert alert-success"> Berhasil Validasi RAB </div>');
     redirect('Approval/Approval/ApproveKegiatan/'.$id_pengajuan);
     //print_r($result);die;
   }else if($role == "ppk"){
     $data = array(
       'id_rab' =>$id,
       'ppk' =>$nama_validator,
       'file_ppk' =>$file,
       'status_ppk' => "disetujui"
     );

     $this->db->set($data);
     $this->db->where('id_rab',$id);
     $this->db->where($role,$nama_validator);
     $this->db->update('tb_validasi_rab');
     /// Notif
       $msg = $user." Telah Menyetujui RAB".$nama_pengajuan;

     $data_notif = array(
       'id_pengajuan' => $id,
       'nama' => $user,
       'message' => $msg,
       'tujuan' => $nama_unit
     );
     $this->db->insert('tb_notifikasi',$data_notif);
     $this->session->set_flashdata('success','<div class="alert alert-success"> Berhasil Validasi RAB </div>');
     redirect('Approval/Approval/ApproveKegiatan/'.$id_pengajuan);
   }else if($role =="direktur"){
     $data = array(
       'id_rab' =>$id,
       'direktur' =>$nama_validator,
       'file_direktur' =>$file,
       'status_direktur' => "disetujui"
     );
     $this->db->set($data);
     $this->db->where('id_rab',$id);
     $this->db->where($role,$nama_validator);
     $this->db->update('tb_validasi_rab');
     /// Notif
       $msg = $user." Telah Menyetujui RAB kegiatan".$nama_pengajuan;

     $data_notif = array(
       'id_pengajuan' => $id,
       'nama' => $user,
       'message' => $msg,
       'tujuan' => $nama_unit
     );
     $this->db->insert('tb_notifikasi',$data_notif);
     $this->session->set_flashdata('success','<div class="alert alert-success"> Berhasil Validasi RAB </div>');
     redirect('Approval/Approval/ApproveKegiatan/'.$id_pengajuan);
   }
 }
}

    public function aksi_approvalTOR($id){
        $ppspm = $this->session->userdata('nama');

        $config['upload_path'] = './assets/file/foto/';
        $config['allowed_types'] = 'jpg|PNG|png|JPG';
        $config['max_size'] = 5000;
        $this->load->library('upload',$config);

        if(!$this->upload->do_upload('ttdtor')){
          $error = $this->session->set_flashdata('error','<div class="alert alert-danger"> Jenis data harus JPG/PNG </div>');
          echo "gagal";
          //redirect('Approval/Approval/ApproveKegiatan/'.$id_pengajuan,'refresh');
       }else {
         $file = $this->upload->data();
         $file = $this->upload->data('file_name');
         $data = $this->db->query("SELECT * FROM tb_pengajuan WHERE id_pengajuan =".$id)->row();
         $data_tor = $this->db->query("SELECT * FROM tb_tor WHERE id_pengajuan =".$id)->row();
         $tor = $data_tor->id;
         $nama_pengajuan = $data->nama_pengajuan;
         $nama_unit = $data->nama_unit;
         $msg = $ppspm." Telah Menyetujui TOR kegiatan ".$nama_pengajuan;
         $data_insert = array(
           'id_tor' => $tor,
           'ppspm'  => $ppspm,
           'status_validasi'  => "valid",
           'file_validasi_tor' => $file
         );
         $this->db->set($data_insert);
         $this->db->where('id_tor',$tor);
         $this->db->update('tb_validasi_tor');
       $data_notif = array(
         'id_pengajuan' => $id,
         'nama' => $ppspm,
         'message' => $msg,
         'tujuan' => $nama_unit
       );

       $this->db->insert('tb_notifikasi',$data_notif);
         $this->session->set_flashdata('success','<div class="alert alert-success"> Berhasil Validasi TOR </div>');
         echo "berhasil";

       }
    }

}
