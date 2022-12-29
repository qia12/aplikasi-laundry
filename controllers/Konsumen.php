<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Global_m');
	}

	public function index()
	{
        $this->load->view('header_v');
        $this->load->view('konsumen_v');
        $this->load->view('footer_v');
	}
	public function getkonsumen(){
		$this->Global_m->getkonsumen();
	}
	public function SimpanData(){
		$kd_konsumen = $this->input->post('kd_konsumen');
		$nm_konsumen = $this->input->post('nm_konsumen');
		$alamat = $this->input->post('alamat');
		
 
		$data= array (
			'kd_konsumen' => $kd_konsumen,
			'nm_konsumen' => $nm_konsumen,
			'alamat' => $alamat,
		);
		
		$this->Global_m->input_data($data,'konsumen');

		echo '{"Konfirmasi":"Data Berhasil Disimpan"}';
    }
    
	public function UpdateData(){
		$kd_konsumen = $this->input->post('kd_konsumen');
		$nm_konsumen = $this->input->post('nm_konsumen');
		$alamat = $this->input->post('alamat');
		
		
		$id_kd_konsumen = $this->input->get('id_kd_konsumen');

		$data= array (
			'kd_konsumen' => $kd_konsumen,
			'nm_konsumen' => $nm_konsumen,
			'alamat' => $alamat
		);

		$where = array (
			'kd_konsumen' => $id_kd_konsumen
		);

		$this->Global_m->update_data($where,$data,'konsumen');

		

		echo '{"Konfirmasi":"Data Berhasil Diupdate"}';
	}
	public function HapusData(){
		$kd_konsumen = $this->input->post('kd_konsumen');
		$where = array (
			'kd_konsumen' => $kd_konsumen
		);
		$this->Global_m->hapus_data($where,'konsumen');
		echo '{"success":true}';
	}
}
?>