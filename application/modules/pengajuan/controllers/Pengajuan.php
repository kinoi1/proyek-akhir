<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends MY_Controller {


    public function __construct() {
      parent::__construct();
      $this->load->model('M_unit');
    }

    public function index(){
      $data['title'] = " Dashboard Unit";
      $this->load->view('template/header',$data);
      $this->load->view('template/navbar');
      $this->load->view('template/unit/sidebar');
      $this->load->view('unit/dashboard',$data);
      $this->load->view('template/footer');
      $this->load->view('footerAdd');
    }
    public function DaftarPengajuan(){
      $data['title'] = " Daftar Pengajuan";
      $unit = $this->session->userdata('nama');
      $pengajuan = $this->M_unit->getDaftarPengajuan($unit);
      $data = array('pengajuan'=>$pengajuan);
      //print_r($pengajuan); die();
      $this->load->view('template/header',$data);
      $this->load->view('template/navbar');
      $this->load->view('template/unit/sidebar');
      $this->load->view('unit/daftarpengajuan',$data);
      $this->load->view('template/footer');
      $this->load->view('footerAdd');
    }
    public function TambahPengajuan(){
      $data['title'] = " Pengajuan Kegiatan ";
      $data['nama'] = $this->session->userdata('nama');
      $data['datasbm'] = $this->M_unit->getsbm();
      $data['datasingkatan'] = $this->M_unit->getsingkatan();
      $data['id'] = $this->db->query('select max(id_pengajuan) as id_pengajuan from tb_pengajuan')->row();
      $this->load->view('template/header',$data);
      $this->load->view('template/navbar');
      $this->load->view('template/unit/sidebar');
      $this->load->view('TambahPengajuan',$data);
      $this->load->view('template/footer');
      $this->load->view('footerAdd',$data);
    }

    public function aksiPengajuan (){
      // Data Proposal
      // Rancangan Anggaran kegiatan TOR
      $unit = $this->session->userdata('nama');
      $kementrian = $this->input->post('kementrian');
      $uniteselon = $this->input->post('uniteselon');
      $hasil = $this->input->post('hasil');
      $kegiatan_tor = $this->input->post('kegiatan_tor');
      $indikator = $this->input->post('indikator');
      $keluaran = $this->input->post('keluaran');
      $volume = $this->input->post('volume');
      $kegiatanpembelajaran = $this->input->post('kegiatanpembelajaran');
      $latarbelakang_tor = $this->input->post('latarbelakang_tor');
      $dasarhukum = $this->input->post('dasarhukum');
      $gambaranumum = $this->input->post('gambaranumum');
      $penerimamanfaat = $this->input->post('penerimamanfaat');
      $pencapaian = $this->input->post('pencapaian');
      $tahapan = $this->input->post('tahapan');
      $waktutor = $this->input->post('waktutor');
      $tempat_pelaksanaan = $this->input->post('tempat_pelaksanaan');
      $biayator = $this->input->post('biayator');

      $jenis_pengajuan = $this->input->post('jenis_pengajuan');
      // Rancangan Anggaran Biaya (RAB)

      $id = $this->input->post('id_pengajuan') ;// Data ID

      // Data Approve
      $kemahasiswaan = $this->input->post('kemahasiswaan');
      $kajur = $this->input->post('kajur');
      $ppspm = $this->input->post('ppspm');
      $ppk = $this->input->post('ppk');

      $data_pengajuan = array(
        'id_pengajuan' => $id,
        'jenis_pengajuan' => $jenis_pengajuan,
        'nama_unit' => $unit, //data dari session
        'nama_pengajuan' => $kegiatan_tor
      );

      $data_tor = array(
        'kementrian' => $kementrian,
        'uniteselon' => $uniteselon,
        'hasil' => $hasil,
        'kegiatan_tor' => $kegiatan_tor,
        'indikator' => $indikator,
        'keluaran' => $keluaran,
        'volume' => $volume,
        'kegiatanpembelajaran' => $kegiatanpembelajaran,
        'latarbelakang_tor' => $latarbelakang_tor,
        'dasarhukum' => $dasarhukum,
        'gambaranumum' => $gambaranumum,
        'penerimamanfaat' => $penerimamanfaat,
        'pencapaian' => $pencapaian,
        'tahapan' => $tahapan,
        'waktutor' => $waktutor,
        'tempat_pelaksanaan' => $tempat_pelaksanaan,
        'biayator' => $biayator
      );

       //$this->db->insert('tb_tor',$data_RAK);

/////////// Upload File ///////////////////////////////////
      $config['upload_path'] = './assets/file/';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 5000;
      $this->load->library('upload',$config);
      if(!$this->upload->do_upload('file_rab')){
        $error = array('error'=> $this->upload->display_errors());
        $this->session->set_flashdata('error',$error['error']);
       redirect('pengajuan/pengajuan/tess/','refresh');
     }else {
       $rab = $this->upload->data();
       $rab = $this->upload->data('file_name');
     }

     if(!$this->upload->do_upload('file_tor')){
       $error = array('error'=> $this->upload->display_errors());
       $this->session->set_flashdata('error',$error['error']);
      redirect('pengajuan/pengajuan/tess/','refresh');
    }else {
      $tor = $this->upload->data();
      $tor = $this->upload->data('file_name');
    }
    if(!$this->upload->do_upload('file_proposal')){
      $error = array('error'=> $this->upload->display_errors());
      $this->session->set_flashdata('error',$error['error']);
     redirect('pengajuan/pengajuan/tess/','refresh');
    }else {
      $proposal = $this->upload->data();
      $proposal = $this->upload->data('file_name');
    }
///////////////////// END Upload File //////////////////////////////////////
      if($kajur == ""){
        if($jenis_pengajuan == "akademik"){
          $data_approval = array(
            'id_pengajuan' =>$id,
            'nama_unit' => $unit,
            'kemahasiswaan' => $kemahasiswaan,
            'ppspm' => $ppspm,
            'ppk' => $ppk
          );
        }else{
          $data_approval = array(
            'id_pengajuan' =>$id,
            'nama_unit' => $unit,
            'kemahasiswaan' => $kemahasiswaan,
            'ppk' => $ppk
          );
        }
      }else if(!$kajur == "") {
        if ($jenis_pengajuan == "akademik") {
          $data_approval = array(
            'id_pengajuan' =>$id,
            'nama_unit' => $unit,
            'kajur' => $kajur,
            'ppspm' => $ppspm,
            'ppk' => $ppk
          );
        }else{
          $data_approval = array(
            'id_pengajuan' =>$id,
            'nama_unit' => $unit,
            'kajur' => $kajur,
            'ppk' => $ppk
          );
        }
      }
      print_r($data_pengajuan);
      echo "</br>";
      print_r($data_tor);
      echo "</br>";
      print_r($data_approval);
      echo "</br>";
//////////////////// Rancangan Anggaran Kegiatan pada Proposal//////////////
        $request = $this->input->post();
      $data_arr = array();
      for ($m = 1; $m <= $request['license_count']; $m++) {
        $data_arr = array(
            'kode' => $request['kode' . $m],
            'rincian' => $request['rincian' . $m],
            'nominal' => $request['nominal' . $m],
            'volume' => $request['volume' . $m],
            'satuan' => $request['satuan' . $m],
            'jumlah' => $request['jumlah' . $m],
            'satuandua' => $request['satuandua' . $m],
            'total' => $request['total' . $m],
            'satukur' => $request['satukur' . $m],
            'totaldua' => $request['totaldua' . $m],
        );
        $result = $this->db->insert('tb_rab',$data_arr);
        //print_r($data_arr);
      }

      /*$validasi = $this->db->query("SELECT * FROM tb_sbm where nama_sbm = '$rincianbiaya'")->row();
        if($biaya_satuan >= $validasi->nominal){
          echo " Gagal";
        } else{
          echo "berhasil";
        } */
////////////////////////////////////////////////////////////////////////////



}

public function tess(){
  $data['title'] = "Usulan Kegiatan Baru";
  $data['tes'] = $this->db->query('select max(id_pengajuan) as id_pengajuan from tb_pengajuan')->row();
  $this->load->view('template/perencanaan/header',$data);
  $this->load->view('template/perencanaan/navbar');
  $this->load->view('template/perencanaan/sidebar');
  $this->load->view('perencanaan/tes',$data);
  $this->load->view('template/perencanaan/footer');
  $this->load->view('perencanaan/footertambahan');

}

public function tess_fungsi(){
  $config['upload_path'] = './assets/file/';
  $config['allowed_types'] = 'pdf';
  $config['max_size'] = 5000;
  $this->load->library('upload',$config);
  if(!$this->upload->do_upload('file_rab')){
    $error = array('error'=> $this->upload->display_errors());
    $this->session->set_flashdata('error',$error['error']);
   redirect('pengajuan/pengajuan/tess/','refresh');
 }else {
   $rab = $this->upload->data();
   $rab = $this->upload->data('file_name');
 }

 if(!$this->upload->do_upload('file_tor')){
   $error = array('error'=> $this->upload->display_errors());
   $this->session->set_flashdata('error',$error['error']);
  redirect('pengajuan/pengajuan/tess/','refresh');
}else {
  $tor = $this->upload->data();
  $tor = $this->upload->data('file_name');
}
if(!$this->upload->do_upload('file_proposal')){
  $error = array('error'=> $this->upload->display_errors());
  $this->session->set_flashdata('error',$error['error']);
 redirect('pengajuan/pengajuan/tess/','refresh');
}else {
  $proposal = $this->upload->data();
  $proposal = $this->upload->data('file_name');
}
print_r($rab);
print_r($tor);
print_r($proposal);


}
}
