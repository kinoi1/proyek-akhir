<?php
$data_validasi = $this->db->query("SELECT * FROM tb_validasi_rab WHERE id_rab=".$validasi_rab->id_rab." AND ".$role."= '".$nama."'")->row();
$data_validasiTOR = $this->db->query("SELECT * FROM tb_validasi_tor WHERE id_tor=".$validasi_tor->id." AND ppspm='".$nama."'")->row();

$tes = "status_".$role;
$onclick = "";
if($role == "ppspm" || $role == "ppk" || $role == "direktur"){
  if($role == "ppk" AND $data_validasi->status_ppspm == "valid"){
    if ($data_validasi->status_ppk == "valid") {
        $button = "";
      }else{
        $button = " <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'>Validasi RAB</button>";
        $onclick = "swal ( 'Oops',  'Something went wrong!' ,  'error' )";
          }
    }else if($role == "direktur" AND $data_validasi->status_ppspm == "valid" AND $data_validasi->status_ppk == "valid"){
            if ($data_validasi->status_direktur == "valid") {
                  $button = "";
              }else{
                  $button = " <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'>Validasi RAB</button>";
                  $onclick = "swal ( 'Oops',  'Something went wrong!' ,  'error' )";
                }
      }else if($role =="ppspm"){
        if($data_validasi->status_ppspm == "valid") {
            $button = "";
          }else{
            $button = " <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'>Validasi RAB</button>";
            $onclick = "swal ( 'Oops',  'Something went wrong!' ,  'error' )";
            }
          }else {
            $button = "";
          }
}else {
  $button = "";
}
///////////////// TOR ////////////////////
if($role =="ppspm"){
  if($data_validasiTOR->status_validasi == "valid") {
      $buttonTOR = "";
    }else{
      $buttonTOR = " <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalTOR'>Validasi TOR</button>";

      }
    }else {
      $buttonTOR = "";
    }

if($data_validasiTOR->file_validasi_tor == NULL){
      $validasi_tor = "";
  }else {
    $validasi_tor = "<img width='200px'align='right' src='".base_url('assets/file/foto/'.$data_validasiTOR->file_validasi_tor).">";

  }

 ?> <?php
  if($data_validasi->file_direktur == NULL){
  $file_validasi_direktur = "";
  }else{
  $file_validasi_direktur = "<img width='200px'align='right' src='".base_url('assets/file/foto/'.$data_validasi->file_direktur).">";
  }
   ?>
   <?php
   if(!isset($data_validasi->file_ppspm) ){
     $file_validasi_ppspm = "";
   }else{
     //$file_validasi_ppspm = "<img width='200px'align='right' src='".base_url('assets/file/foto/'.$data_validasi->file_ppspm).">";
      }
    ?>

<section class="section">

    <section id="tor" >
      <div class="col-12 col-sm-6 col-lg-12">
        <div class="card">
          <div class="card-header">
        <h4>Term Of Reference (TOR) </h4>
      </div>
    </div>
    <?= $buttonTOR; ?>

    <table class="table table-borderless">
    <tr>
      <td width="30%" ><b> Sifat </b></td>
      <td><?= $row->kementrian; ?></td>
    </tr>
    <tr>
      <td>Unit Eselon</td>
      <td><?= $row->uniteselon; ?></td>
    </tr>
    <tr>
      <td>Program</td>
      <td><?= $row->program;?></td>
    </tr>
    <tr>
      <td>Hasil</td>
      <td><?= $row->hasil;?></td>
    </tr>
    <tr>
      <td>Kegiatan</td>
      <td><?= $row->kegiatan_tor;?></td>
    </tr>
    <tr>
      <td>Indikator</td>
      <td><?= $row->indikator; ?></td>
    </tr>
    <tr>
      <td>Keluaran</td>
      <td><?= $row->keluaran; ?>></td>
    </tr>
    <tr>
      <td>Volume</td>
      <td><?= $row->volume;?></td>
    </tr>
    <tr>
      <td>Kegiatan Pembelajaran</td>
      <td><?= $row->kegiatanpembelajaran;?></td>
    </tr>
    <tr>
      <td>Latar Belakang</td>
      <td><?= $row->latarbelakang_tor;?></td>
    </tr>
    <tr>
      <td>Dasar Hukum</td>
      <td><?= $row->dasarhukum;?></td>
    </tr>
    <tr>
      <td>Gambaran Umum</td>
      <td><?= $row->penerimamanfaat;?></td>
    </tr>
    <tr>
      <td>Pencapaian</td>
      <td><?= $row->pencapaian;?></td>
    </tr>
    <tr>
      <td>Tahapan</td>
      <td><?= $row->tahapan;?></td>
    </tr>
    <tr>
      <td>Biaya</td>
      <td><?= $row->biayator;?></td>
    </tr>
    </table>

    <div class="card">
      <div class="card-header">
        <h4>TTD</h4>
      </div>
      <div class="card-body">
        <div class="buttons">
          <table class="table table-borderless">
            <tr>
              <td>Wakil Direktur I</td>
            </tr>
          <tr>
            <td><img width="200px" src="<?= base_url('assets/file/foto/'.$data_validasiTOR->file_validasi_tor);?>" alt=""></td>
          </tr>
          <tr>

            <td >Oyok Yudiyanto, ST., MT. &emsp;&ensp; </br> NIP. 197105281999031002</td>
          </tr>

        </table>
         </div>
      </div>
    </div>



      </div>
    </section>

    <section id="rab" >
      <div class="card">
        <div class="card-header">
          <h4>Rancangan Anggaran Biaya</h4>
        </div>
        <div class="card-body">
<!-- Modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
Validasi RAB
</button>


              <table class="table table-bordered table-md">
                <tr>
                  <th rowspan="2">no</th>
                  <th rowspan="2">Kode / MAK</th>
                  <th rowspan="2">Rincian Komponen Biaya</th>
                  <th colspan="5">Uraian</th>
                  <th rowspan="2">Satuan Ukur</th>
                  <th rowspan="2">Biaya Satuan</th>
                  <th rowspan="2">Jumlah</th>
                </tr>
                <tr>
                  <th>volume</th>
                  <th>Satuan</th>
                  <th>Jumlah</th>
                  <th>Satuan</th>
                  <th>Total</th>

                </tr>
                <?php
                $i= 1;
                foreach ($rab as $row ): ?>
                <tr>

                <td><?= $i++;?></td>
                <td><?= $row->kode;?></td>
                <td><?= $row->rincianbiaya;?></td>
                <td><?= $row->volume;?></td>
                <td><?= $row->satuan;?></td>
                <td><?= $row->jumlah;?></td>
                <td><?= $row->satuandua;?></td>
                <td><?= $row->total;?></td>
                <td><?= $row->satukur;?></td>
                <td><?= $row->biaya_satuan;?></td>
                <td><?= $row->total_biaya;?></td>
                <?php endforeach; ?>
              </table>
              <table class="table table-borderless">
                <tr>
                  <td colspan="2"></td>
                  <td align="center">Subang 22 juli 2022</td>
                </tr>
                <tr>
                  <td>Pejabat Pembuat Komitmen</td>
                  <td >Direktur</td>
                  <td align="center">Wakil Direktur I</td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Yohanes Sinung, Dipl. Ing., MT.</br>NIP. 196505141991021001</td>
                  <td>Ir. Ridwan Baharta, MSc </br>NIP. 196206151989031002</td>
                  <td align="right">Oyok Yudiyanto, ST., MT. &emsp;&ensp;</br> NIP. 197105281999031002</td>
                </tr>

              </table>
            </div>
          </div>
    </section>

    <section id="file_tor">
      <div class="card">
        <div class="card-header">
          <h4>Dokumen TOR</h4>
        </div>
        <div class="card-body">
          <embed type="application/pdf" src="<?= base_url('assets/file/'.$file_tor->file_tor);?>" width="600" height="700"></embed>
    </div>
  </div>

    </section>
    <section id="file_rab">
      <div class="card">
        <div class="card-header">
          <h4>Dokumen RAB</h4>
        </div>
        <div class="card-body">
          <embed type="application/pdf" src="<?= base_url('assets/file/'.$file_rab->file_rab);?>" width="600" height="700"></embed>
      <div style="height:700px"id="viewpdfrab">
      </div>
    </div>
    </div>

    </section>
    <section id="file_proposal">
    <div class="card">
      <div class="card-header">
        <h4>Dokumen Proposal</h4>
      </div>
      <div class="card-body">
        <embed type="application/pdf" src="<?= base_url('assets/file/'.$file_proposal->file_proposal);?>" width="600" height="700"></embed>
  </div>
  </div>
</section>

    <section id="validasi">
      <div class="card">
        <div class="card-header">
          <h4>Validasi Pengajuan</h4>
        </div>
        <div class="card-body">
          <?php echo validation_errors(); ?>
          <?php echo form_open('Approval/Approval/AksiApprove/'.$id); ?>
          <div class="form-group col-lg-4" >
            <?php echo form_error('validasi'); ?>
          <select class="form-control" name="validasi">
            <option selected>Pilih</option>
            <option value="disetujui">Disetujui</option>
            <option value="ditolak">Ditolak</option>
            <option value="revisi">Revisi</option>
          </select>
        </div>
          <button class="btn btn-success" type="submit" name="submit">Kirim</button>
        </form>
    </div>
    </div>
    </section>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Validasi RAB</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label> Tanda Tangan Digital</label>
        <?php
echo form_open_multipart('approval/approval/aksi_approval/'.$id_rab, "enctype='multipart/form-data' id='edit_user'");
?>
                    <label>File Tanda Tangan digital</label>
    <div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text">Upload</span>
</div>
      <input class="form-control"type="file" name="ttd">
      <?php if($this->session->flashdata('error')){ ?>
        <small class=text-danger pl-3> <?php echo $this->session->flashdata('error');}?></small>
</div>
      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        <?php echo form_close();?>
    </div>
  </div>
</div>

<!-- ////////////  Modal TOR /////////////// -->

<div class="modal fade" id="exampleModalTOR" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Validasi TOR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label> Tanda Tangan Digital</label>
        <?php
echo form_open_multipart('approval/approval/aksi_approvalTOR/'.$data_validasiTOR->id_tor , "enctype='multipart/form-data' id='edit_user'");
?>
                    <label>File Tanda Tangan digital</label>
    <div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text">Upload</span>
</div>
      <input class="form-control"type="file" name="ttdtor">
      <?php if($this->session->flashdata('error')){ ?>
        <small class=text-danger pl-3> <?php echo $this->session->flashdata('error');}?></small>
</div>
      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        <?php echo form_close();?>
    </div>
  </div>
</div>
