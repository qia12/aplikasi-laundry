<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Global_m');
	}

	public function index()
	{
        $this->load->view('header_v');
        $this->load->view('karyawan_v');
        $this->load->view('footer_v');
	}
	public function getkaryawan(){
		$this->Global_m->getkaryawan();
	}
	public function SimpanData(){
		$kd_karyawan = $this->input->post('kd_karyawan');
		$nm_karyawan = $this->input->post('nm_karyawan');
        $alamat = $this->input->post('alamat');
        $jns_kelamin = $this->input->post('jns_kelamin');
        $jabatan = $this->input->post('jabatan');
		
 
		$data= array (
			'kd_karyawan' => $kd_karyawan,
			'nm_karyawan' => $nm_karyawan,
            'alamat' => $alamat,
            'jns_kelamin' => $jns_kelamin,
            'jabatan' => $jabatan
            
		);
		
		$this->Global_m->input_data($data,'karyawan');

		echo '{"Konfirmasi":"Data Berhasil Disimpan"}';
    }
    
	public function UpdateData(){
		$kd_karyawan = $this->input->post('kd_karyawan');
		$nm_karyawan = $this->input->post('nm_karyawan');
        $alamat = $this->input->post('alamat');
        $jns_kelamin = $this->input->post('jns_kelamin');
        $jabatan = $this->input->post('jabatan');
		
		$id_kd_karyawan = $this->input->get('id_kd_karyawan');

		$data= array (
			'kd_karyawan' => $kd_karyawan,
			'nm_karyawan' => $nm_karyawan,
            'alamat' => $alamat,
            'jns_kelamin' => $jns_kelamin,
            'jabatan' => $jabatan
		);

		$where = array (
			'kd_karyawan' => $id_kd_karyawan
		);

		$this->Global_m->update_data($where,$data,'karyawan');

		

		echo '{"Konfirmasi":"Data Berhasil Diupdate"}';
	}
	public function HapusData(){
		$kd_karyawan = $this->input->post('kd_karyawan');
		$where = array (
			'kd_karyawan' => $kd_karyawan
		);
		$this->Global_m->hapus_data($where,'karyawan');
		echo '{"success":true}';
	}
}
?>