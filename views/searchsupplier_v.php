<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Pencarian Data Supplier</title>
  <script src="<?php echo base_url(); ?>assets/easyui/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/bootsrap/js/bootstrap.min.js"></script>
  <link href="<?php echo base_url(); ?>assets/bootsrap/css/bootstrap.min.css" rel="stylesheet" />
 </head>
 <body>
  <div class="container">
   <br />
   <br />
   <br />
   <h2 Align="center">Pencarian Data Supplier</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Masukkan Data Yang Dicari" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
  <div style="clear:both"></div>
  <br />
  <br />
  <br />
  <br />
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>Searchsupplier/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
