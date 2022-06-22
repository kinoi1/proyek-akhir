
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<select id="itemcondition" class="itemconditionmenu">
  <option value="">Choose Condition</option>
  <option value="New">New</option>
  <option value="Used">Used</option>
</select>
<input id="meta_itemcondition" type="text" value="New">

<script>
$( document ).ready(function() {
  var conditionofitem = $("#meta_itemcondition").val();
  $(".itemconditionmenu").val(conditionofitem);
});

$(".itemconditionmenu").change(function() {
var conditionofitem = $(this).val();
if(conditionofitem == '') {
    $("#meta_itemcondition").val('Choose Condition');
 } else {
    $("#meta_itemcondition").val(conditionofitem);
 }
});
</script>
