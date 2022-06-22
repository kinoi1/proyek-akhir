<script>
$(document).ready(function() {
    var i = 1;

    // Add form while clicking on add button
    $('#btn_add_license').click(function() {
        i++;
        $('#dynamic_field').append(
          ' <div class="row js-append lic_rows" id="first_row' + i +
              '" > <div class="form-group col-lg-4"> <input type="text" class=" form-control" name="biaya' +
              i +
              '" placeholder="e"  class="form-control name_list"  /> </div>  <div class="form-group col-lg-4"> <input type="text" class="form-control" name="satuan' +
              i +
              '" placeholder=""  class="form-control name_list"  /> </div>  <div class="form-group col-lg-2"> <input type="text" class=" form-control" name="nominal' +
              i +
              '" placeholder="" class="form-control name_list"  /> </div>  <div class="form-group col-lg-2">  <button type="button" name="remove" id="' +
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
