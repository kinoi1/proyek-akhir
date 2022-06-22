<script>
  // Default tab
  $(".tab").css("display", "none");
  $("#tab-1").css("display", "block");

  function run(hideTab, showTab){
    if(hideTab < showTab){ // If not press previous button
      // Validation if press next button
      var currentTab = 0;
      x = $('#tab-'+hideTab);
      y = $(x).find("input");

      for (i = 0; i < y.length; i++){
        if (y[i].value == ""){
          $(y[i]).css("background", "#ffdddd");
          return false;

        }
      }
    }

    // Progress bar
    for (i = 1; i < showTab; i++){
      $("#step-"+i).css("opacity", "1");
    }

    // Switch tab
    $("#tab-"+hideTab).css("display", "none");
    $("#tab-"+showTab).css("display", "block");
    $("input").css("background", "#fff");
  }
</script>
<script>
$(document).ready(function(){
  var data = '<?= $nama ?>';
  console.log(data);
  if (data == "MI") {
    $('#kemahasiswaan').removeAttr('style');
    $('#kemahasiswaan').attr("style","display:block");
    $('#kajur').removeAttr('style');
    $('#kajur').attr("style","display:block");
  }else if(data == "TPPM"){
    $('#kemahasiswaan').removeAttr('style');
    $('#kemahasiswaan').attr("style","display:block");
    $('#kajur').removeAttr('style');
    $('#kajur').attr("style","display:block");
  }else if(data == "AI"){
    $('#kemahasiswaan').removeAttr('style');
    $('#kemahasiswaan').attr("style","display:block");
    $('#kajur').removeAttr('style');
    $('#kajur').attr("style","display:block");
  }else if(data == "Keperawatan"){
    $('#kemahasiswaan').removeAttr('style');
    $('#kemahasiswaan').attr("style","display:block");
    $('#kajur').removeAttr('style');
    $('#kajur').attr("style","display:block");
  }else{
    $('#kemahasiswaan').removeAttr('style');
    $('#kemahasiswaan').attr("style","display:none");
    $('#kajur').removeAttr('style');
    $('#kajur').attr("style","display:none");
  }
});
  $('#jenis_pengajuan').change(function(){
    var jenis = $(this).val();


    if(jenis == "akademik"){
      $('#ppspm').removeAttr('style');
      $('#ppspm').attr("style","display:block");
    } else {
      $('#ppspm').removeAttr('style');
      $('#ppspm').attr("style","display:none");
    } console.log(jenis);
  });
</script>
<script>
$(document).ready(function() {
    var i = 1;

    // Add form while clicking on add button
    $('#btn_add_license').click(function() {
        i++;
        $('#dynamic_field').append(
          ' <div class="row js-append lic_rows" id="first_row' + i +
          '" > <div class="form-group col-lg-2"><label> Kode / MAK</label> <input type="text" class=" form-control" name="kode' +
          i +
          '"   class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-4"> <label> Rincian Komponen Biaya </label><input type="text" class="form-control" name="rincian' +
          i +
          '"   class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-3"> <label> Nominal </label><input type="text" class=" form-control" name="nominal' +
          i +
          '"   class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-2"> <label> Volume</label><input type="text" class="form-control" name="volume' +
          i +
          '"   class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-3"> <label> Satuan</label><input type="text" class=" form-control" name="satuan' +
          i +
          '"  class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-2"> <label> Jumlah</label><input type="text" class="form-control" name="jumlah' +
          i +
          '"  class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-3"> <label> Satuan</label> <input type="text" class=" form-control" name="satuandua' +
          i +
          '"  class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-2"> <label> Total </label> <input type="text" class="form-control" name="total' +
          i +
          '"  class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-3"> <label> Satuan Ukur </label><input type="text" class=" form-control" name="satukur' +
          i +
          '"  class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-4"> <label> Total </label> <input type="text" class=" form-control" name="totaldua' +
          i +
          '"   class="form-control name_list" aria-required="true" /> </div> <div class="form-group col-lg-4">  <button type="button" name="remove" id="' +
          i +
          '"class="btn btn-danger btn_remove">Remove</button>  </div>  </div>'
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


<script type="text/javascript">
    $(document).ready(function() {
        $("#total, #biaya_satuan").keyup(function() {
            var harga  = $("#biaya_satuan").val();
            var jumlah = $("#total").val();

            var total = parseInt(harga) * parseInt(jumlah);
            $("#hasilp").val(total);
        });
    });
</script>
