<script>
$(document).ready(function() {
    var i = 1;

    // Add form while clicking on add button
    $('#btn_add_license').click(function() {
        i++;
        $('#dynamic_field').append(
            ' <div class="row js-append lic_rows" id="first_row' + i +
            '" > <div class="form-group col-lg-5"> <label> Kode SBM</label> <input type="text" class=" form-control" name="nama_akun' +
            i +
            '" placeholder="Enter name" maxlength="35" class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-5"><label> Kategori</label> <input type="text" class="form-control" name="kategori' +
            i +
            '" placeholder="" maxlength="35" class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-5"> <label> Sub Kategori </label> <input type="text" class="form-control" name="sub_kategori' +
            i +
            '" placeholder="Enter name" maxlength="35" class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-5"><label> Nama SBM</label> <input type="text" class="form-control" name="nama_sbm' +
            i +
            '" placeholder="" maxlength="35" class="form-control name_list" aria-required="true" /> </div> <div class="form-group col-lg-3"> <label> Satuan </label> <input type="text" class="form-control" name="satuan' +
            i +
            '" placeholder="Enter name" maxlength="35" class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-5"><label> Nominal</label> <input type="text" class="form-control" name="nominal' +
            i +
            '" placeholder="" maxlength="35" class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-2">  <button type="button" name="remove" id="' +
            i +
            '" class="btn btn-danger btn_remove">Remove</button>  </div>  </div> <hr>'
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

<script> /*
        $(document).ready(function () {
            $("#input1").keyup(function () {
                var value = $(this).val();
                $("#input2").attr('max',value);
            });
        }); */
</script>
