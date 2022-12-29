<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Searchjenis extends CI_Controller {
  function index()
 {
  $this->load->view('searchjenis_v');
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
  $data = $this->Global_m->fetch_data_jenis($query);
  $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
       <th>Kode Jenis</th>
       <th>Nama</th>
       <th>Tarif</th>
       <th>Mata Uang</th>
      </tr>
  ';
  if($data->num_rows() > 0)
  {
   foreach($data->result() as $row)
   {
    $output .= '
      <tr>
       <td>'.$row->kd_jenis.'</td>
       <td>'.$row->nm_jenis.'</td>
       <td>'.$row->tarif.'</td>
       <td>'.$row->mata_uang.'</td>
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
