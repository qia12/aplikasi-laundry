<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Global_m');
	}

	public function index()
	{
        $this->load->view('header_v');
        $this->load->view('jenis_v');
        $this->load->view('footer_v');
	}
	public function getjenis(){
		$this->Global_m->getjenis();
	}
	public function SimpanData(){
		$kd_jenis = $this->input->post('kd_jenis');
		$nm_jenis = $this->input->post('nm_jenis');
		$tarif = $this->input->post('tarif');
		$mata_uang = $this->input->post('mata_uang');
 
		$data= array (
			'kd_jenis' => $kd_jenis,
			'nm_jenis' => $nm_jenis,
			'tarif' => $tarif,
			'mata_uang ' => $mata_uang 
		);
		
		$this->Global_m->input_data($data,'jenis_paket');

		echo '{"Konfirmasi":"Data Berhasil Disimpan"}';
    }
    
	public function UpdateData(){
		$kd_jenis = $this->input->post('kd_jenis');
		$nm_jenis = $this->input->post('nm_jenis');
		$tarif = $this->input->post('tarif');
		$mata_uang = $this->input->post('mata_uang');
		
		$id_kd_jenis = $this->input->get('id_kd_jenis');

		$data= array (
			'kd_jenis' => $kd_jenis,
			'nm_jenis' => $nm_jenis,
			'tarif' => $tarif,
			'mata_uang ' => $mata_uang 
		);

		$where = array (
			'kd_jenis' => $id_kd_jenis
		);

		$this->Global_m->update_data($where,$data,'jenis_paket');

		

		echo '{"Konfirmasi":"Data Berhasil Diupdate"}';
	}
	public function HapusData(){
		$kd_jenis = $this->input->post('kd_jenis');
		$where = array (
			'kd_jenis' => $kd_jenis
		);
		$this->Global_m->hapus_data($where,'jenis_paket');
		echo '{"success":true}';
	}
}
?>