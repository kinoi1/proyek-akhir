<div class="col-12">
                <div class="card" >
                  <div class="card-body">
                    <div class="section-title mt-0">Daftar Pengajuan</div>
                    <a class="btn btn-success" href="<?= base_url('Perencanaan/UsulanKegiatan/usulanbaru');?>"> Usulan Kegiatan baru</a>
                    <!--<a class="btn btn-primary " href="<?= base_url('Perencanaan/UsulanKegiatan/usulanNonAkademik');?>"> Usulan Kegiatan Non-Akademik</a>
-->
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">kode</th>
                          <th scope="col">Program Kegiatan</th>
                          <th scope="col">Volume</th>
                          <th scope="col">Satuan</th>
                          <th scope="col">Harga Satuan</th>
                          <th scope="col">total</th>
                          <th scope="col">Jenis Kegiatan</th>
                          <th scope="col">Status Usulan</th>
                          <th> Aksi </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $no = 1;
                      foreach($usulan as $row){
                      ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['kode'];?></td>
                        <td><?= $row['program_kegiatan'];?></td>
                        <td><?= $row['volume'];?></td>
                        <td><?= $row['satuan'];?></td>
                        <td><?= $row['harga_satuan'];?></td>
                        <td><?= $row['total'];?></td>
                        <td><?= $row['jenis_kegiatan'];?></td>
                        <td><?= $row['status_usulan'];?></td>
                      </tr>
                    <?php } ?>
                      </tbody>
                    </table>

                </div>
              </div>
</div>
