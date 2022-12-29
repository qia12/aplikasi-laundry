<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Global_m');
	}

	public function index()
	{
        $this->load->view('header_v');
        $this->load->view('supplier_v');
        $this->load->view('footer_v');
	}
	public function getsupplier(){
		$this->Global_m->getsupplier();
	}
	public function SimpanData(){
		$kd_supplier = $this->input->post('kd_supplier');
		$nm_supplier = $this->input->post('nm_supplier');
		$alamat = $this->input->post('alamat');
		
 
		$data= array (
			'kd_supplier' => $kd_supplier,
			'nm_supplier' => $nm_supplier,
			'alamat' => $alamat,
		);
		
		$this->Global_m->input_data($data,'supplier');

		echo '{"Konfirmasi":"Data Berhasil Disimpan"}';
    }
    
	public function UpdateData(){
		$kd_supplier = $this->input->post('kd_supplier');
		$nm_supplier = $this->input->post('nm_supplier');
		$alamat = $this->input->post('alamat');
		
		
		$id_kd_supplier = $this->input->get('id_kd_supplier');

		$data= array (
			'kd_supplier' => $kd_supplier,
			'nm_supplier' => $nm_supplier,
			'alamat' => $alamat
		);

		$where = array (
			'kd_supplier' => $id_kd_supplier
		);

		$this->Global_m->update_data($where,$data,'supplier');

		

		echo '{"Konfirmasi":"Data Berhasil Diupdate"}';
	}
	public function HapusData(){
		$kd_supplier = $this->input->post('kd_supplier');
		$where = array (
			'kd_supplier' => $kd_supplier
		);
		$this->Global_m->hapus_data($where,'supplier');
		echo '{"success":true}';
	}
}
?>