<div class="col-12">
                <div class="card" >
                  <div class="card-body">
                    <div class="section-title mt-0"><h4>Daftar Kegiatan Diajukan</h4></div>
                    <a class="btn btn-info" href="<?= base_url('pengajuan/pengajuan/listkegiatan');?>"> List Kegiatan </a>
                      <?= $this->session->flashdata('message');?>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Unit</th>
                          <th scope="col">Nama Pengajuan</th>
                          <th scope="col">Diajukan Ke</th>
                          <th scope="col">Status</th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $no = 1;
                      foreach($pengajuan as $row){
                      ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['nama_unit'];?></td>
                        <td><?= $row['nama_pengajuan'];?></td>
                        <td><?php echo $row['kemahasiswaan'];
                                  if($row['status_kajur'] == "disetujui"){ ?>
                                      <div class="badge"><span class="badge badge-success">
                                      <?php echo $row['kajur'];echo "</span></div></br>"; ?>
                            <?php }else if($row['status_kajur'] == "revisi") {?>
                                      <div class="badge"><span class="badge badge-warning">
                                      <?php echo $row['kajur'];echo "
                                      </span></div></br>"; ?><?php }else {echo $row['kajur'];
                                      echo "</br>";}?>

                                      <?php
                                      if($row['status_ppspm'] == "disetujui"){ ?>
                                          <div class="badge"><span class="badge badge-success">
                                          <?php echo $row['ppspm'];echo "</span></div></br>"; ?>
                                <?php }else if($row['status_ppspm'] == "revisi") {?>
                                          <div class="badge"><span class="badge badge-warning">
                                          <?php echo $row['ppspm'];echo "
                                          </span></div></br>"; ?><?php }else {echo $row['ppspm'];}?>
                                          <?php

                                          if($row['status_ppk'] == "disetujui"){ ?>
                                              <div class="badge"><span class="badge badge-success">
                                              <?php echo $row['ppk'];echo "</span></div></br>"; ?>
                                    <?php }else if($row['status_ppk'] == "revisi") {?>
                                              <div class="badge"><span class="badge badge-warning">
                                              <?php echo $row['ppk'];echo "
                                              </span></div></br>"; ?><?php }else {echo $row['ppk'];}?>
                        </td>
                        <td>
                          <?php if($row['status_kemahasiswaan'] == NULL){
                          }else if($row['status_kemahasiswaan'] == "belum disetujui"){
                            echo $row['status']; echo " ke ".$row['kemahasiswaan'];
                          }

                          if($row['status_kajur'] == NULL){
                          }else if(($row['status_kemahasiswaan'] == NULL OR $row['status_kemahasiswaan'] == "disetujui") AND $row['status_kajur'] == "belum disetujui"){
                            echo $row['status']; echo " ke ".$row['kajur'];
                          }

                          if($row['status_ppspm'] == NULL){
                          }else if(($row['status_kajur'] == NULL OR $row['status_kajur'] == "disetujui") AND $row['status_ppspm'] == "belum disetujui"){
                            echo $row['status']; echo " ke ".$row['ppspm'];
                          }

                          if($row['status_ppk'] == NULL){
                          }else if(($row['status_ppspm'] == NULL OR $row['status_ppspm'] == "disetujui") AND $row['status_ppspm'] == "belum disetujui"){
                            echo $row['status']; echo " ke ".$row['ppk'];
                          }

                          if($row['status_ppk'] == "disetujui"){
                            echo $row['status']; echo " ke Bagian Keuangan";
                          }

                          ?>
                        </td>
                        <td><div class="dropleft">
                          <button class="bi bi-three-dots-vertical" type="button" data-toggle="dropdown"  aria-expanded="false">

                          </button>
                          <div class="dropdown-menu dropleft">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                          </div>
                        </div></td>
                      </tr>
                    <?php } ?>
                      </tbody>
                    </table>

                </div>
              </div>
</div>
