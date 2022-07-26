<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>

    <label>Alat angkut</label>
          <fieldset class="form-group">
          <select  id="alat" class="kondisikan form-control"  multiple="multiple">
            <option>Pilih Alat Angkut</option>
            <option value="Mobil">Mobil</option>
            <option value="Kereta">Kereta</option>
            <option value="Pesawat">Pesawat</option>
          </select>
        </fieldset>

          <div id="dynamic_input" lass="row match-height" >

          </div>
          <button>Reset</button>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>
</html>



<script type="text/javascript">
    $(document).ready(function(){
      $(function() {
          $('#alat').change(function(e) {
              var valAlat = $(e.target).val();
              for (var i = 0; i < valAlat.length; i++) {
                if(valAlat[i] == "Mobil"){
                  $('#dynamic_input').append('<label> mobil </label>');
                  $('<input>').attr({
                      type: 'text',
                      id: '',
                      class: 'form-control',
                      name: 'mobil'
                  }).appendTo('#dynamic_input');
                }else if(valAlat[i] == "Kereta"){
                  $('#dynamic_input').append('<label> Kereta </label>');
                  $('<input>').attr({
                      type: 'text',
                      id: '',
                      class: 'form-control',
                      name: 'kereta'
                  }).appendTo('#dynamic_input');
                }else if(valAlat[i] == "Pesawat"){
                  $('#dynamic_input').append('<label> Pesawat </label>');
                  $('<input>').attr({
                      type: 'text',
                      id: '',
                      class: 'form-control',
                      name: 'pesawat'
                  }).appendTo('#dynamic_input');
                }
              }
            });
          });
          $("button").click(function(){
              $("#dynamic_input").empty();
            });
          });
      </script>

<script>
$(function() {
    $('#fruits').change(function(e) {
        var selected = $(e.target).val();
        for (var i = 0; i <= selected.length; i++) {
          if(selected[i] == "apple" || selected[i] == "banana" || selected[i] == "watermelon"){
            console.log("buah manis");
          }else{
            console.log("buah Asem");
          }
        }


    });
});
</script>
