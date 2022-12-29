<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Global_m');
	}

	public function index()
	{
        $this->load->view('header_v');
        $this->load->view('transaksi_v');
        $this->load->view('footer_v');
	}
	public function gettransaksi(){
		$this->Global_m->gettransaksi();
	}
	public function SimpanData(){
		$kd_transaksi = $this->input->post('kd_transaksi');
		$kd_karyawan = $this->input->post('kd_karyawan');
		$kd_konsumen = $this->input->post('kd_konsumen');
		$kd_jenis = $this->input->post('kd_jenis');
		$berat = $this->input->post('berat');
		$satuan = $this->input->post('satuan');
        $tgl_transaksi = $this->input->post('tgl_transaksi');
        $tgl_ambil = $this->input->post('tgl_ambil');
        $diskon = $this->input->post('diskon');
        $tgl_bayar = $this->input->post('tgl_bayar');
        $mata_uang = $this->input->post('mata_uang');
        $nama_pengguna = $this->input->post('nama_pengguna');
        
 
		$data= array (
			'kd_transaksi' => $kd_transaksi,
			'kd_karyawan' => $kd_karyawan,
			'kd_konsumen' => $kd_konsumen,
			'kd_jenis' => $kd_jenis,
			'berat' => $berat,
			'satuan' => $satuan,
            'tgl_transaksi' => $tgl_transaksi,
            'tgl_ambil' => $tgl_ambil,
            'diskon' => $diskon,
            'tgl_bayar' => $tgl_bayar,
            'mata_uang' => $mata_uang,
            'nama_pengguna' => $nama_pengguna
		);
		
		$this->Global_m->input_data($data,'transaksi');

		echo '{"Konfirmasi":"Data Berhasil Disimpan"}';
    }
    
	public function UpdateData(){
		$kd_transaksi = $this->input->post('kd_transaksi');
		$kd_karyawan = $this->input->post('kd_karyawan');
		$kd_konsumen = $this->input->post('kd_konsumen');
		$kd_jenis = $this->input->post('kd_jenis');
		$berat = $this->input->post('berat');
		$satuan = $this->input->post('satuan');
        $tgl_transaksi = $this->input->post('tgl_transaksi');
        $tgl_ambil = $this->input->post('tgl_ambil');
        $diskon = $this->input->post('diskon');
        $tgl_bayar = $this->input->post('tgl_bayar');
        $mata_uang = $this->input->post('mata_uang');
        $nama_pengguna = $this->input->post('nama_pengguna');
		
		$id_kd_transaksi = $this->input->get('id_kd_transaksi');

		$data= array (
			'kd_transaksi' => $kd_transaksi,
			'kd_karyawan' => $kd_karyawan,
			'kd_konsumen' => $kd_konsumen,
			'kd_jenis' => $kd_jenis,
			'berat' => $berat,
			'satuan' => $satuan,
            'tgl_transaksi' => $tgl_transaksi,
            'tgl_ambil' => $tgl_ambil,
            'diskon' => $diskon,
            'tgl_bayar' => $tgl_bayar,
            'mata_uang' => $mata_uang,
            'nama_pengguna' => $nama_pengguna
		);

		$where = array (
			'kd_transaksi' => $id_kd_transaksi
		);
		$this->Global_m->update_data($where,$data,'transaksi');
		
		echo '{"Konfirmasi":"Data Berhasil Diupdate"}';
	}
	public function HapusData(){
		$kd_transaksi = $this->input->post('kd_transaksi');
		$where = array (
			'kd_transaksi' => $kd_transaksi
		);
		$this->Global_m->hapus_data($where,'transaksi');
		echo '{"success":true}';
	}
}
?>