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
  <form action="<?php echo base_url('Formtransaksi/input_data')?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Kode Transaksi</label>
    <input type="kd_transaksi" class="form-control" id="kd_transaksi" name="kd_transaksi" placeholder="Masukan Kode Transaksi ">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kode Karyawan</label>
    <input type="kd_karyawan" class="form-control" id="kd_karyawan" name="kd_karyawan" placeholder="Masukan Kode Karyawan">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kode Konsumen</label>
    <input type="kd_konsumen" class="form-control" id="kd_konsumen" name="kd_konsumen" placeholder="Masukan Kode Konsumen">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Kode Jenis</label>
    <input type="kd_jenis" class="form-control" id="kd_jenis" name="kd_jenis" placeholder="Masukan Kode Jenis">
  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Berat</label>
    <input type="berat" class="form-control" id="berat" name="berat" placeholder="Masukan Berat">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Satuan</label>
    <input type="satuan" class="form-control" id="satuan" name="satuan" placeholder="Masukan Satuan">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Transaksi</label>
    <input type="tgl_transaksi" class="form-control" id="tgl_transaksi" name="tgl_transaksi" placeholder="Masukan Tanggal Transaksi">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Ambil</label>
    <input type="tgl_ambil" class="form-control" id="tgl_ambil" name="tgl_ambil" placeholder="Masukan Tanggal Ambil">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Diskon</label>
    <input type="diskon" class="form-control" id="diskon" name="diskon" placeholder="Masukan Diskon">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Bayar</label>
    <input type="tgl_bayar" class="form-control" id="tgl_bayar" name="tgl_bayar" placeholder="Masukan Tanggal Bayar">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mata Uang</label>
    <input type="mata_uang" class="form-control" id="mata_uang" name="mata_uang" placeholder="Masukan Mata Uang">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Pengguna</label>
    <input type="nama_pengguna" class="form-control" id="nama_pengguna" name="nama_pengguna" placeholder="Masukan Nama Pengguna">
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