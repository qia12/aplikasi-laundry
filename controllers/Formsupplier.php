<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formsupplier extends CI_Controller {

    public function construct()
    {
        parent::construct();
        $this->load->model('Global_m');
    }
public function index()
{
    $this->load->view('formsupplier_v');
}
public function input_data(){
    $data = [
        'kd_supplier' => htmlspecialchars($this->input->post('kd_supplier', true)),
        'nm_supplier' => htmlspecialchars($this->input->post('nm_supplier', true)),
        'alamat' => htmlspecialchars($this->input->post('alamat', true)),
        ];
    $this->db->insert('supplier', $data);
    redirect('Supplier');
}
}
