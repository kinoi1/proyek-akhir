<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends MY_Controller {


    public function __construct() {
      parent::__construct();
      $this->load->model('M_unit');
      is_logged_in();
    }

    public function index(){

      $data['nama'] = $this->session->userdata('nama');
      $data['title'] = " Dashboard Unit";
      $data['role'] = $this->session->userdata('role');
      $this->load->view('template/header',$data);
      $this->load->view('template/navbar',$data);
      $this->load->view('template/unit/sidebar');
      $this->load->view('unit/dashboard',$data);
      $this->load->view('template/footer');

    }
    public function DaftarPengajuan(){
      $data['nama'] = $this->session->userdata('nama');
      $data['title'] = " Daftar Pengajuan";
      $data['role'] = $this->session->userdata('role');
      $unit = $this->session->userdata('nama');
      $data['pengajuan'] = $this->M_unit->getDaftarPengajuan($unit);


      //print_r($pengajuan); die();
      $this->load->view('template/header',$data);
      $this->load->view('template/navbar',$data);
      $this->load->view('template/unit/sidebar');
      $this->load->view('unit/daftarpengajuan',$data);
      $this->load->view('template/footer');
      $this->load->view('footerAdd');
    }

    public function Listkegiatan(){
      $data['title'] = 'Rekap Kegiatan';
      $data['role'] = $this->session->userdata('role');
      $data['nama'] = $this->session->userdata('nama');
      $data['user'] = $this->M_unit->rekap();
      $this->load->view('template/header',$data);
      $this->load->view('template/navbar',$data);
      $this->load->view('template/unit/sidebar');
      $this->load->view('unit/listpengajuan',$data);
      $this->load->view('template/footer');
    }
    public function TambahPengajuan($kode){
      $data['title'] = " Pengajuan Kegiatan ";
      $data['kode'] = $kode;
      $data['role'] = $this->session->userdata('role');
      $data['nama'] = $this->session->userdata('nama');
      $data['nama_kegiatan'] = $this->db->query("SELECT nama_kegiatan FROM kegiatan WHERE kode=".$kode)->row();
      $data['datkod'] = $this->db->query("SELECT kode_mak FROM tb_kode_mak")->result();

      //$data['nominal'] = $this->M_unit->getnominal
      $data['datasbm'] = $this->M_unit->getsbm();
      $data['datasingkatan'] = $this->M_unit->getsingkatan();
      $data['id'] = $this->db->query('select max(id_pengajuan) as id_pengajuan from tb_pengajuan')->row();
      $data['kemahasiswaan'] = $this->db->query("select name FROM user where role='kemahasiswaan'")->result();
      $data['kajur'] = $this->db->query("select name FROM user where role='kajur'")->result();
      $data['ppspm'] = $this->db->query("select name FROM user where role='ppspm'")->result();
      $data['ppk'] = $this->db->query("select name FROM user where role='ppk'")->result();
      $this->load->view('template/unit/header',$data);
      $this->load->view('template/navbar',$data);
      $this->load->view('template/unit/sidebar');
      $this->load->view('TambahPengajuan',$data);
      $this->load->view('template/footer');
      $this->load->view('footerAdd',$data);
    }
    public function pengajuan_pdf(){
      $data['count'] = intval($this->input->post('count'));
      $data['data_tor'] = array(
        'kementrian'            => $this->input->post('kementrian'),
        'uniteselon'            => $this->input->post('uniteselon'),
        'program'               => $this->input->post('program'),
        'hasil'                 => $this->input->post('hasil'),
        'kegiatan_tor'          => $this->input->post('kegiatan_tor'),
        'indikator'             => $this->input->post('indikator'),
        'keluaran'              => $this->input->post('keluaran'),
        'volume'                => $this->input->post('volume'),
        'kegiatanpembelajaran'  => $this->input->post('kegiatanpembelajaran'),
        'latarbelakang_tor'     => $this->input->post('latarbelakang_tor'),
        'dasarhukum'            => $this->input->post('dasarhukum'),
        'gambaranumum'          => $this->input->post('gambaranumum'),
        'penerimamanfaat'       => $this->input->post('penerimamanfaat'),
        'pencapaian'            => $this->input->post('pencapaian'),
        'tahapan'               => $this->input->post('tahapan'),
        'biayator'              => $this->input->post('biayator'),
      );
      $data['pdf_bulan'] = array(
        'bulan1' => intval($this->input->post('bulan1')),
        'bulan2' => intval($this->input->post('bulan2')),
        'bulan3' => intval($this->input->post('bulan3')),
        'bulan4' => intval($this->input->post('bulan4')),
        'bulan5' => intval($this->input->post('bulan5')),
        'bulan6' => intval($this->input->post('bulan6')),
        'bulan7' => intval($this->input->post('bulan7')),
        'bulan8' => intval($this->input->post('bulan8')),
        'bulan9' => intval($this->input->post('bulan9')),
        'bulan10' => intval($this->input->post('bulan10')),
        'bulan11' => intval($this->input->post('bulan11')),
      );

      $data['pdf_aktivitas'] = array(
        'aktivitas1' => $this->input->post('rencana_aktivitas1'),
        'aktivitas2' => $this->input->post('rencana_aktivitas2'),
        'aktivitas3' => $this->input->post('rencana_aktivitas3'),
        'aktivitas4' => $this->input->post('rencana_aktivitas4'),
        'aktivitas5' => $this->input->post('rencana_aktivitas5'),
        'aktivitas6' => $this->input->post('rencana_aktivitas6'),
        'aktivitas7' => $this->input->post('rencana_aktivitas7'),
        'aktivitas8' => $this->input->post('rencana_aktivitas8'),
        'aktivitas9' => $this->input->post('rencana_aktivitas9'),
        'aktivitas10' => $this->input->post('rencana_aktivitas10'),
        'aktivitas11' => $this->input->post('rencana_aktivitas11'),

      );
      $this->load->view('pdf',$data);


    }

    public function aksiPengajuan ($kode){
      // Data direktur
      $data_dir = $this->db->query("SELECT name FROM user WHERE role='direktur'")->row_array();
      $direktur = $data_dir['name'];
      // Rancangan Anggaran kegiatan TOR
      $unit = $this->session->userdata('nama');
      $kementrian = $this->input->post('kementrian');
      $uniteselon = $this->input->post('uniteselon');
      $program = $this->input->post('program');
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
      $biayator = $this->input->post('biayator');


      // END TOR
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
      $id_torMax = $this->db->query("SELECT max(id) as id FROM tb_tor")->row(); //belum dites
      $id_torMax = intval($id_torMax->id);
      $id_torMax = $id_torMax + 1;
      $data_tor = array(
        'id' => $id_torMax,
        'id_pengajuan' =>$id,
        'kementrian' => $kementrian,
        'uniteselon' => $uniteselon,
        'program' => $program,
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
        'biayator' => $biayator
      );

/////////// Upload File ///////////////////////////////////
      $config['upload_path'] = './assets/file/';
      $config['allowed_types'] = 'pdf';
      $config['max_size'] = 5000;
      $this->load->library('upload',$config);
      if(!$this->upload->do_upload('file_rab')){
        $error = array('error'=> $this->upload->display_errors());
        $this->session->set_flashdata('errorrab',$error['error']);
       redirect('pengajuan/pengajuan/tambahpengajuan/'.$kode);
     }else {
       $rab = $this->upload->data();
       $rab = $this->upload->data('file_name');
     }

     if(!$this->upload->do_upload('file_tor')){
       $error = array('error'=> $this->upload->display_errors());
       $this->session->set_flashdata('errortor',$error['error']);
      redirect('pengajuan/pengajuan/tambahpengajuan/'.$kode);
    }else {
      $tor = $this->upload->data();
      $tor = $this->upload->data('file_name');
    }
    if(!$this->upload->do_upload('file_proposal')){
      $error = array('error'=> $this->upload->display_errors());
      $this->session->set_flashdata('errorlain',$error['error']);
     redirect('pengajuan/pengajuan/tambahpengajuan/'.$kode);
    }else {
      $proposal = $this->upload->data();
      $proposal = $this->upload->data('file_name');
    }
///////////////////// END Upload File //////////////////////////////////////
//////////////////// Insert Validasi TOR //////////////////////////////////
      if($ppspm == NULL){
        $validasi_tor = array(
          'id_tor' =>$id,
          'ppspm' => "Oyok Yudianto"
        );
      }else {
        $validasi_tor = array(
          'id' =>$id,
          'ppspm' =>$ppspm
        );
      }

/////////////////// End Insert Validasi TOR ///////////////////////////////
//////////////////// Insert Validasi RAB //////////////////////////////////
        if($ppspm == NULL){
          $validasi_rab = array(
            'id' =>$id,
            'ppspm' =>"Oyok Yudianto",
            'ppk' =>$ppk,
            'direktur' =>$direktur
          );
        }else{
        $validasi_rab = array(
          'id' =>$id,
          'ppspm' =>$ppspm,
          'ppk' =>$ppk,
          'direktur' =>$direktur
        );
      }

/////////////////// End Insert Validasi RAB ///////////////////////////////
//////////////////// file Proposal ////////////////////////////////////////
    $data_proposal = array(
      'id_proposal' => $id,
      'file_proposal' => $proposal,
    );
//////////////////////////////////////////////////////////////////////////

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
      //$this->db->insert('tb_proposal',$data_proposal);
      //$this->db->insert('tb_pengajuan',$data_pengajuan);
      //print_r($data_pengajuan);
      //echo "</br>";
      //$this->db->insert('tb_tor',$data_tor);
      //print_r($data_tor);
      //echo "</br>";
      //$this->db->insert('tb_approval', $data_approval);
      //print_r($data_approval);
      //echo "</br>";
//////////////////// Aktivitas Dan Bulan TOR ///////////////////////////////
$aktivitas_tor = $this->input->post();
$data_aktivitas = array();
for ($m = 1; $m <= $aktivitas_tor['count_aktivitas']; $m++) {
$data_aktivitas = array(
    'id_tor' => $id_torMax,
    'aktivitas' => $aktivitas_tor['rencana_aktivitas' . $m],
    'bulan' => $aktivitas_tor['bulan' . $m],
  );

    $result = $this->db->insert('tb_tor_aktivitas',$data_aktivitas);
  }

////////////////// END Aktivitas dan Bulan TOR ////////////////////////////
//////////////////// Rancangan Anggaran Kegiatan pada Proposal//////////////
        $request = $this->input->post();
      $data_arr = array();
      for ($m = 1; $m <= $request['license_count']; $m++) {
        $data_arr = array(
            'id_pengajuan' => $id,
            'kode' => $request['kode' . $m],
            'rincianbiaya' => $request['rincian' . $m],
            'volume' => $request['volume' . $m],
            'satuan' => $request['satuan' . $m],
            'jumlah' => $request['jumlah' . $m],
            'satuandua' => $request['satuandua' . $m],
            'total' => $request['total' . $m],
            'satukur' => $request['satukur' . $m],
            'biaya_satuan' => $request['biaya_satuan'. $m],
            'total_biaya' => $request['totaldua' . $m],
            'file_rab' => $rab,
          );
            $result = $this->db->insert('tb_rab',$data_arr);
          }
            $this->db->insert('tb_proposal',$data_proposal);
            $this->db->insert('tb_pengajuan',$data_pengajuan);
            $this->db->insert('tb_tor',$data_tor);
            $this->db->insert('tb_approval', $data_approval);
            $this->db->insert('tb_validasi_tor',$validasi_tor);
            $this->db->insert('tb_validasi_rab',$validasi_rab);

            redirect('pengajuan/pengajuan/daftarpengajuan');
        //print_r($data_arr);



////////////////////////////////////////////////////////////////////////////



}

public function tess(){
  $data['title'] = "Usulan Kegiatan Baru";
  $data['role'] = $this->session->userdata('role');
  $data['tes'] = $this->db->query('select max(id_pengajuan) as id_pengajuan from tb_pengajuan')->row();
  $this->load->view('template/perencanaan/header',$data);
  $this->load->view('template/perencanaan/navbar');
  $this->load->view('template/perencanaan/sidebar');
  $this->load->view('perencanaan/tes',$data);
  $this->load->view('template/perencanaan/footer');
  $this->load->view('perencanaan/footertambahan');

}

public function tess_fungsi(){
  $this->load->library('form_validation');
  $this->form_validation->set_rules('kode','Kode', 'required');
  $this->form_validation->set_rules('program_kegiatan','Program_kegiatan', 'required');
  if ($this->form_validation->run() == false){
    $data['title'] = "Usulan Kegiatan Baru";
    $data['tes'] = $this->db->query('select max(id_pengajuan) as id_pengajuan from tb_pengajuan')->row();
    $this->load->view('template/perencanaan/header',$data);
    $this->load->view('template/perencanaan/navbar');
    $this->load->view('template/perencanaan/sidebar');
    $this->load->view('perencanaan/tes',$data);
    $this->load->view('template/perencanaan/footer');
    $this->load->view('perencanaan/footertambahan');

  }

echo  "tees";

}

public function tes(){

  $this->load->view('pengajuan/tes');
}
public function tes2(){
$data['datasbm'] = $this->M_unit->getsbm();
  $this->load->view('tes2',$data);
}

public function tes3(){

  $name = $_POST['nama'];

  $tes_get = $this->db->query("SELECT * FROM tb_sbm where nama_sbm ='".$name."'")->result();

  //$data = $this->M_unit->gettes($data);
  //print_r($tes_get);
  echo json_encode($tes_get);

}
public function tes4(){

  $this->load->view('template/tes/tot');

}

public function tes_aksi(){
  $request = $this->input->post();
$data_arr = array();
for ($m = 2; $m <6; $m++) {
  $data_arr = array(
      'id_rincian' => $request['id_sp' . $m],
      'transportasi' => $request['transportasi' . $m],
      'taxi' => $request['taxi' . $m],
      'uang_harian' => $request['uang_harian' . $m],
      'uang_penginapan' => $request['uang_penginapan' . $m],
      'id_ap' => $request['id_peg' . $m],
      'pegawai' => $request['nama_peg' . $m],
    );
      $this->db->insert('rincian_biaya',$data_arr);
      echo "berhasil";
}
}

  public function template(){
    $this->load->view('template/tes/header');
    $this->load->view('template/tes/navbar');
    $this->load->view('template/tes/sidebar');
    $this->load->view('template/tes/main');
    $this->load->view('template/tes/footer');

  }
}
