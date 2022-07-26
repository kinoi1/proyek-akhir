<?php
$data_validasi = $this->db->query("SELECT * FROM tb_validasi_rab WHERE id_rab=".$validasi_rab->id_rab." AND ".$role."= '".$nama."'")->row();
$data_validasiTOR = $this->db->query("SELECT * FROM tb_validasi_tor WHERE id_tor=".$validasi_tor->id." AND ppspm='".$nama."'")->row();
$disable = "";
$tes = "status_".$role;
$onclick = "";
if($role == "ppspm" || $role == "ppk" || $role == "direktur"){
  if($role == "ppk" AND $data_validasi->status_ppspm == "valid"){
    if ($data_validasi->status_ppk == "valid") {
        $button = "";
      }else{
        $button = " <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'>Validasi RAB</button>";
        $onclick = "swal ( 'Oops',  'Something went wrong!' ,  'error' )";
        $disable = "disabled";
          }
        }else if($role == "direktur" AND $data_validasi->status_ppspm == "valid" AND $data_validasi->status_ppk == "valid"){
            if ($data_validasi->status_direktur == "valid") {
                  $button = "";
              }else{
                  $button = " <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'>Validasi RAB</button>";
                  $onclick = "swal ( 'Oops',  'Something went wrong!' ,  'error' )";
                  $disable = "disabled";
                }
      }else if($role =="ppspm"){
        if($data_validasi->status_ppspm == "valid") {
            $button = "";
          }else{
            $button = " <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter'>Validasi RAB</button>";
            $onclick = "swal ( 'Oops',  'Something went wrong!' ,  'error' )";
            $disable = "disabled";
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
      $onclick = "swal ( 'Oops',  'Something went wrong!' ,  'error' )";
      $disable = "disabled";
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
<div class="col-12 col-sm-6 col-lg-12">
  <div class="card">
    <div class="card-header">
      <div class="card-header-action ">
      <a href="<?= base_url('approval/Approval/FastMode/'.$id);?>" class="btn btn-info btn-icon icon-right" style="float:right;">Fast Mode</a>
      </div>
    </div>
    <?php echo $this->session->flashdata('error');?>
    <?php echo $this->session->flashdata('success');?>
    <div class="card-body">

      <ul class="nav nav-pills" id="myTab3" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">TOR</a>
        </li>
        <li class="nav-item" id="rab"  >
          <a  class="nav-link tesz"  id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">RAB</a>
        </li>
        <li class="nav-item" id="file" >
          <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false">File Pendukung</a>
        </li>
        <li class="nav-item" id="validasi" >
          <a class="nav-link" id="validasi-tab3" data-toggle="tab" href="#validasi3" role="tab" aria-controls="contact" aria-selected="false">Validasi</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent2">
        <div  class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">
          <?= $buttonTOR; ?>
          <br>
          <div class="card">
            <div class="card-header">
              <h4>Term Of Reference (TOR) </h4>
            </div>
            <div class="card-body">
              <div class="buttons">

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

          <!-- disini tabel nya nyuaks -->


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
        </div>
        </div>



        </div>
        <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="contact-tab3">


          <!-- Button trigger modal -->
          <?php echo $button; ?>


          <table class="table table-bordered table-md">
            <tr>
              <th rowspan="2">No</th>
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
              <?php $id_rab = $row->id_rab; ?>
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
              <td>
                <?php
                if($data_validasi->file_ppk == NULL){

                }else{ ?>
                  <img width="200px" src="<?= base_url('assets/file/foto/'.$data_validasi->file_ppk);?>">
                <?php }?>
              </td>
              <td><?php
              if($data_validasi->file_direktur == NULL){

              }else{ ?>
                <img width="200px"  src="<?= base_url('assets/file/foto/'.$data_validasi->file_direktur);?>">
              <?php }?></td>
              <td>
                <?php
                if($data_validasi->file_ppspm == NULL){

                }else{ ?>
                  <img width="200px" align="right" src="<?= base_url('assets/file/foto/'.$data_validasi->file_ppspm);?>">
                <?php }?>

              </td>
            </tr>
            <tr>
              <td>Yohanes Sinung, Dipl. Ing., MT.</br>NIP. 196505141991021001</td>
              <td>Ir. Ridwan Baharta, MSc </br>NIP. 196206151989031002</td>
              <td align="right">Oyok Yudiyanto, ST., MT. &emsp;&ensp; </br> NIP. 197105281999031002</td>
            </tr>

          </table>

          <!-- Modal -->

        </div>
        <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
          <h4>Dokumen TOR</h4>
          <embed type="application/pdf" src="<?= base_url('assets/file/'.$file_tor->file_tor);?>" width="600" height="700"></embed>

        </br>
        <h4>Dokumen RAB</h4>
        <embed type="application/pdf" src="<?= base_url('assets/file/'.$file_rab->file_rab);?>" width="600" height="700"></embed>
      </br>
        <h4>Dokumen Proposal</h4>
        <embed type="application/pdf" src="<?= base_url('assets/file/'.$file_proposal->file_proposal);?>" width="600" height="700"></embed>


      </div>

      <div class="tab-pane fade" id="validasi3" role="tabpanel" aria-labelledby="validasi-tab3">
        <?php if($role =="direktur"){}else{ ?>
        <h4>Validasi</h4>
        <?php echo validation_errors(); ?>
        <?php echo form_open('Approval/Approval/AksiApprove/'.$id); ?>
        <div id="form_validasi" class="form-group col-lg-6" >
          <?php echo form_error('validasi'); ?>
        <select id="validasi" class="form-control" name="validasi"  >
          <option value="" selected>Pilih</option>
          <option value="disetujui" >Disetujui</option>
          <option value="revisi">Revisi</option>
        </select>

        <input type="hidden" name="val" value="<?= $data_validasi->$tes; ?>">
      </div>
        <button class="btn btn-success" onclick="<?= $onclick ?>  "  <?= $disable ?> >Kirim</button>
      </form>
    <?php } ?>
    </div>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $('select').change(function(){
    var validasi = $(this).val();
    console.log("tes",validasi);
    if (validasi == "revisi"){
      $('#form_validasi').append(
        '<div class="form-group col-lg-12"   id="revisi"> <label> Tentang </label> <input class="form-control" type="text" name="title" required>  <label> Deskripsi </label> <input class="form-control" type="text" name="deskripsi" required> </div>'
      );
    }else{
      $('#revisi').remove();
    }
  });
});
</script>
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
