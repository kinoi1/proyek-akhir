<div class="col-12">
                <div class="card" >
                  <div class="card-body">
                    <div class="section-title mt-0">Daftar Pengajuan</div>
                    <a class="btn btn-success" href="<?= base_url('pengajuan/pengajuan/tambahpengajuan');?>"> Tambah Pengajuan</a>

                    <table class="table">
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
                        <td><?= $row['validator'];?></td>
                        <td><?= $row['status'];?></td>
                      </tr>
                    <?php } ?>
                      </tbody>
                    </table>

                </div>
              </div>
</div>
