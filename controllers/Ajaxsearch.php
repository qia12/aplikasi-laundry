<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxsearch extends CI_Controller {
  function index()
 {
  $this->load->view('pencarian_v');
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
  $data = $this->Global_m->fetch_data($query);
  $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
       <th>Kode Barang</th>
       <th>Nama</th>
       <th>Jumlah Stok</th>
       <th>Satuan</th>
      </tr>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      <tr>
       <td>'.$row->kd_barang.'</td>
       <td>'.$row->nm_barang.'</td>
       <td>'.$row->jml_stok.'</td>
       <td>'.$row->satuan.'</td>
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
