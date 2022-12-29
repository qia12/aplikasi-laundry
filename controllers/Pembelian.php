<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Global_m');
	}

	public function index()
	{
        $this->load->view('header_v');
        $this->load->view('pembelian_v');
        $this->load->view('footer_v');
	}
	public function getpembelian(){
		$this->Global_m->getpembelian();
	}
	public function SimpanData(){
		$kd_pembelian = $this->input->post('kd_pembelian');
		$kd_supplier = $this->input->post('kd_supplier');
		$qty = $this->input->post('qty');
		$total_pembayaran = $this->input->post('total_pembayaran');
		$mata_uang = $this->input->post('mata_uang');
		$tgl_pembelian = $this->input->post('tgl_pembelian');
		$kd_barang = $this->input->post('kd_barang');
 
		$data= array (
			'kd_pembelian' => $kd_pembelian,
			'kd_supplier' => $kd_supplier,
			'qty' => $qty,
			'total_pembayaran' => $total_pembayaran,
			'mata_uang' => $mata_uang,
			'tgl_pembelian' => $tgl_pembelian,
			'kd_barang' => $kd_barang
		);
		
		$this->Global_m->input_data($data,'pembelian');

		echo '{"Konfirmasi":"Data Berhasil Disimpan"}';
    }
    
	public function UpdateData(){
		$kd_pembelian = $this->input->post('kd_pembelian');
		$kd_supplier = $this->input->post('kd_supplier');
		$qty = $this->input->post('qty');
		$total_pembayaran = $this->input->post('total_pembayaran');
		$mata_uang = $this->input->post('mata_uang');
		$tgl_pembelian = $this->input->post('tgl_pembelian');
		$kd_barang = $this->input->post('kd_barang');
		
		$id_kd_pembelian = $this->input->get('id_kd_pembelian');

		$data= array (
			'kd_pembelian' => $kd_pembelian,
			'kd_supplier' => $kd_supplier,
			'qty' => $qty,
			'total_pembayaran' => $total_pembayaran,
			'mata_uang' => $mata_uang,
			'tgl_pembelian' => $tgl_pembelian,
			'kd_barang' => $kd_barang
		);

		$where = array (
			'kd_pembelian' => $id_kd_pembelian
		);
		$this->Global_m->update_data($where,$data,'pembelian');
		
		echo '{"Konfirmasi":"Data Berhasil Diupdate"}';
	}
	public function HapusData(){
		$kd_pembelian = $this->input->post('kd_pembelian');
		$where = array (
			'kd_pembelian' => $kd_pembelian
		);
		$this->Global_m->hapus_data($where,'pembelian');
		echo '{"success":true}';
	}
}
?>