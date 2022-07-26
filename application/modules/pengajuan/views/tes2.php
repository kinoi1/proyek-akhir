<!DOCTYPE html>
<html>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <div>
  <label> Rincian Komponen Biaya </label>
  <select id="rincian" name="rincian">
    <option selected>pilih</option>
    <?php foreach ($datasbm as $row) : ?>
    <option value="<?= $row->nama_sbm ?>"> <?= $row->nama_sbm ?></option>
    <?php endforeach;       ?>
  </select>
  </div>
<input type="number" name="nominal" id="nominal" placeholder="enter name">

</body>
</html>
<script type="text/javascript">
ambilData();
function ambilData(){
    $("#nominal").change(function(){
      var nama = $("#rincian").val();
      var inputNom = $(this).val();

      $.ajax({
        type: 'POST',
         url: '<?= base_url().'pengajuan/pengajuan/tes3';?>',
        data: {nama: nama},
        dataType:'text',
        success: function(response){
          const data = JSON.parse(response)
          var nominal = data[0].nominal;
          if (inputNom > nominal){
            alert('data tidak valid');
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
