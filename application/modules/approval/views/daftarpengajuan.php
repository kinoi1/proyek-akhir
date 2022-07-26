
<div class="col-12 col-sm-6 col-lg-12">
  <div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">
      <ul class="nav nav-pills" id="myTab3" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">Belum Diapprove</a>
        </li>
        <li class="nav-item" id="rab"  >
          <a  class="nav-link tesz"  id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Sudah Diapprove</a>
        </li>
        <li class="nav-item" id="file" >
          <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false">Revisi</a>
        </li>
        <li class="nav-item" id="file" >
          <a class="nav-link" id="selesai-tab4" data-toggle="tab" href="#selesai4" role="tab" aria-controls="selesai" aria-selected="false">Selesai</a>
        </li>
      </ul>
    </div>
      <div class="tab-content no-padding" id="myTab2Content">
        <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab3">

            <div class="card">
              <div class="card-header">
                <h4>Kegiatan Yang belum Diapprove</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <?php
                      if($role == "direktur"){ ?>
                        <table class="table table-bordered table-md">
                          <tr>
                            <th>no</th>
                            <th>Kegiatan Yang Diajukan</th>
                            <th>Nama Unit</th>
                            <th>Status RAB</th>

                          </tr>
                          <?php
                          $i= 1;
                          foreach ($pengajuan as $row ): ?>
                          <?php
                            $id = $row['id_pengajuan'];
                            $pengajuan = $this->db->query("SELECT * FROM tb_pengajuan where id_pengajuan=".$id)->row();
                           ?>
                          <tr>
                            <td><?= $id++?></td>
                            <td><a href="<?= base_url('approval/approval/ApproveRabDirektur/'.$row['id_pengajuan']);?>" ><?= $pengajuan->nama_pengajuan;?> </a></td>
                            <td><?= $pengajuan->nama_unit;?></td>
                            <td><?= $row['status_'.$role];?></td>
                          </tr>
                          <?php endforeach; ?>
                        </table>
                    <?php  }else {?>
                  <table class="table table-bordered table-md">
                    <tr>
                      <th>no</th>
                      <th>Kegiatan Yang Diajukan</th>
                      <th>Nama Unit</th>
                      <th>Status Pengajuan</th>
                    </tr>
                    <?php
                    $i= 1;
                    foreach ($pengajuan as $row ): ?>
                    <tr>
                    <td><?= $i++;?></td>
                    <td><a href="<?= base_url('approval/approval/ApproveKegiatan/'.$row['id_pengajuan']);?>" ><?= $row['nama_pengajuan'];?></a></td>
                    <td><?= $row['nama_unit'];?> </td>
                    <td><?= $row['status_'.$role];?></td>
                    </tr>
                    <?php endforeach; ?>
                  </table>
                <?php } ?>
                </div>
              </div>
              <div class="card-footer text-right">
                <nav class="d-inline-block">
                  <ul class="pagination mb-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab4">
          <div class="card">
            <div class="card-header">
              <h4>Kegiatan Yang disetujui</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-md">
                  <tr>
                    <th>no</th>
                    <th>Nama Unit</th>
                    <th>Kegiatan Yang Diajukan</th>
                    <th>Status Pengajuan</th>
                  </tr>
                  <?php
                  $i= 1;
                  foreach ($pengajuan2 as $row ): ?>
                  <tr>

                  <td><?= $i++;?></td>
                  <td><?= $row['nama_unit'];?></td>
                  <td><?= $row['nama_pengajuan'];?></td>
                  <?php
                    if($role == "direktur"){ ?>
                      <td>Selesai</td>
                  <?php  }else{
                      $id_pengajuan = $row['id_pengajuan'];
                      $result = $this->db->query("SELECT id_pengajuan FROM tb_disposisi WHERE id_pengajuan=".$id_pengajuan." AND nama='".$nama."'")->num_rows();
                      if ($result >=1 ){ ?>
                        <td>Selesai</td>
                    <?php  }else { ?>
                      <td>disetujui</td>
                      <td> <a class="btn btn-primary" href="<?= base_url('Approval/Disposisi/disposisites/'.$id_pengajuan);?>">Disposisi</a> </td>
                  <?php  } }
                   ?>

                  </tr>
                  <?php endforeach; ?>
                </table>
              </div>
            </div>
            <div class="card-footer text-right">
              <nav class="d-inline-block">
                <ul class="pagination mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
          <div class="card">
            <div class="card-header">
              <h4>Kegiatan Yang Direvisi</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-md">
                  <tr>
                    <th>no</th>
                    <th>Nama Unit</th>
                    <th>Kegiatan Yang Diajukan</th>
                    <th>Status Pengajuan</th>

                  </tr>
                  <?php
                  $i= 1;
                  foreach ($pengajuan3 as $row ): ?>
                  <tr>

                  <td><?= $i++;?></td>
                  <td><?= $row['nama_unit'];?></td>
                  <td><?= $row['nama_pengajuan'];?></td>
                  <td><?= $row['status_'.$role];?></td>
                  </tr>
                  <?php endforeach; ?>
                </table>
              </div>
            </div>
            <div class="card-footer text-right">
              <nav class="d-inline-block">
                <ul class="pagination mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="selesai4" role="tabpanel" aria-labelledby="selesai-tab4">
          <div class="card">
            <div class="card-header">
              <h4>Kegiatan Yang Direvisi</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-md">
                  <tr>
                    <th>no</th>
                    <th>Nama Unit</th>
                    <th>Kegiatan Yang Diajukan</th>
                    <th>Status Pengajuan</th>

                  </tr>
                  <?php
                  $i= 1;
                  foreach ($pengajuan4 as $row ): ?>
                  <tr>

                  <td><?= $i++;?></td>
                  <td><?= $row['nama_unit'];?></td>
                  <td><?= $row['nama_pengajuan'];?></td>
                  <?php
                  if($row['status_'.$role] == "disetujui"){ ?>
                    <td> Selesai</td>
                <?php  }
                   ?>

                  </tr>
                  <?php endforeach; ?>
                </table>
              </div>
            </div>
            <div class="card-footer text-right">
              <nav class="d-inline-block">
                <ul class="pagination mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
