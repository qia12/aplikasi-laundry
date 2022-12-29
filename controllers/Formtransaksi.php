<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formtransaksi extends CI_Controller {

    public function construct()
    {
        parent::construct();
        $this->load->model('Global_m');
    }
public function index()
{
    $this->load->view('formtransaksi_v');
}
public function input_data(){
    $data = [
        'kd_transaksi' => htmlspecialchars($this->input->post('kd_transaksi', true)),
        'kd_karyawan' => htmlspecialchars($this->input->post('kd_karyawan', true)),
        'kd_konsumen' => htmlspecialchars($this->input->post('kd_konsumen', true)),
        'kd_jenis' => htmlspecialchars($this->input->post('kd_jenis', true)),
        'berat' => htmlspecialchars($this->input->post('berat', true)),
        'satuan' => htmlspecialchars($this->input->post('satuan', true)),
        'tgl_transaksi' => htmlspecialchars($this->input->post('tgl_transaksi', true)),
        'tgl_ambil' => htmlspecialchars($this->input->post('tgl_ambil', true)),
        'diskon' => htmlspecialchars($this->input->post('diskon', true)),
        'tgl_bayar' => htmlspecialchars($this->input->post('tgl_bayar', true)),
        'mata_uang' => htmlspecialchars($this->input->post('mata_uang', true)),
        'nama_pengguna' => htmlspecialchars($this->input->post('nama_pengguna', true))
        ];
    $this->db->insert('transaksi', $data);
    redirect('Transaksi');
}
}
