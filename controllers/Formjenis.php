<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formjenis extends CI_Controller {

    public function construct()
    {
        parent::construct();
        $this->load->model('Global_m');
    }
public function index()
{
    $this->load->view('formjenis_v');
}
public function input_data(){
    $data = [
        'kd_jenis' => htmlspecialchars($this->input->post('kd_jenis', true)),
        'nm_jenis' => htmlspecialchars($this->input->post('nm_jenis', true)),
        'tarif' => htmlspecialchars($this->input->post('tarif', true)),
        'mata_uang' => htmlspecialchars($this->input->post('mata_uang', true)),

        ];
    $this->db->insert('jenis_paket', $data);
    redirect('Jenis');
}
}
