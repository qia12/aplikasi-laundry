<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Input</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/bootsrap/'); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
  <form action="<?php echo base_url('Formpembelian/input_data')?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Pembelian</label>
    <input type="kd_pembelian" class="form-control" id="kd_pembelian" name="kd_pembelian" placeholder="Masukan Kode Pembelian ">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kode Supplier</label>
    <input type="kd_supplier" class="form-control" id="kd_supplier" name="kd_supplier" placeholder="Masukan Kode Supplier">
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Qty</label>
    <input type="qty" class="form-control" id="qty" name="qty" placeholder="Masukan Qty">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Total Pembayaran</label>
    <input type="total_pembayaran" class="form-control" id="total_pembayaran" name="total_pembayaran" placeholder="Masukan Total Pembayaran">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mata Uang</label>
    <input type="mata_uang" class="form-control" id="mata_uang" name="mata_uang" placeholder="Masukan Mata Uang">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Pembelian</label>
    <input type="tgl_pembelian" class="form-control" id="tgl_pembelian" name="tgl_pembelian" placeholder="Masukan Tanggal Pembelian">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Barang</label>
    <input type="kd_barang" class="form-control" id="kd_barang" name="kd_barang" placeholder="Masukan Kode Barang">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/easyui/'); ?>js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/bootsrap/'); ?>js/bootstrap.min.js"></script>
  </body>
</html>