<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laptransaksi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Global_m');
	}

	public function index()
	{
        $this->load->view('header_v');
        $this->load->view('laptransaksi_v');
        $this->load->view('footer_v');
	}
	public function cetakexcel(){
		$filter=$this->input->get('filter');
		$tgl_transaksi=$this->input->get('tgl_transaksi');
		$kd_transaksi=$this->input->get('kd_transaksi');

		if ($filter=="kode"){
			$field='kd_transaksi';
			$datafield=$kd_transaksi;
		}else{
			$field='tgl_transaksi';
			$datafield=$tgl_transaksi;
		}
		$where = array(
			$field => $datafield
		);
		$data['laporan']=$this->Global_m->data_laporan($where,'transaksi');
		$data['filter']=$filter;
		$this->load->view('laptransaksi_excel_v',$data);
	}
	public function cetakpdf(){
		$filter=$this->input->get('filter');
		$tgl_transaksi=$this->input->get('tgl_transaksi');
		$kd_transaksi=$this->input->get('kd_transaksi');

		if ($filter=="kode"){
			$field='kd_transaksi';
			$datafield=$kd_transaksi;
		}else{
			$field='tgl_transaksi';
			$datafield=$tgl_transaksi;
		}
		$where = array(
			$field => $datafield
		);
		$data['laporan']=$this->Global_m->data_laporan($where,'transaksi');
		$data['filter']=$filter;
		$this->load->view('laptransaksi_pdf_v',$data);
	}
}