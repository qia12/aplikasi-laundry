<?php 
class Global_m extends CI_Model
{
	public function register($table, $data)
	{
    return $this->db->insert($table, $data);
	}
	function ceklogin_m($table,$kondisi){
		return $this->db->get_where($table,$kondisi);
	}
	function getbarang(){
		$page = $this->input->post('page');
		$rows = $this->input->post('rows');
		$sort = 'kd_barang';
		$order = 'desc';
		$offset =($page-1)*$rows;

		$result = array();
		$totaldata = $this->db->get('barang')->num_rows();
		$result['total'] = $totaldata;

		$this->db->select('*');
		$this->db->from('barang');
		$this->db->order_by($sort, $order);
		$this->db->limit($rows,$offset);
		$data = $this->db->get();

		$items = array();
		foreach($data->result() as $dt){
			array_push($items,$dt);
		}
		$result['rows'] = $items;

		//echo $this->db->last_query();
		echo json_encode($result);
	}
	function getsupplier(){
		$page = $this->input->post('page');
		$rows = $this->input->post('rows');
		$sort = 'kd_supplier';
		$order = 'desc';
		$offset =($page-1)*$rows;

		$result = array();
		$totaldata = $this->db->get('supplier')->num_rows();
		$result['total'] = $totaldata;

		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->order_by($sort, $order);
		$this->db->limit($rows,$offset);
		$data = $this->db->get();

		$items = array();
		foreach($data->result() as $dt){
			array_push($items,$dt);
		}
		$result['rows'] = $items;

		//echo $this->db->last_query();
		echo json_encode($result);
	}
	function getpembelian(){
		$page = $this->input->post('page');
		$rows = $this->input->post('rows');
		$sort = 'kd_pembelian';
		$order = 'desc';
		$offset =($page-1)*$rows;

		$result = array();
		$totaldata = $this->db->get('pembelian')->num_rows();
		$result['total'] = $totaldata;

		$this->db->select('*');
		$this->db->from('pembelian');
		$this->db->order_by($sort, $order);
		$this->db->limit($rows,$offset);
		$data = $this->db->get();

		$items = array();
		foreach($data->result() as $dt){
			array_push($items,$dt);
		}
		$result['rows'] = $items;

		//echo $this->db->last_query();
		echo json_encode($result);
	}
	function getjenis(){
		$page = $this->input->post('page');
		$rows = $this->input->post('rows');
		$sort = 'kd_jenis';
		$order = 'desc';
		$offset =($page-1)*$rows;

		$result = array();
		$totaldata = $this->db->get('jenis_paket')->num_rows();
		$result['total'] = $totaldata;

		$this->db->select('*');
		$this->db->from('jenis_paket');
		$this->db->order_by($sort, $order);
		$this->db->limit($rows,$offset);
		$data = $this->db->get();

		$items = array();
		foreach($data->result() as $dt){
			array_push($items,$dt);
		}
		$result['rows'] = $items;

		//echo $this->db->last_query();
		echo json_encode($result);
	}
	function getkonsumen(){
		$page = $this->input->post('page');
		$rows = $this->input->post('rows');
		$sort = 'kd_konsumen';
		$order = 'desc';
		$offset =($page-1)*$rows;

		$result = array();
		$totaldata = $this->db->get('konsumen')->num_rows();
		$result['total'] = $totaldata;

		$this->db->select('*');
		$this->db->from('konsumen');
		$this->db->order_by($sort, $order);
		$this->db->limit($rows,$offset);
		$data = $this->db->get();

		$items = array();
		foreach($data->result() as $dt){
			array_push($items,$dt);
		}
		$result['rows'] = $items;

		//echo $this->db->last_query();
		echo json_encode($result);
	}
	function getkaryawan(){
		$page = $this->input->post('page');
		$rows = $this->input->post('rows');
		$sort = 'kd_karyawan';
		$order = 'desc';
		$offset =($page-1)*$rows;

		$result = array();
		$totaldata = $this->db->get('karyawan')->num_rows();
		$result['total'] = $totaldata;

		$this->db->select('*');
		$this->db->from('karyawan');
		$this->db->order_by($sort, $order);
		$this->db->limit($rows,$offset);
		$data = $this->db->get();

		$items = array();
		foreach($data->result() as $dt){
			array_push($items,$dt);
		}
		$result['rows'] = $items;

		//echo $this->db->last_query();
		echo json_encode($result);
	}
	function gettransaksi(){
		$page = $this->input->post('page');
		$rows = $this->input->post('rows');
		$sort = 'kd_transaksi';
		$order = 'desc';
		$offset =($page-1)*$rows;

		$result = array();
		$totaldata = $this->db->get('transaksi')->num_rows();
		$result['total'] = $totaldata;

		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->order_by($sort, $order);
		$this->db->limit($rows,$offset);
		$data = $this->db->get();

		$items = array();
		foreach($data->result() as $dt){
			array_push($items,$dt);
		}
		$result['rows'] = $items;

		//echo $this->db->last_query();
		echo json_encode($result);
	}
	function input_data($data,$table){
    	 $this->db->insert($table,$data);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function data_laporan($where,$table){
		$this->db->like($where);
		return $this->db->get($table);
	}
		function fetch_data($query)
	{
	$this->db->select("*");
	$this->db->from("barang");
	if($query != '')
	{
	$this->db->like('kd_barang', $query);
	$this->db->or_like('nm_barang', $query);
	$this->db->or_like('jml_stok', $query);
	$this->db->or_like('satuan', $query);
	}
	$this->db->order_by('kd_barang', 'DESC');
	return $this->db->get();
	}
	function fetch_data_supplier($query)
	{
	$this->db->select("*");
	$this->db->from("supplier");
	if($query != '')
	{
	$this->db->like('kd_supplier', $query);
	$this->db->or_like('nm_supplier', $query);
	$this->db->or_like('alamat', $query);
	}
	$this->db->order_by('kd_supplier', 'DESC');
	return $this->db->get();
	}
	function fetch_data_pembelian($query)
	{
	$this->db->select("*");
	$this->db->from("pembelian");
	if($query != '')
	{
	$this->db->like('kd_pembelian', $query);
	$this->db->or_like('kd_supplier', $query);
	$this->db->or_like('qty', $query);
	$this->db->or_like('total_pembayaran', $query);
	$this->db->or_like('mata_uang', $query);
	$this->db->or_like('tgl_pembelian', $query);
	$this->db->or_like('kd_barang', $query);
	}
	$this->db->order_by('kd_pembelian', 'DESC');
	return $this->db->get();
	}
	function fetch_data_jenis($query)
	{
	$this->db->select("*");
	$this->db->from("jenis_paket");
	if($query != '')
	{
	$this->db->like('kd_jenis', $query);
	$this->db->or_like('nm_jenis', $query);
	$this->db->or_like('tarif', $query);
	$this->db->or_like('mata_uang', $query);
	}
	$this->db->order_by('kd_jenis', 'DESC');
	return $this->db->get();
	}
	function fetch_data_konsumen($query)
	{
	$this->db->select("*");
	$this->db->from("konsumen");
	if($query != '')
	{
	$this->db->like('kd_konsumen', $query);
	$this->db->or_like('nm_konsumen', $query);
	$this->db->or_like('alamat', $query);
	}
	$this->db->order_by('kd_konsumen', 'DESC');
	return $this->db->get();
	}
	function fetch_data_karyawan($query)
	{
	$this->db->select("*");
	$this->db->from("karyawan");
	if($query != '')
	{
	$this->db->like('kd_karyawan', $query);
	$this->db->or_like('nm_karyawan', $query);
	$this->db->or_like('alamat', $query);
	$this->db->or_like('jns_kelamin', $query);
	$this->db->or_like('jabatan', $query);
	}
	$this->db->order_by('kd_karyawan', 'DESC');
	return $this->db->get();
	}
	function fetch_data_transaksi($query)
	{
	$this->db->select("*");
	$this->db->from("transaksi");
	if($query != '')
	{
	$this->db->like('kd_transaksi', $query);
	$this->db->or_like('kd_karyawan', $query);
	$this->db->or_like('kd_konsumen', $query);
	$this->db->or_like('kd_jenis', $query);
	$this->db->or_like('berat', $query);
	$this->db->or_like('satuan', $query);
	$this->db->or_like('tgl_transaksi', $query);
	$this->db->or_like('tgl_ambil', $query);
	$this->db->or_like('diskon', $query);
	$this->db->or_like('tgl_bayar', $query);
	$this->db->or_like('mata_uang', $query);
	$this->db->or_like('nama_pengguna', $query);
	}
	$this->db->order_by('kd_transaksi', 'DESC');
	return $this->db->get();
	}
}
