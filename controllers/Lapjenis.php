<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapjenis extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Global_m');
	}

	public function index()
	{
        $this->load->view('header_v');
        $this->load->view('lapjenis_v');
        $this->load->view('footer_v');
	}
	public function cetakexcel(){
		$filter=$this->input->get('filter');
		$nm_jenis=$this->input->get('nm_jenis');
		$kd_jenis=$this->input->get('kd_jenis');

		if ($filter=="kode"){
			$field='kd_jenis';
			$datafield=$kd_jenis;
		}else{
			$field='nm_jenis';
			$datafield=$nm_jenis;
		}
		$where = array(
			$field => $datafield
		);
		$data['laporan']=$this->Global_m->data_laporan($where,'jenis_paket');
		$data['filter']=$filter;
		$this->load->view('lapjenis_excel_v',$data);
	}
	public function cetakpdf(){
		$filter=$this->input->get('filter');
		$nm_jenis=$this->input->get('nm_jenis');
		$kd_jenis=$this->input->get('kd_jenis');

		if ($filter=="kode"){
			$field='kd_jenis';
			$datafield=$kd_jenis;
		}else{
			$field='nm_jenis';
			$datafield=$nm_jenis;
		}
		$where = array(
			$field => $datafield
		);
		$data['laporan']=$this->Global_m->data_laporan($where,'jenis_paket');
		$data['filter']=$filter;
		$this->load->view('lapjenis_pdf_v',$data);
	}
}