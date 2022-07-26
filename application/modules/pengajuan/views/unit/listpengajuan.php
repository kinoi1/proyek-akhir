<div class="col-12">
  <div class="card" >
    <div class="card-body">
      <div class="section-title mt-0"><h4>Daftar Pengajuan</h4></div>
      <div class="table-responsive">
                      <table class="table table-striped table-bordered" id="test">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Kegiatan</th>
                          <th>Tanggal Kegiatan</th>
                          <th>Countdown</th>
                          <th>Keterangan</th>
                          <th>Status</th>
                          <th>Aksi</th>
                      </tr>
                      </thead>
                        <?php
                        $no=1;
                      foreach ($user as $users) : ?>
                      <tbody>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $users['nama_kegiatan'] ?></td>
                          <td><?= $users['tgl'] ?></td>
                          <td><?php
                          date_default_timezone_set('Asia/Jakarta');
                          $tglSekarang = date('Y-m-d');
                          if($users['status'] == 1){
                          echo 'Warning';
                          }elseif ($users['tgl'] <= $tglSekarang && $users['status'] ==2 ){
                        echo "Terlewat ";

                         $rem = strtotime($users['tgl']) - time();
                         $day = floor($rem/86400);
                         $hr = floor(($rem % 86400)/3600);
                         $min = floor(($rem % 3600)/60);
                         $sec = floor($rem % 60);
                        if ($day) echo "$day Hari ";
                        if ($hr) echo "$hr Jam ";
                        if ($min) echo "$min Menit ";
                        if ($sec) echo "$sec Detik ";
                        echo "!!!";
                          }elseif ($users['tgl'] >= $tglSekarang && $users['status'] ==2 ){
                             $rem = strtotime($users['tgl']) - time();
                             $day = floor($rem/86400);
                             $hr = floor(($rem % 86400)/3600);
                             $min = floor(($rem % 3600)/60);
                             $sec = floor($rem % 60);
                            if ($day) echo "$day Hari ";
                            if ($hr) echo "$hr Jam ";
                            if ($min) echo "$min Menit ";
                            if ($sec) echo "$sec Detik ";
                            echo "Tersisa...";
                          }elseif($users['status'] == 3){
                            echo $users['tgl'];
                          }

                          ?></td>
                          <td>SP1</td>
                          <td><?php if ($users['status'] == 1) { ?>
                                    <div class="badges">
                                    <span class="badge badge-danger">Belum Terlaksana</span>
                              <?php $link =  base_url();
                            } ?>

                              <?php if ($users['status'] == 2) { ?>
                                    <div class="badges">
                                    <span class="badge badge-warning">Terdekat</span>
                              <?php
                                      if(!isset($link) == FALSE){
                                        $link = "#";
                                      }else{
                                        $link = base_url();
                                      }
                            } ?>

                              <?php if ($users['status'] == 3) { ?>
                                    <div class="badges">
                                    <span class="badge badge-success">Terlaksana</span>
                              <?php } ?>
                          </td>
                          <td>
                            <?php
                            //if ($users['tgl'] <= $tglSekarang && $users['status'] ==2 ){?>
                            <!--<button class="btn btn-success" ><i class="fa fa-paper-plane">peringantan</i> Peringatan</button> -->
                            <?php //} ?>
                              <a class="btn btn-primary" href="<?= $link.'pengajuan/pengajuan/TambahPengajuan/'.$users['kode'];?>"> Ajukan</a>
                            <td></td>
                          </td>
                      </tr>
                      </tbody>
                        <?php endforeach; ?>
                      </table>
                    </div>
</div>
</div>
</div>
