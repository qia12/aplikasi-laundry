<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lappembelian extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Global_m');
	}

	public function index()
	{
        $this->load->view('header_v');
        $this->load->view('lappembelian_v');
        $this->load->view('footer_v');
	}
	public function cetakexcel(){
		$filter=$this->input->get('filter');
		$tgl_pembelian=$this->input->get('tgl_pembelian');
		$kd_pembelian=$this->input->get('kd_pembelian');

		if ($filter=="kode"){
			$field='kd_pembelian';
			$datafield=$kd_pembelian;
		}else{
			$field='tgl_pembelian';
			$datafield=$tgl_pembelian;
		}
		$where = array(
			$field => $datafield
		);
		$data['laporan']=$this->Global_m->data_laporan($where,'pembelian');
		$data['filter']=$filter;
		$this->load->view('lappembelian_excel_v',$data);
	}
	public function cetakpdf(){
		$filter=$this->input->get('filter');
		$tgl_pembelian=$this->input->get('tgl_pembelian');
		$kd_pembelian=$this->input->get('kd_pembelian');

		if ($filter=="kode"){
			$field='kd_pembelian';
			$datafield=$kd_pembelian;
		}else{
			$field='tgl_pembelian';
			$datafield=$tgl_pembelian;
		}
		$where = array(
			$field => $datafield
		);
		$data['laporan']=$this->Global_m->data_laporan($where,'pembelian');
		$data['filter']=$filter;
		$this->load->view('lappembelian_pdf_v',$data);
	}
}