<div class="col-12">
  <div class="card" >
    <div class="card-body">
      <div class="section-title mt-0"><h4>Daftar Pengajuan</h4></div>
      <div class="table-responsive">
        <a class="btn btn-primary" href="<?= base_url('Approval/Disposisi/disposisites');?>"> Tambah Disposisi</a>
                      <table class="table table-striped table-bordered" id="test">
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Sifat</th>
                          <th>No Agenda</th>
                          <th>No Surat</th>
                          <th>Tanggal Surat</th>
                          <th>Perihal</th>
                          <th>Diteruskan</th>

                      </tr>
                      </thead>
                      <tbody>

                          <?php $i =1;
                           foreach($dispo as $row) {?>
                           <td><?= $i++; ?></td>

                           <td><?= $row->sifat;?></td>
                           <td><?= $row->no_agenda;?></td>
                           <td><?= $row->no_surat;?></td>
                           <td><?= $row->tgl_surat;?></td>
                           <td><?= $row->perihal;?></td>
                           <td><?= $row->diteruskan; ?></td>
                           
                           <td> <a class="btn btn-primary" href="<?= base_url('Approval/Disposisi/detail/'.$row->id_pengajuan);?>"> Detail</td>
                         <?php } ?>
                      </tbody>

                      </table>
                    </div>
</div>
</div>
</div>
