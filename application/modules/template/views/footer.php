

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?= base_url('assets/stisla-master/assets/js/stisla.js')?>"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?= base_url('assets/stisla-master/assets/js/scripts.js')?>"></script>
  <script src="<?= base_url('assets/stisla-master/assets/js/custom.js')?>"></script>

  <!-- Page Specific JS File -->
</body>
</html>

<script>
$(document).ready(function() {
    var i = 1;

    // Add form while clicking on add button
    $('#btn_add_license').click(function() {
        i++;
        $('#dynamic_field').append(
            ' <div class="row js-append lic_rows" id="first_row' + i +
            '" > <div class="form-group col-lg-5"> <input type="text" class=" form-control" name="nama_akun' +
            i +
            '" placeholder="Enter name" maxlength="35" class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-5"> <input type="number" class="form-control" name="vEmail' +
            i +
            '" placeholder="Enter email" maxlength="35" class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-2">  <button type="button" name="remove" id="' +
            i +
            '" class="btn btn-danger btn_remove">Remove</button>  </div>  </div>'
        );

        $('#license_count').val(i);
    });

    // remove license row on clicking remove btn
    $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id");
        $('#first_row' + button_id + '').remove();
        i--;
        $('#license_count').val(i);
    });
});
</script>
