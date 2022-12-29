<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapkaryawan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Global_m');
	}

	public function index()
	{
        $this->load->view('header_v');
        $this->load->view('lapkaryawan_v');
        $this->load->view('footer_v');
	}
	public function cetakexcel(){
		$filter=$this->input->get('filter');
        $nm_karyawan=$this->input->get('nm_karyawan');
        $kd_karyawan=$this->input->get('kd_karyawan');
        $alamat=$this->input->get('alamat');
        $jns_kelamin=$this->input->get('jns_kelamin');
        $jabatan=$this->input->get('jabatan');

		if ($filter=="kode"){
			$field='kd_karyawan';
			$datafield=$kd_karyawan;
		}else{
			$field='nm_karyawan';
			$datafield=$nm_karyawan;
		}
		$where = array(
			$field => $datafield
		);
		$data['laporan']=$this->Global_m->data_laporan($where,'karyawan');
		$data['filter']=$filter;
		$this->load->view('lapkaryawan_excel_v',$data);
	}
	public function cetakpdf(){
		$filter=$this->input->get('filter');
		$nm_karyawan=$this->input->get('nm_karyawan');
		$kd_karyawan=$this->input->get('kd_karyawan');

		if ($filter=="kode"){
			$field='kd_karyawan';
			$datafield=$kd_karyawan;
		}else{
			$field='nm_karyawan';
			$datafield=$nm_karyawan;
		}
		$where = array(
			$field => $datafield
		);
		$data['laporan']=$this->Global_m->data_laporan($where,'karyawan');
		$data['filter']=$filter;
		$this->load->view('lapkaryawan_pdf_v',$data);
	}
}