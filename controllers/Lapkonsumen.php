<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapkonsumen extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Global_m');
	}

	public function index()
	{
        $this->load->view('header_v');
        $this->load->view('lapkonsumen_v');
        $this->load->view('footer_v');
	}
	public function cetakexcel(){
		$filter=$this->input->get('filter');
		$nm_konsumen=$this->input->get('nm_konsumen');
		$kd_konsumen=$this->input->get('kd_konsumen');

		if ($filter=="kode"){
			$field='kd_konsumen';
			$datafield=$kd_konsumen;
		}else{
			$field='nm_konsumen';
			$datafield=$nm_konsumen;
		}
		$where = array(
			$field => $datafield
		);
		$data['laporan']=$this->Global_m->data_laporan($where,'konsumen');
		$data['filter']=$filter;
		$this->load->view('lapkonsumen_excel_v',$data);
	}
	public function cetakpdf(){
		$filter=$this->input->get('filter');
		$nm_konsumen=$this->input->get('nm_konsumen');
		$kd_konsumen=$this->input->get('kd_konsumen');

		if ($filter=="kode"){
			$field='kd_konsumen';
			$datafield=$kd_konsumen;
		}else{
			$field='nm_konsumen';
			$datafield=$nm_konsumen;
		}
		$where = array(
			$field => $datafield
		);
		$data['laporan']=$this->Global_m->data_laporan($where,'konsumen');
		$data['filter']=$filter;
		$this->load->view('lapkonsumen_pdf_v',$data);
	}
}