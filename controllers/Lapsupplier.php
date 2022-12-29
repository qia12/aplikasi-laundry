<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapsupplier extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Global_m');
	}

	public function index()
	{
        $this->load->view('header_v');
        $this->load->view('lapsupplier_v');
        $this->load->view('footer_v');
	}
	public function cetakexcel(){
		$filter=$this->input->get('filter');
		$nm_supplier=$this->input->get('nm_supplier');
		$kd_supplier=$this->input->get('kd_supplier');

		if ($filter=="kode"){
			$field='kd_supplier';
			$datafield=$kd_supplier;
		}else{
			$field='nm_supplier';
			$datafield=$nm_supplier;
		}
		$where = array(
			$field => $datafield
		);
		$data['laporan']=$this->Global_m->data_laporan($where,'supplier');
		$data['filter']=$filter;
		$this->load->view('lapsupplier_excel_v',$data);
	}
	public function cetakpdf(){
		$filter=$this->input->get('filter');
		$nm_supplier=$this->input->get('nm_supplier');
		$kd_supplier=$this->input->get('kd_supplier');

		if ($filter=="kode"){
			$field='kd_supplier';
			$datafield=$kd_supplier;
		}else{
			$field='nm_supplier';
			$datafield=$nm_supplier;
		}
		$where = array(
			$field => $datafield
		);
		$data['laporan']=$this->Global_m->data_laporan($where,'supplier');
		$data['filter']=$filter;
		$this->load->view('lapsupplier_pdf_v',$data);
	}
}