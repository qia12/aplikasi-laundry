<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formkonsumen extends CI_Controller {

    public function construct()
    {
        parent::construct();
        $this->load->model('Global_m');
    }
public function index()
{
    $this->load->view('formkonsumen_v');
}
public function input_data(){
    $data = [
        'kd_konsumen' => htmlspecialchars($this->input->post('kd_konsumen', true)),
        'nm_konsumen' => htmlspecialchars($this->input->post('nm_konsumen', true)),
        'alamat' => htmlspecialchars($this->input->post('alamat', true)),
        ];
    $this->db->insert('konsumen', $data);
    redirect('Konsumen');
}
}
