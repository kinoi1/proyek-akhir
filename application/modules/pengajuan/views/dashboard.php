<div class="col-12">
                <div class="card" >
                  <div class="card-body">
                    <div class="section-title mt-0">Text</div>

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Pengajuan</th>
                          <th scope="col">Waktu Kegiatan</th>
                          <th scope="col">Diajukan Ke</th>
                          <th scope="col">Status</th>
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
                      </tr>
                    <?php } ?>
                      </tbody>
                    </table>

                </div>
              </div>
</div>
