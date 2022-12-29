<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formpembelian extends CI_Controller {

    public function construct()
    {
        parent::construct();
        $this->load->model('Global_m');
    }
public function index()
{
    $this->load->view('formpembelian_v');
}
public function input_data(){
    $data = [
        'kd_pembelian' => htmlspecialchars($this->input->post('kd_pembelian', true)),
        'kd_supplier' => htmlspecialchars($this->input->post('kd_supplier', true)),
        'qty' => htmlspecialchars($this->input->post('qty', true)),
        'total_pembayaran' => htmlspecialchars($this->input->post('total_pembayaran', true)),
        'mata_uang' => htmlspecialchars($this->input->post('mata_uang', true)),
        'tgl_pembelian' => htmlspecialchars($this->input->post('tgl_pembelian', true)),
        'kd_barang' => htmlspecialchars($this->input->post('kd_barang', true))
        ];
    $this->db->insert('pembelian', $data);
    redirect('Pembelian');
}
}
