<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formkaryawan extends CI_Controller {

    public function construct()
    {
        parent::construct();
        $this->load->model('Global_m');
    }
public function index()
{
    $this->load->view('formkaryawan_v');
}
public function input_data(){
    $data = [
        'kd_karyawan' => htmlspecialchars($this->input->post('kd_karyawan', true)),
        'nm_karyawan' => htmlspecialchars($this->input->post('nm_karyawan', true)),
        'alamat' => htmlspecialchars($this->input->post('alamat', true)),
        'jns_kelamin' => htmlspecialchars($this->input->post('jns_kelamin', true)),
        'jabatan' => htmlspecialchars($this->input->post('jabatan', true)),
        ];
    $this->db->insert('karyawan', $data);
    redirect('Karyawan');
}
}
