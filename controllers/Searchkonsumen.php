<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Searchkonsumen extends CI_Controller {
  function index()
 {
  $this->load->view('searchkonsumen_v');
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
  $data = $this->Global_m->fetch_data_konsumen($query);
  $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
       <th>Kode Konsumen</th>
       <th>Nama</th>
       <th>Alamat</th>
      </tr>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      <tr>
       <td>'.$row->kd_konsumen.'</td>
       <td>'.$row->nm_konsumen.'</td>
       <td>'.$row->alamat.'</td>
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
