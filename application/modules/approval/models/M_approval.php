<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_approval extends CI_Model {


    public function getrab($unit){
       $query = $this->db->get_where('tb_rab',array('id_pengajuan'=> $unit));
       return $query->result();
    }

    public function gettor($unit){
       $query = $this->db->get_where('tb_tor',array('id'=> $unit));
       return $query->result();
    }
    public function getValidasipengajuan($role,$nama){

      $this->db->from('tb_validasi_rab');
      $this->db->join('tb_rab','tb_rab.id_rab = tb_validasi_rab.id_rab');
      $this->db->where('tb_validasi_rab.'.$role,$nama);
      $this->db->where('tb_validasi_rab.status_'.$role,'belum disetujui');
      $query = $this->db->get('')->result_array();
      return $query;
    }
    public function getValidasipengajuan2($role,$nama){

      $this->db->from('tb_validasi_rab');
      $this->db->join('tb_rab','tb_rab.id_rab = tb_validasi_rab.id_rab');
      $this->db->join('tb_pengajuan','tb_pengajuan.id_pengajuan = tb_rab.id_pengajuan');
      $this->db->where('tb_validasi_rab.'.$role,$nama);
      $this->db->where('tb_validasi_rab.status_'.$role,'disetujui');
      $query = $this->db->get('')->result_array();
      return $query;
    }
    public function getValidasipengajuan3($role,$nama){

      $this->db->from('tb_validasi_rab');
      $this->db->join('tb_rab','tb_rab.id_rab = tb_validasi_rab.id_rab');

      $this->db->where('tb_validasi_rab.'.$role,$nama);
      $this->db->where('tb_validasi_rab.status_'.$role,'revisi');
      $query = $this->db->get('')->result_array();
      return $query;
    }
    public function getpengajuan($role,$nama){

      $this->db->from('tb_approval');
      $this->db->join('tb_pengajuan','tb_pengajuan.id_pengajuan = tb_approval.id_pengajuan');
      $this->db->where('tb_approval.'.$role,$nama);
      $this->db->where('tb_approval.status_'.$role,'belum disetujui');
      $query = $this->db->get('')->result_array();
      return $query;
    }
    public function getpengajuan2($role,$nama){

      $this->db->from('tb_approval');
      $this->db->join('tb_pengajuan','tb_pengajuan.id_pengajuan = tb_approval.id_pengajuan');
      $this->db->where('tb_approval.'.$role,$nama);
      $this->db->where('tb_approval.status_'.$role,'disetujui');
      $query = $this->db->get('')->result_array();
      return $query;
    }

    public function getpengajuan3($role,$nama){

      $this->db->from('tb_approval');
      $this->db->join('tb_pengajuan','tb_pengajuan.id_pengajuan = tb_approval.id_pengajuan');
      $this->db->where('tb_approval.'.$role,$nama);
      $this->db->where('tb_approval.status_'.$role,'revisi');
      $query = $this->db->get('')->result_array();
      return $query;
    }

    public function getpengajuan4($role,$nama){

      $this->db->from('tb_approval');
      $this->db->join('tb_pengajuan','tb_pengajuan.id_pengajuan = tb_approval.id_pengajuan');
      $this->db->join('tb_disposisi','tb_disposisi.id_pengajuan = tb_approval.id_pengajuan');
      $this->db->where('tb_approval.'.$role,$nama);
      $this->db->where('tb_approval.status_'.$role,'disetujui');
      $this->db->where('tb_disposisi.id_pengajuan',4);
      $query = $this->db->get('')->result_array();
      return $query;
    }

    public function getDataPengajuan($id){
      $this->db->select('nama_unit , nama_pengajuan');
      $this->db->from('tb_pengajuan');
      $this->db->where('id_pengajuan',$id);
      $query = $this->db->get('')->row();
      return $query;
    }
    public function getIdRab($id){
      $this->db->select('id_rab');
      $this->db->from('tb_rab');
      $this->db->where('id_pengajuan',$id);
      $query = $this->db->get('')->row();
    }
    public function getValidasiRab($id_rab){
      $this->db->select('*');
      $this->db->from('tb_validasi_rab');
      $this->db->where('id_rab',$id_rab);
      $query = $this->db->get('')->row();
      return $query;
    }

}
