<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forminput extends CI_Controller {

    public function construct()
    {
        parent::construct();
        $this->load->model('Global_m');
    }
public function index()
{
    $this->load->view('forminput_v');
}
public function input_data(){
    $data = [
        'kd_barang' => htmlspecialchars($this->input->post('kd_barang', true)),
        'nm_barang' => htmlspecialchars($this->input->post('nm_barang', true)),
        'jml_stok' => htmlspecialchars($this->input->post('jml_stok', true)),
        'satuan' => htmlspecialchars($this->input->post('satuan', true)),

        ];
    $this->db->insert('barang', $data);
    redirect('Barang');
}
}
