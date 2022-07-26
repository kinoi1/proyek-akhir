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
$(document).ready(function() {
    var i = 1;

    // Add form while clicking on add button
    $('#btn_add_tor').click(function() {
        i++;
        $('#dynamic_field_tor').append(
          ' <div class="row js-append lic_rows" id="first_row' + i +
          '" > <div class="form-group col-lg-2"><label>Rencana Aktivitas</label> <input id="rencana'+ i +'"type="text" class=" form-control" name="rencana_aktivitas' +
          i +
          '"  class="form-control name_list" aria-required="true" /></div> <div class="form-group col-lg-4"><label> Bulan Pelaksanaan</label><input type="number" id="bulan'+ i +'" name="bulan' +
          i +
          '"  class="form-control" value=""></div> <div class="form-group col-lg-4"><button' + 'type="button"name="remove" id="' +
          i +
          '"class="btn btn-danger btn_remove_tor">Remove</button>  </div> </div>'
      );

        $('#count').val(i);
        $('#count_aktivitas').val(i);
        if(parseInt(i)>10){
          $('#btn_add_tor').attr('disabled');
          swal('RAB','Batas Maksimal 10','warning');
        }else {
          $('#btn_add_tor').removeAttr('disabled');
        }

        $("#rencana2").keyup(function () { var value = $(this).val(); $("#rencanaA2").val(value); });
        $("#rencana3").keyup(function () { var value = $(this).val(); $("#rencanaA3").val(value); });
        $("#rencana4").keyup(function () { var value = $(this).val(); $("#rencanaA4").val(value); });
        $("#rencana5").keyup(function () { var value = $(this).val(); $("#rencanaA5").val(value); });
        $("#rencana6").keyup(function () { var value = $(this).val(); $("#rencanaA6").val(value); });
        $("#rencana7").keyup(function () { var value = $(this).val(); $("#rencanaA7").val(value); });
        $("#rencana8").keyup(function () { var value = $(this).val(); $("#rencanaA8").val(value); });
        $("#rencana9").keyup(function () { var value = $(this).val(); $("#rencanaA9").val(value); });
        $("#rencana10").keyup(function () { var value = $(this).val(); $("#rencanaA10").val(value); });
        $("#rencana11").keyup(function () { var value = $(this).val(); $("#rencanaA11").val(value); });

        $("#bulan2").keyup(function () { var value = $(this).val(); $("#bulanA2").val(value);  });
        $("#bulan3").keyup(function () { var value = $(this).val(); $("#bulanA3").val(value);  });
        $("#bulan4").keyup(function () { var value = $(this).val(); $("#bulanA4").val(value);  });
        $("#bulan5").keyup(function () { var value = $(this).val(); $("#bulanA5").val(value);  });
        $("#bulan6").keyup(function () { var value = $(this).val(); $("#bulanA6").val(value);  });
        $("#bulan7").keyup(function () { var value = $(this).val(); $("#bulanA7").val(value);  });
        $("#bulan8").keyup(function () { var value = $(this).val(); $("#bulanA8").val(value);  });
        $("#bulan9").keyup(function () { var value = $(this).val(); $("#bulanA9").val(value);  });
        $("#bulan10").keyup(function () { var value = $(this).val(); $("#bulanA10").val(value); });
        $("#bulan11").keyup(function () { var value = $(this).val(); $("#bulanA11").val(value); });

    });

    // remove license row on clicking remove btn
    $(document).on('click', '.btn_remove_tor', function() {
        var button_id = $(this).attr("id");
        $('#first_row' + button_id + '').remove();
        i--;
        $('#count').val(i);
    });
    $('#btn_add_tor').click(function() {
        $('#cek-pdf').append(
          '<div class="row js-append lic_rows" id="first_row' + i +
          '" > <div class="form-group col-lg-2"><input id="rencanaA'+ i +'"type="hidden"  name="rencana_aktivitas' +
          i +
          '" value=""/></div><div class="form-group col-lg-2"><input id="bulanA'+ i +'" type="hidden" name="bulan' +
          i +
          '" value=""></div> '
      );
      console.log("berhasil tambah");
        $('#count').val(i);
        $('#count').keyup(function(){
          var data = $(this).val();
          $('#count_aktivitas').val(data);
        });
    });
    // remove license row on clicking remove btn
});

</script>

<script>
$(document).ready(function(){
  var data = '<?= $nama ?>';

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
          '"  class="form-control name_list" aria-required="true" /></div> <div class="form-group col-lg-4"><label> Rincian Komponen Biaya </label><select id="rincian'+ i + '" name="rincian' +
          i +
          '"  class="form-control"> <option selected>pilih</option><?php foreach ($datasbm as $row) : ?><option value="<?= $row->nama_sbm ?>"> <?= $row->nama_sbm ?></option><?php endforeach;?></select></div> <div class="form-group col-lg-2"> <label> Volume</label><input id="volume' + i + '" type="text" class="form-control" name="volume' +
          i +
          '"   class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-3"> <label> Satuan</label><select id="satuan'+i+'" name="satuan' +
          i +
          '"  class="form-control"><option selected>pilih</option> <?php foreach ($datasingkatan as $row) : ?><option value="<?= $row->singkatan ?>"> <?= $row->singkatan ?></option><?php endforeach;?></select></div><div class="form-group col-lg-2"> <label> Jumlah</label><input id="jumlah' + i + '" type="text" class="form-control" name="jumlah' +
          i +
          '"  class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-3"> <label> Satuan</label> <select id="satuandua' +i+ '" name="satuandua' +
          i +
          '"  class="form-control"><option selected>pilih</option><?php foreach ($datasingkatan as $row) : ?><option value="<?= $row->singkatan ?>"> <?= $row->singkatan ?></option><?php endforeach;?></select> </div><div class="form-group col-lg-2"> <label> Total </label> <input id="'+ i +'" type="text" class="form-control" name="total' +
          i +
          '"  class="form-control name_list" aria-required="true" /> </div><div class="form-group col-lg-3"> <label> Satuan Ukur </label><select id="satukur1" name="satukur' +
          i +
          '"  class="form-control"><option selected>pilih</option><?php foreach ($datasingkatan as $row) : ?><option value="<?= $row->singkatan ?>"> <?= $row->singkatan ?></option><?php endforeach;?></select> </div><div class="form-group col-lg-2"> <label> Biaya Satuan</label><input id="nominal' + i + '" type="number" class="form-control" name="jumlah' +
          i +
          '"  class="form-control name_list" aria-required="true" /></div> <div class="form-group col-lg-4"> <label> Total </label> <input type="number" class=" form-control" name="totaldua' +
          i +
          '"  class="form-control name_list" aria-required="true" /><div class="form-group col-lg-4">  <button type="button" name="remove" id="' +
          i +
          '"class="btn btn-danger btn_remove">Remove</button>  </div>  </div>'
      );

        $('#license_count').val(i);
        if(parseInt(i)>10){
          $('#btn_add_license').attr('disabled');
          swal('RAB','Batas Maksimal 10','warning');
        }else {
          $('#btn_add_license').removeAttr('disabled');
        }

            $("#nominal2").keyup(function(){
          var nama = $("#rincian2").val();
          var inputNom2 = $(this).val();
          var totalsatu1 = $("#totalsatu2").val();
          console.log("dua bisa");
          $.ajax({
            type: 'POST',
            url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
            data: {nama: nama},
            dataType:'text',
            success: function(response){
              const data = JSON.parse(response)
              var nominal = data[0].nominal;

              if (parseInt(inputNom2) > parseInt(nominal)){

                $("#ke2").removeAttr('onclick');
                swal('RAB','data Biaya satuan lebih besar dari SBM','error');
              }else {

                $("#ke2").attr('onclick','run(2, 3)');

              }
            }, error: function(xhr,ajaxOptions, thrownError){
              console.log(thrownError);
              console.log(xhr);
              console.log(ajaxOptions);
            }
          });
        });

            $("#satuan2").change(function(){
              var nama = $("#rincian2").val();
              var satuan2 = $(this).val();
              console.log("satuan 2 berhasil")
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuan2 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#nominal3").keyup(function(){
              var nama = $("#rincian3").val();
              var inputNom2 = $(this).val();

              console.log("dua bisa");
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var nominal = data[0].nominal;

                  if (parseInt(inputNom2) > parseInt(nominal)){

                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data Biaya satuan lebih besar dari SBM','error');
                  }else {

                    $("#ke2").attr('onclick','run(2, 3)');

                  }
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#nominal4").keyup(function(){
              var nama = $("#rincian4").val();
              var inputNom2 = $(this).val();

              console.log("dua bisa");
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var nominal = data[0].nominal;
                  if (parseInt(inputNom2) > parseInt(nominal)){
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data Biaya satuan lebih besar dari SBM','error');
                  }else {
                    $("#ke2").attr('onclick','run(2, 3)');
                  }
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#nominal5").keyup(function(){
              var nama = $("#rincian5").val();
              var inputNom2 = $(this).val();

              console.log("dua bisa");
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var nominal = data[0].nominal;
                  if (parseInt(inputNom2) > parseInt(nominal)){
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data Biaya satuan lebih besar dari SBM','error');
                  }else {
                    $("#ke2").attr('onclick','run(2, 3)');
                  }
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#nominal6").keyup(function(){
              var nama = $("#rincian6").val();
              var inputNom2 = $(this).val();

              console.log("dua bisa");
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var nominal = data[0].nominal;
                  if (parseInt(inputNom2) > parseInt(nominal)){
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data Biaya satuan lebih besar dari SBM','error');
                  }else {
                    $("#ke2").attr('onclick','run(2, 3)');
                  }
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#nominal7").keyup(function(){
              var nama = $("#rincian7").val();
              var inputNom2 = $(this).val();

              console.log("dua bisa");
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var nominal = data[0].nominal;
                  if (parseInt(inputNom2) > parseInt(nominal)){
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data Biaya satuan lebih besar dari SBM','error');
                  }else {
                    $("#ke2").attr('onclick','run(2, 3)');
                  }
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#nominal8").keyup(function(){
              var nama = $("#rincian8").val();
              var inputNom2 = $(this).val();

              console.log("dua bisa");
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var nominal = data[0].nominal;
                  if (parseInt(inputNom2) > parseInt(nominal)){
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data Biaya satuan lebih besar dari SBM','error');
                  }else {
                    $("#ke2").attr('onclick','run(2, 3)');
                  }
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#nominal9").keyup(function(){
              var nama = $("#rincian9").val();
              var inputNom2 = $(this).val();

              console.log("dua bisa");
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var nominal = data[0].nominal;
                  if (parseInt(inputNom2) > parseInt(nominal)){
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data Biaya satuan lebih besar dari SBM','error');
                  }else {
                    $("#ke2").attr('onclick','run(2, 3)');
                  }
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#nominal10").keyup(function(){
              var nama = $("#rincian10").val();
              var inputNom2 = $(this).val();

              console.log("dua bisa");
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var nominal = data[0].nominal;
                  if (parseInt(inputNom2) > parseInt(nominal)){
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data Biaya satuan lebih besar dari SBM','error');
                  }else {
                    $("#ke2").attr('onclick','run(2, 3)');
                  }
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#nominal11").keyup(function(){
              var nama = $("#rincian11").val();
              var inputNom2 = $(this).val();

              console.log("dua bisa");
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var nominal = data[0].nominal;
                  if (parseInt(inputNom2) > parseInt(nominal)){
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data Biaya satuan lebih besar dari SBM','error');
                  }else {
                    $("#ke2").attr('onclick','run(2, 3)');
                  }
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#nominal12").keyup(function(){
              var nama = $("#rincian12").val();
              var inputNom2 = $(this).val();

              console.log("dua bisa");
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var nominal = data[0].nominal;
                  if (parseInt(inputNom2) > parseInt(nominal)){
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data Biaya satuan lebih besar dari SBM','error');
                  }else {
                    $("#ke2").attr('onclick','run(2, 3)');
                  }
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            /// satuan

            $("#satuan2").change(function(){
              var nama = $("#rincian2").val();
              var satuan1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuan1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuan3").change(function(){
              var nama = $("#rincian3").val();
              var satuan1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuan1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuan4").change(function(){
              var nama = $("#rincian4").val();
              var satuan1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuan1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuan5").change(function(){
              var nama = $("#rincian5").val();
              var satuan1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuan1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuan6").change(function(){
              var nama = $("#rincian6").val();
              var satuan1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuan1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuan7").change(function(){
              var nama = $("#rincian7").val();
              var satuan1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuan1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satua8").change(function(){
              var nama = $("#rincian8").val();
              var satuan1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuan1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satua9").change(function(){
              var nama = $("#rincian9").val();
              var satuan1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuan1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satua10").change(function(){
              var nama = $("#rincian10").val();
              var satuan1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuan1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satua11").change(function(){
              var nama = $("#rincian11").val();
              var satuan1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuan1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satua12").change(function(){
              var nama = $("#rincian12").val();
              var satuan1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuan1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

        ////////// satuan dua ////////////

            $("#satuandua2").change(function(){
              var nama = $("#rincian2").val();
              var satuandua1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuandua1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuandua3").change(function(){
              var nama = $("#rincian3").val();
              var satuandua1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuandua1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuandua3").change(function(){
              var nama = $("#rincian3").val();
              var satuandua1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuandua1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuandua4").change(function(){
              var nama = $("#rincian4").val();
              var satuandua1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuandua1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuandua5").change(function(){
              var nama = $("#rincian5").val();
              var satuandua1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuandua1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuandua6").change(function(){
              var nama = $("#rincian6").val();
              var satuandua1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuandua1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuandua7").change(function(){
              var nama = $("#rincian7").val();
              var satuandua1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuandua1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuandua8").change(function(){
              var nama =$("#rincian8").val();
              var satuandua1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuandua1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuandua9").change(function(){
              var nama =$("#rincian9").val();
              var satuandua1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuandua1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuandua10").change(function(){
              var nama =$("#rincian10").val();
              var satuandua1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuandua1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuandua11").change(function(){
              var nama =$("#rincian11").val();
              var satuandua1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuandua1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

            $("#satuandua12").change(function(){
              var nama =$("#rincian12").val();
              var satuandua1 = $(this).val();
              $.ajax({
                type: 'POST',
                url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
                data: {nama: nama},
                dataType:'text',
                success: function(response){
                  const data = JSON.parse(response)
                  var satuanSBM = data[0].satuan;
                  if (satuandua1 == satuanSBM){
                    $("#ke2").attr('onclick','run(2, 3)');
                  }else {
                    $("#ke2").removeAttr('onclick');
                    swal('RAB','data satuan tidak sesuai SBM','error');
                  }
                  //console.log(tes);
                }, error: function(xhr,ajaxOptions, thrownError){
                  console.log(thrownError);
                  console.log(xhr);
                  console.log(ajaxOptions);
                }
              });
            });

        ////////// Satuan Ukur ///////////

        $("#satukur2").change(function(){
          var nama = $("#rincian2").val();
          var satukur1 = $(this).val();
          $.ajax({
            type: 'POST',
            url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
            data: {nama: nama},
            dataType:'text',
            success: function(response){
              const data = JSON.parse(response)
              var satuanSBM = data[0].satuan;
              if (satukur1 == satuanSBM){
                $("#ke2").attr('onclick','run(2, 3)');
              }else {
                $("#ke2").removeAttr('onclick');
                swal('RAB','data satuan tidak sesuai SBM','error');
              }
              //console.log(tes);
            }, error: function(xhr,ajaxOptions, thrownError){
              console.log(thrownError);
              console.log(xhr);
              console.log(ajaxOptions);
            }
          });
        });

        $("#satukur3").change(function(){
          var nama = $("#rincian3").val();
          var satukur1 = $(this).val();
          $.ajax({
            type: 'POST',
            url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
            data: {nama: nama},
            dataType:'text',
            success: function(response){
              const data = JSON.parse(response)
              var satuanSBM = data[0].satuan;
              if (satukur1 == satuanSBM){
                $("#ke2").attr('onclick','run(2, 3)');
              }else {
                $("#ke2").removeAttr('onclick');
                swal('RAB','data satuan tidak sesuai SBM','error');
              }
              //console.log(tes);
            }, error: function(xhr,ajaxOptions, thrownError){
              console.log(thrownError);
              console.log(xhr);
              console.log(ajaxOptions);
            }
          });
        });

        $("#satukur4").change(function(){
          var nama = $("#rincian4").val();
          var satukur1 = $(this).val();
          $.ajax({
            type: 'POST',
            url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
            data: {nama: nama},
            dataType:'text',
            success: function(response){
              const data = JSON.parse(response)
              var satuanSBM = data[0].satuan;
              if (satukur1 == satuanSBM){
                $("#ke2").attr('onclick','run(2, 3)');
              }else {
                $("#ke2").removeAttr('onclick');
                swal('RAB','data satuan tidak sesuai SBM','error');
              }
              //console.log(tes);
            }, error: function(xhr,ajaxOptions, thrownError){
              console.log(thrownError);
              console.log(xhr);
              console.log(ajaxOptions);
            }
          });
        });

        $("#satukur5").change(function(){
          var nama = $("#rincian5").val();
          var satukur1 = $(this).val();
          $.ajax({
            type: 'POST',
            url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
            data: {nama: nama},
            dataType:'text',
            success: function(response){
              const data = JSON.parse(response)
              var satuanSBM = data[0].satuan;
              if (satukur1 == satuanSBM){
                $("#ke2").attr('onclick','run(2, 3)');
              }else {
                $("#ke2").removeAttr('onclick');
                swal('RAB','data satuan tidak sesuai SBM','error');
              }
              //console.log(tes);
            }, error: function(xhr,ajaxOptions, thrownError){
              console.log(thrownError);
              console.log(xhr);
              console.log(ajaxOptions);
            }
          });
        });

        $("#satukur6").change(function(){
          var nama = $("#rincian6").val();
          var satukur1 = $(this).val();
          $.ajax({
            type: 'POST',
            url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
            data: {nama: nama},
            dataType:'text',
            success: function(response){
              const data = JSON.parse(response)
              var satuanSBM = data[0].satuan;
              if (satukur1 == satuanSBM){
                $("#ke2").attr('onclick','run(2, 3)');
              }else {
                $("#ke2").removeAttr('onclick');
                swal('RAB','data satuan tidak sesuai SBM','error');
              }
              //console.log(tes);
            }, error: function(xhr,ajaxOptions, thrownError){
              console.log(thrownError);
              console.log(xhr);
              console.log(ajaxOptions);
            }
          });
        });

        $("#satukur7").change(function(){
          var nama = $("#rincian7").val();
          var satukur1 = $(this).val();
          $.ajax({
            type: 'POST',
            url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
            data: {nama: nama},
            dataType:'text',
            success: function(response){
              const data = JSON.parse(response)
              var satuanSBM = data[0].satuan;
              if (satukur1 == satuanSBM){
                $("#ke2").attr('onclick','run(2, 3)');
              }else {
                $("#ke2").removeAttr('onclick');
                swal('RAB','data satuan tidak sesuai SBM','error');
              }
              //console.log(tes);
            }, error: function(xhr,ajaxOptions, thrownError){
              console.log(thrownError);
              console.log(xhr);
              console.log(ajaxOptions);
            }
          });
        });

        $("#satukur8").change(function(){
          var nama = $("#rincian8").val();
          var satukur1 = $(this).val();
          $.ajax({
            type: 'POST',
            url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
            data: {nama: nama},
            dataType:'text',
            success: function(response){
              const data = JSON.parse(response)
              var satuanSBM = data[0].satuan;
              if (satukur1 == satuanSBM){
                $("#ke2").attr('onclick','run(2, 3)');
              }else {
                $("#ke2").removeAttr('onclick');
                swal('RAB','data satuan tidak sesuai SBM','error');
              }
              //console.log(tes);
            }, error: function(xhr,ajaxOptions, thrownError){
              console.log(thrownError);
              console.log(xhr);
              console.log(ajaxOptions);
            }
          });
        });

        $("#satukur9").change(function(){
          var nama = $("#rincian9").val();
          var satukur1 = $(this).val();
          $.ajax({
            type: 'POST',
            url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
            data: {nama: nama},
            dataType:'text',
            success: function(response){
              const data = JSON.parse(response)
              var satuanSBM = data[0].satuan;
              if (satukur1 == satuanSBM){
                $("#ke2").attr('onclick','run(2, 3)');
              }else {
                $("#ke2").removeAttr('onclick');
                swal('RAB','data satuan tidak sesuai SBM','error');
              }
              //console.log(tes);
            }, error: function(xhr,ajaxOptions, thrownError){
              console.log(thrownError);
              console.log(xhr);
              console.log(ajaxOptions);
            }
          });
        });

        $("#satukur10").change(function(){
          var nama = $("#rincian10").val();
          var satukur1 = $(this).val();
          $.ajax({
            type: 'POST',
            url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
            data: {nama: nama},
            dataType:'text',
            success: function(response){
              const data = JSON.parse(response)
              var satuanSBM = data[0].satuan;
              if (satukur1 == satuanSBM){
                $("#ke2").attr('onclick','run(2, 3)');
              }else {
                $("#ke2").removeAttr('onclick');
                swal('RAB','data satuan tidak sesuai SBM','error');
              }
              //console.log(tes);
            }, error: function(xhr,ajaxOptions, thrownError){
              console.log(thrownError);
              console.log(xhr);
              console.log(ajaxOptions);
            }
          });
        });

        $("#satukur11").change(function(){
          var nama = $("#rincian11").val();
          var satukur1 = $(this).val();
          $.ajax({
            type: 'POST',
            url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
            data: {nama: nama},
            dataType:'text',
            success: function(response){
              const data = JSON.parse(response)
              var satuanSBM = data[0].satuan;
              if (satukur1 == satuanSBM){
                $("#ke2").attr('onclick','run(2, 3)');
              }else {
                $("#ke2").removeAttr('onclick');
                swal('RAB','data satuan tidak sesuai SBM','error');
              }
              //console.log(tes);
            }, error: function(xhr,ajaxOptions, thrownError){
              console.log(thrownError);
              console.log(xhr);
              console.log(ajaxOptions);
            }
          });
        });

        $("#satukur12").change(function(){
          var nama = $("#rincian12").val();
          var satukur1 = $(this).val();
          $.ajax({
            type: 'POST',
            url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
            data: {nama: nama},
            dataType:'text',
            success: function(response){
              const data = JSON.parse(response)
              var satuanSBM = data[0].satuan;
              if (satukur1 == satuanSBM){
                $("#ke2").attr('onclick','run(2, 3)');
              }else {
                $("#ke2").removeAttr('onclick');
                swal('RAB','data satuan tidak sesuai SBM','error');
              }
              //console.log(tes);
            }, error: function(xhr,ajaxOptions, thrownError){
              console.log(thrownError);
              console.log(xhr);
              console.log(ajaxOptions);
            }
          });
        });

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
      var u = 1;
      $('#btn_add_license').click(function() {
        u++;

        var tot;
        var jumlah;
        var vlm;
          $("#jumlah"+u+"").keyup(function() {
              var jmlh = $(this).val();
               jumlah = jmlh;
              console.log('jumlah = ', jmlh);


          });
          $("#volume"+u+"").keyup(function() {
              var volume = $(this).val();
               vlm = volume;
              console.log('volume = ', vlm);
            });
            $("#jumlah"+u+", #volume"+u+"").keyup(function() {
              hasil = parseInt(jumlah) * parseInt(vlm);
              tot = hasil;
            });
        });

      $("#jumlah1, #volume1").keyup(function() {
          var volume  = $("#volume1").val();
          var jmlh = $("#jumlah1").val();
          var tot = parseInt(volume) * parseInt(jmlh);
          $("#totalsatu1").val(tot);
      });
        $("#totalsatu1, #nominal").keyup(function() {
            var harga  = $("#nominal").val();
            var jumlah = $("#totalsatu1").val();
            var total = parseInt(harga) * parseInt(jumlah);
            $("#hasilp").val(total);
        });
    });
</script>
<script>
ambilData();
ambilDataSatuan1();
ambilDataSatuandua1();
ambilDataSatukur1();
 function ambilData(){
    $("#nominal").change(function(){
      var nama = $("#rincian").val();
      var inputNom = $(this).val();
      var totalsatu1 = $("#totalsatu1").val();
      $.ajax({
        type: 'POST',
        url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
        data: {nama: nama},
        dataType:'text',
        success: function(response){
          const data = JSON.parse(response)
          var nominal = data[0].nominal;

          if (parseInt(inputNom) > parseInt(nominal)){

            $("#ke2").removeAttr('onclick');
            swal('RAB','data Biaya satuan lebih besar dari SBM','error');
          }else {

            $("#ke2").attr('onclick','run(2, 3)');

          }
        }, error: function(xhr,ajaxOptions, thrownError){
          console.log(thrownError);
          console.log(xhr);
          console.log(ajaxOptions);
        }
      });
    });

    //// ke 2

  };

  function ambilDataSatuan1(){
      $("#satuan1").change(function(){
        var nama = $("#rincian").val();
        var satuan1 = $(this).val();
        $.ajax({
          type: 'POST',
          url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
          data: {nama: nama},
          dataType:'text',
          success: function(response){
            const data = JSON.parse(response)
            var satuanSBM = data[0].satuan;
            if (satuan1 == satuanSBM){
              $("#ke2").attr('onclick','run(2, 3)');
            }else {
              $("#ke2").removeAttr('onclick');
              swal('RAB','data satuan tidak sesuai SBM','error');
            }
            //console.log(tes);
          }, error: function(xhr,ajaxOptions, thrownError){
            console.log(thrownError);
            console.log(xhr);
            console.log(ajaxOptions);
          }
        });
      });
    };

    function ambilDataSatuandua1(){
        $("#satuandua1").change(function(){
          var nama = $("#rincian").val();
          var satuandua1 = $(this).val();
          $.ajax({
            type: 'POST',
            url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
            data: {nama: nama},
            dataType:'text',
            success: function(response){
              const data = JSON.parse(response)
              var satuanSBM = data[0].satuan;
              if (satuandua1 == satuanSBM){
                $("#ke2").attr('onclick','run(2, 3)');
              }else {
                $("#ke2").removeAttr('onclick');
                swal('RAB','data satuan tidak sesuai SBM','error');
              }
              //console.log(tes);
            }, error: function(xhr,ajaxOptions, thrownError){
              console.log(thrownError);
              console.log(xhr);
              console.log(ajaxOptions);
            }
          });
        });
      };
      function ambilDataSatukur1(){
          $("#satukur1").change(function(){
            var nama = $("#rincian").val();
            var satukur1 = $(this).val();
            $.ajax({
              type: 'POST',
              url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
              data: {nama: nama},
              dataType:'text',
              success: function(response){
                const data = JSON.parse(response)
                var satuanSBM = data[0].satuan;
                if (satukur1 == satuanSBM){
                  $("#ke2").attr('onclick','run(2, 3)');
                }else {
                  $("#ke2").removeAttr('onclick');
                  swal('RAB','data satuan tidak sesuai SBM','error');
                }
                //console.log(tes);
              }, error: function(xhr,ajaxOptions, thrownError){
                console.log(thrownError);
                console.log(xhr);
                console.log(ajaxOptions);
              }
            });
          });

          $("#nominal2").change(function(){
            var nama = $("#rincian2").val();
            var inputNom = $(this).val();
            console.log(nama);
            $.ajax({
              type: 'POST',
              url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
              data: {nama: nama},
              dataType:'text',
              success: function(response){
                const data = JSON.parse(response)
                var nominal = data[0].nominal;
                if (parseInt(inputNom) > parseInt(nominal)){
                  $("#ke2").removeAttr('onclick');
                  swal('RAB','data Biaya satuan lebih besar dari SBM','error');
                }else {
                  $("#ke2").attr('onclick','run(2, 3)');
                }
              }, error: function(xhr,ajaxOptions, thrownError){
                console.log(thrownError);
                console.log(xhr);
                console.log(ajaxOptions);
              }
            });
          });
        };
</script>
<!-- RAB ke 2 -->
<script>

ambilDataSatuan2();
ambilDataSatuandua2();
ambilDataSatukur2();



  function ambilDataSatuan2(){
      $("#satuan1").change(function(){
        var nama = $("#rincian").val();
        var satuan1 = $(this).val();
        $.ajax({
          type: 'POST',
          url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
          data: {nama: nama},
          dataType:'text',
          success: function(response){
            const data = JSON.parse(response)
            var satuanSBM = data[0].satuan;
            if (satuan1 == satuanSBM){
              $("#ke2").attr('onclick','run(2, 3)');
            }else {
              $("#ke2").removeAttr('onclick');
              swal('RAB','data satuan tidak sesuai SBM','error');
            }
            //console.log(tes);
          }, error: function(xhr,ajaxOptions, thrownError){
            console.log(thrownError);
            console.log(xhr);
            console.log(ajaxOptions);
          }
        });
      });
    };

    function ambilDataSatuandua2(){
        $("#satuandua1").change(function(){
          var nama = $("#rincian").val();
          var satuandua1 = $(this).val();
          $.ajax({
            type: 'POST',
            url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
            data: {nama: nama},
            dataType:'text',
            success: function(response){
              const data = JSON.parse(response)
              var satuanSBM = data[0].satuan;
              if (satuandua1 == satuanSBM){
                $("#ke2").attr('onclick','run(2, 3)');
              }else {
                $("#ke2").removeAttr('onclick');
                swal('RAB','data satuan tidak sesuai SBM','error');
              }
              //console.log(tes);
            }, error: function(xhr,ajaxOptions, thrownError){
              console.log(thrownError);
              console.log(xhr);
              console.log(ajaxOptions);
            }
          });
        });
      };
      function ambilDataSatukur2(){
          $("#satukur1").change(function(){
            var nama = $("#rincian").val();
            var satukur1 = $(this).val();
            $.ajax({
              type: 'POST',
              url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
              data: {nama: nama},
              dataType:'text',
              success: function(response){
                const data = JSON.parse(response)
                var satuanSBM = data[0].satuan;
                if (satukur1 == satuanSBM){
                  $("#ke2").attr('onclick','run(2, 3)');
                }else {
                  $("#ke2").removeAttr('onclick');
                  swal('RAB','data satuan tidak sesuai SBM','error');
                }
                //console.log(tes);
              }, error: function(xhr,ajaxOptions, thrownError){
                console.log(thrownError);
                console.log(xhr);
                console.log(ajaxOptions);
              }
            });
          });
        };
</script>
