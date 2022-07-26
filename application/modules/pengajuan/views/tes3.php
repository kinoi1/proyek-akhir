<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<div class="app-content content">
<div class="content-wrapper">
  <div class="content-body">
    <div class="row">

</div>
<br/>
<div class="row match-height">
<div class="col-lg-20 col-md-12">
  <div class="card">
    <div class="card-header">
      <div class="card-title"><b>Tambah Surat Perintah Perjalanan Dinas</b>
      <div class="float-md-right">
        <p class="form-control-static" id="staticInput"><?php echo date('l, d / M / Y'); ?></p>
      </div>

      </div>
      <br/>
      <?php echo form_open('pengajuan/pengajuan/tes_aksi'); ?>
      <?php
        $alat_angkut = "Mobil";
        $penginapan = "ya";
        $rbp  = [];
        $rbp[0]   = "pegawaiA";
        $rbp[1]  = "pegawaiB";
        $rbp[2]  = "pegawaiC";
        $rbp[3]  = "pegawaiD";
        $m = 1;
        for ($i=0; $i < 4; $i++) {
          $m++;
          if ($rbp[$i]) { ?>
            <label>id sp</label>
            <input type="text" name="<?php echo "id_sp".$m;?>" value="">
            <label>id peg</label>
            <input type="text" name="<?php echo "id_peg".$m;?>" value="<?= $rbp[$i];?>"></br>
            <label>Nama Pegawai :</label>
            <input type="text" name="<?php echo "nama_peg".$m;?>" value="" class="form-control">
            <label>Biaya Taksi</label>
            <input type="number" class="form-control" name="<?php echo "taxi".$m;?>" value="">
            <?php if($alat_angkut =='Mobil' || $alat_angkut =='Kereta'){ ?>
              <label>Biaya Transportasi </label>
              <input type="text" name="<?php echo "transportasi".$m;?>" value="">
            <?php }else if($alat_angkut=='Pesawat'){ ?>
              <label>Biaya Transportasi</label>
              <input type="text" class="form-control" name="<?php echo "transportasi".$m;?>" value="">
            <?php } ?>
            <label>Uang Harian</label>
            <input type="text" name="<?php echo "uang_harian".$m;?>" value="" class="form-control">
            <?php if($penginapan = "ya"){ ?>
              <label>Lama Penginapan tes Hari</label><br/>
              <label>Biaya Penginapan</label>
              <input type="text" name="<?php echo "uang_penginapan".$m;?>" value="" class="form-control">
            </br>
            <?php }
          }
        }?>
            <br/>

    <br/>
  <hr/>
  <button type="submit" class="btn btn-sm btn-primary" name="button">Buat Rincian Biaya</button>
        <?php echo form_close(); ?>
        </div>
        <br/>
      </div>
      </div>

        </div>
      </div>

    </div>
    </div>
</div>
</div>
</div>
</body>
</html>
