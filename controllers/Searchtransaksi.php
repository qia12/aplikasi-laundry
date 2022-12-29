<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Searchtransaksi extends CI_Controller {
  function index()
 {
  $this->load->view('searchtransaksi_v');
 } 
 function fetch()
 {
  $output = '';
  $query = '';
  $this->load->model('Global_m');
  if($this->input->post('query'))
  {
   $query = $this->input->post('query');
  }
  $data = $this->Global_m->fetch_data_transaksi($query);
  $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
       <th>Kode Transaksi</th>
       <th>Kode Karyawan</th>
       <th>Kode Konsumen</th>
       <th>Kode Jenis</th>
       <th>Berat</th>
       <th>Satuan</th>
       <th>Tanggal Transaksi</th>
       <th>Tanggal Ambil</th>
       <th>Diskon</th>
       <th>Tanggal Bayar</th>
       <th>Mata Uang</th>
       <th>Nama Pengguna</th>
      </tr>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      <tr>
       <td>'.$row->kd_transaksi.'</td>
       <td>'.$row->kd_karyawan.'</td>
       <td>'.$row->kd_konsumen.'</td>
       <td>'.$row->kd_jenis.'</td>
       <td>'.$row->berat.'</td>
       <td>'.$row->satuan.'</td>
       <td>'.$row->tgl_transaksi.'</td>
       <td>'.$row->tgl_ambil.'</td>
       <td>'.$row->diskon.'</td>
       <td>'.$row->tgl_bayar.'</td>
       <td>'.$row->mata_uang.'</td>
       <td>'.$row->nama_pengguna.'</td>
      </tr>
    ';
   }
  }
  else
  {
   $output .= '<tr>
       <td colspan="5">No Data Found</td>
      </tr>';
  }
  $output .= '</table>';
  echo $output;
 }
 
}
