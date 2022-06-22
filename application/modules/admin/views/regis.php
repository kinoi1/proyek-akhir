<div class="col-12">
      <div class="card" >
        <div class="card-body">

        <table class="table">

          <tr>
            <th>No</th>
            <th>Email</th>
            <th>Role</th>
            <th>action</th>
          </tr>
          <?php
          $i = 0;
          foreach ($tes as $row) {
            $i = $i + 1 ;?>
          <tr>
            <td><?= $row->email; ?></td>
            <td></td>
            <td></td>
            <td>

            </td>
          </tr>
        <?php } ?>
        </table>

        <a href="#" class="btn btn-success">Tambah</a>
        </div>
    </div>
</div>
