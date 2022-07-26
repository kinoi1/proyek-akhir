<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_Keuangan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_undangan');
  	$this->load->model('M_penunjukan');
    $this->load->model('M_suratugas');
    $this->load->model('M_wilayah');
		$this->load->model('M_suratperintah');
		$this->load->model('M_SBM');

	}
	public function index()
	{
    $judul['title'] = 'Halaman Utama Bagian Keuangan';
    $this->load->view('template/header.php',$judul);
    $this->load->view('keuangan/navbar.php');
    $this->load->view('template/footer.php');
	}
	public function surat_perintah(){
	$judul['title'] = 'Kelola Surat Perintah';
	$data['sp'] = $this->M_suratperintah->getData();
	$data['konfirmasi'] = $this->M_suratugas->buatSP();
	$this->load->view('template/header',$judul);
	$this->load->view('keuangan/navbar');
	$this->load->view('keuangan/v_sp',$data);
	$this->load->view('template/footer');
	}
	public function detail_st($id_st){
	$judul['title'] = 'Tambah Surat Perintah Perjalanan Dinas';
	$data = $this->db
								->from('surat_tugas')
								->where('id_st',$id_st)
								->get()->row_array();
	$data['peg1']   = $this->M_suratugas->getById($data['pegawai']);
	$data['st'] = $this->M_suratugas->get_detail($id_st);
	$data['sp'] = $this->M_suratperintah->getSP($id_st)->row();
	$data['pegawai'] = $this->M_penunjukan->getPegawai();
	$data['provinsi'] = $this->M_wilayah->getProvinsi();
	$data['kabupaten'] = $this->M_wilayah->getKabupaten();
	$data['qr'] = $this->db
								->from('token')
								->get()->row_array();
	$data['pes'] = $this->M_wilayah->getKabPes();

	$this->load->view('template/header',$judul);
	$this->load->view('keuangan/navbar');
	$this->load->view('keuangan/detail_st',$data);
	$this->load->view('template/footer');
	}
	public function detail_sp($id_st){
	$judul['title'] = 'Tambah Surat Perintah Perjalanan Dinas';
	$data = $this->db
								->from('surat_tugas')
								->where('id_st',$id_st)
								->get()->row_array();
	$data['peg1']   = $this->M_suratugas->getById($data['pegawai']);
	$data['st'] = $this->M_suratugas->get_detail($id_st);
	$data['sp'] = $this->M_suratperintah->getSP($id_st)->row();
	$data['pegawai'] = $this->M_penunjukan->getPegawai();
	$data['provinsi'] = $this->M_wilayah->getProvinsi();
	$data['kabupaten'] = $this->M_wilayah->getKabupaten();
	$data['qr'] = $this->db
								->from('token')
								->get()->row_array();
	$data['pes'] = $this->M_wilayah->getKabPes();
	$data['pes1'] = $this->db
									->from('pesawat')
									->join('kabupaten','pesawat.tujuan = kabupaten.id_kabupaten')
									->get()->result_array();
	$this->load->view('template/header',$judul);
	$this->load->view('keuangan/navbar');
	$this->load->view('keuangan/detail_sp',$data);
	$this->load->view('template/footer');
	}
	public function proses_sp(){
		$id_st = $this->input->post('id_st');
		$tingkat_biaya = $this->input->post('tingkat_biaya');
		$alat_angkut = $this->input->post('alat_angkut');
		$mekanisme = $this->input->post('mekanisme');
		$catatan_sp = $this->input->post('catatan_sp');
		$sp = array(
			"id_st" => $id_st,
			"tingkat_biaya" => $tingkat_biaya,
			"alat_angkut" => $alat_angkut,
			"konfirmasi_sp" => "Diajukan",
			"mekanisme" => $mekanisme,
			"catatan_sp" => $catatan_sp,
		);
		$st = array(
				"id_st" => $id_st,
				"sp" => "Diterbitkan",

		);
		$this->db->where('id_st',$id_st);
		$this->db->update('surat_tugas',$st);
		$this->db->insert('surat_perintah',$sp);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">'. '<center>Tambah Surat Perintah Berhasil!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span></center>
		</button></div>');
		redirect('keuangan/P_keuangan/surat_perintah');
	}
	public function penugasan_pribadi(){
		$judul['title'] ='Data Penugasan Perjalanan Dinas';
		$data1['peg'] = $this->session->userdata('id_peg');
		$id_peg = $data1['peg'];
		$data['query'] = $this->M_suratperintah->get_byid($id_peg);
		$data['pegawai'] = $this->M_penunjukan->getPegawai();
		$data['st'] = $this->M_suratugas->getAll();
		$this->load->view('template/header.php',$judul);
		$this->load->view('keuangan/navbar.php',$data1);
		$this->load->view('Keuangan/penugasan_pribadi/v_pribadi.php',$data);
		$this->load->view('template/footer.php');
	}
	public function tambah_sp_biaya($id_st){
			$data['data'] = $this->M_suratugas->getAll($id_st)->row();
		if ($this->input->post()) {
			$data['info'] 								= $this->M_suratugas->getAll($id_st)->row();
			$data['nomor'] 								= $this->input->post('nomor_st');
			$data['pegawai']   						= $this->M_suratugas->getById($this->input->post('pegawai'));
	    $data['pegawai1']   					= $this->M_suratugas->getP1($this->input->post('pengikut1'));
			$data['pegawai2']   					= $this->M_suratugas->getP2($this->input->post('pengikut2'));
			$data['pegawai3']   					= $this->M_suratugas->getP3($this->input->post('pengikut3'));
			$data['provinsi_tujuan']  		= $this->M_wilayah->getProvSP($this->input->post('prov_tujuan'));
			$data['kabupaten_tujuan']  		= $this->M_wilayah->getKabSBM($this->input->post('kab_tujuan'));
		 	$data['kabupaten_berangkat']  = $this->M_wilayah->getKabSBM($this->input->post('kab_brgkt'));
			$data['lama_hari'] 						= $this->input->post('lama_hari');
			$data['kelas'] 								= $this->input->post('kelas');
			$data['airport']  						= $this->input->post('pesawat');
			$data['alat_angkut'] 					= $this->input->post('alat_angkut');
			$data['hari_peng']						 = $this->input->post('hari_penginapan');
			$harian                   		= $this->M_SBM->get($data['provinsi_tujuan']);
			$nginap                  			= $this->M_SBM->getPenginapan($data['provinsi_tujuan']);
			$taksi 												= $this->M_SBM->gettaksi($data['provinsi_tujuan']);
			$pes 													= $this->M_SBM->pesawat($this->input->post('pesawat'));
			$darat 												= $this->M_SBM->getdarat($data['kabupaten_tujuan']);

			//hitung uang transportasi udara
			if($data['alat_angkut'] =="Pesawat"){
				if($data['kelas']=='bisnis'){
					$data['pesawat'] = $pes['bisnis'];
				}else if($data['kelas']=='ekonomi'){
					$data['pesawat'] = $pes['ekonomi'];
				}
		}else if($data['alat_angkut']=="Mobil" || $data['alat_angkut']=="Kereta"){
				$data['transportasi_darat'] = $darat['besaran']*2;
				$data['pesawat'] = 0;
		}else{
			$data['pesawat'] = 0;
			$data['transportasi_darat'] = 0;
		}
		//hitung uang harian
				if($data['lama_hari'] < 1){
					$data['lama_hari'] =1;
				}
				if($this->input->post('kab_tujuan') == $this->input->post('kab_brgkt')){
					$data['uangHarian'] = $harian['dalam_kota'];
				}else{
					$data['uangHarian'] = $harian['luar_kota'];
				}
			//hitung penginapan kalo iya
			{
					if($this->input->post('penginapan') == 'Iya'){
						switch ($data['pegawai']['eselon']) {
					case 'I':
						$data['pegawai']['penginapan'] = $nginap['eselon_i'];
						break;
					case 'II':
						$data['pegawai']['penginapan'] = $nginap['eselon_ii'];
						break;
					case 'III':
						$data['pegawai']['penginapan'] = $nginap['eselon_iii'];
						break;
					case 'IV':
						$data['pegawai']['penginapan'] = $nginap['eselon_iv'];
						break;
				}
					$data['pegawai']['totalPenginapan']    = $data['pegawai']['penginapan'] * $data['hari_peng'];

			 if ($data['pegawai1']) {
				switch($data['pegawai1']['eselon']){
				case 'I':
					$data['pegawai1']['penginapan'] = $nginap['eselon_i'];
					break;
				case 'II':
					$data['pegawai1']['penginapan'] = $nginap['eselon_ii'];
					break;
				case 'III':
					$data['pegawai1']['penginapan'] = $nginap['eselon_iii'];
					break;
				case 'IV':
					$data['pegawai1']['penginapan'] = $nginap['eselon_iv'];
					break;
				}
					$data['pegawai1']['totalPenginapan']    = $data['pegawai1']['penginapan'] * $data['hari_peng'];
				 }
				if ($data['pegawai2']) {
				 switch($data['pegawai2']['eselon']){
				 case 'I':
					 $data['pegawai2']['penginapan'] = $nginap['eselon_i'];
					 break;
				 case 'II':
					 $data['pegawai2']['penginapan'] = $nginap['eselon_ii'];
					 break;
				 case 'III':
					 $data['pegawai2']['penginapan'] = $nginap['eselon_iii'];
					 break;
				 case 'IV':
					 $data['pegawai2']['penginapan'] = $nginap['eselon_iv'];
					 break;
				 }
					 $data['pegawai2']['totalPenginapan']    = $data['pegawai2']['penginapan'] * $data['hari_peng'];
				 }
				 if ($data['pegawai3']) {
					switch($data['pegawai3']['eselon']){
					case 'I':
						$data['pegawai3']['penginapan'] = $nginap['eselon_i'];
						break;
					case 'II':
						$data['pegawai3']['penginapan'] = $nginap['eselon_ii'];
						break;
					case 'III':
						$data['pegawai3']['penginapan'] = $nginap['eselon_iii'];
						break;
					case 'IV':
						$data['pegawai3']['penginapan'] = $nginap['eselon_iv'];
						break;
					}
						$data['pegawai3']['totalPenginapan']    = $data['pegawai3']['penginapan'] * $data['hari_peng'];
					}
				}


						$data['a'] = explode(',',$this->input->post('tujuan_brgkt'));
						$data['b'] =count($data['a']);
						if($data['a'] > 1){
							$data['uangtaksi'] = $taksi['besaran']*$data['b'];
						}else{
							$data['uangtaksi'] = $taksi['besaran'];
						}
				}
			$data['totalHarian']= $data['uangHarian']*$data['lama_hari'];
			$this->load->view('template/header');
			$this->load->view('keuangan/navbar');
			$this->load->view('v_rb',$data);
			$this->load->view('template/footer');
		}
	}
		public function tambah_rincian(){
			$masuk = $this->input->post();
			$rincian=array();
			for ($i=0; $i <= 2; $i++) {
				$rincian = array(
				"id_sp" 			=> $masuk['id_sp'],
				"transportasi"=> $masuk['transportasi'],
				"pegawai" 		=> $masuk['id_peg'],
				// "taxi" => $taxi,
				// "uang_harian" => $uang_harian,
				// "uang_penginapan" => $uang_penginapan,
				// "pegawai" => $pegawai,
			);
		// $this->db->insert('rincian_biaya',$rincian);
		print_r($rincian);

	}
	}
	public function cek_tracking(){
    $judul['title'] = 'Cek Tracking Progress Surat Tugas';
    $data['query'] = $this->M_suratugas->getAll();
    $this->load->view('template/header',$judul);
    $this->load->view('navbar');
    $this->load->view('v_tracking',$data);
    $this->load->view('template/footer');
  }

		public function rincian_biaya($id_st){
			$judul['title'] = '';
			$data = $this->db
										->from('surat_tugas')
										->where('id_st',$id_st)
										->get()->row_array();
		$data['st'] = $this->db->get_where('surat_tugas', ['id_st'  => $id_st])->row_array();

			$data['pegawai']   = $this->M_suratugas->getById($data['pegawai']);
			$data['pengikut1']   = $this->M_suratugas->getP1($data['pengikut1']);
			$data['pengikut2']   = $this->M_suratugas->getP2($data['pengikut2']);
			$data['pengikut3']   = $this->M_suratugas->getP2($data['pengikut3']);
			$this->load->view('template/header',$judul);
			$this->load->view('keuangan/navbar');
			$this->load->view('keuangan/v_rincianbiaya',$data);
			$this->load->view('template/footer');
		}
}


?>
