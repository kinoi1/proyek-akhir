<div class="col-12">
  <div class="card" >
    <div class="card-body">
      <div class="section-title mt-0"><h4>Daftar Pengajuan</h4></div>


      <table class="table table-borderless">
        <tr>
          <td width="30%" ><b> Sifat </b></td>
          <td><?= $disposisi->sifat; ?></td>
        </tr>
        <tr>
          <td><b> No. Agenda </b></td>
          <td>:<?= $disposisi->no_agenda; ?></td>
        </tr>
        <tr>
          <td><b> No. Surat </b></td>
          <td>:<?= $disposisi->no_surat; ?></td>
        </tr>
        <tr>
          <td><b> Tanggal Surat </b></td>
          <td>:<?= $disposisi->tgl_surat; ?></td>
        </tr>
        <tr>
          <td><b> Asal Surat </b></td>
          <td>:<?= $disposisi->asal_surat; ?></td>
        </tr>
        <tr>
          <td><b> Perihal </b></td>
          <td>:<?= $disposisi->perihal; ?></td>
        </tr>
        <tr>
          <td><b> Diteruskan </b></td>
          <td>:<?= $disposisi->diteruskan; ?></td>
        </tr>
        <tr>
          <td><b> Instruksi / Informasi </b></td>
          <td>:</td>
        </tr>
        <tr>
          <td colspan="2"><?= $disposisi->informasi; ?></td>
        </tr>
      </table>
</div>
</div>
</div>
