<div class="col-12">
                <div class="card" >
                  <div class="card-body">
                    <a class="btn btn-success" href="<?= base_url('pengajuan/BagKeuangan/tambahSBM');?>"> Tambah SBM </a>
                    <table class="table table-sm">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Kode SBM</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Sub Kategori</th>
                        <th scope="col">Nama Akun</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Nominal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $i = 0;
                        foreach($dat->result_array() as $row) {
                          $i = $i + 1 ;
                       ?>
                       <tr>
                         <td><?= $i; ?></td>
                         <td><?= $row['kode_sbm']; ?></td>
                         <td><?= $row['kategori']; ?></td>
                         <td><?= $row['sub_kategori']; ?></td>
                         <td><?= $row['nama_sbm']; ?></td>
                         <td><?= $row['satuan']; ?></td>
                         <td><?= $row['nominal'];?></td>
                       </tr>
                     <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
</div>
</div>
