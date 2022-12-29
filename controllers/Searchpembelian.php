<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Searchpembelian extends CI_Controller {
  function index()
 {
  $this->load->view('searchpembelian_v');
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
  $data = $this->Global_m->fetch_data_pembelian($query);
  $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
       <th>Kode Pembelian</th>
       <th>Kode Supplier</th>
       <th>Qty</th>
       <th>Total Pembayaran</th>
       <th>Mata Uang</th>
       <th>Tanggal Pembelian</th>
       <th>Kode Barang</th>
      </tr>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      <tr>
       <td>'.$row->kd_pembelian.'</td>
       <td>'.$row->kd_supplier.'</td>
       <td>'.$row->qty.'</td>
       <td>'.$row->total_pembayaran.'</td>
       <td>'.$row->mata_uang.'</td>
       <td>'.$row->tgl_pembelian.'</td>
       <td>'.$row->kd_barang.'</td>
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
