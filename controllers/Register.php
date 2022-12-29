<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Global_m');
	}
	public function index()
	{
		$this->load->view('formregister_v');
	}
	
	public function proses_register(){
	
		$user=$this->input->post('username');
		$pass=$this->input->post('password');
		$alamat=$this->input->post('alamat');
		$email=$this->input->post('email');

		$key="!@#$%^&*";
		$password=$key."".$pass."".$key;

		//echo "password = ".$pass."<br>";
		//echo "password + Key = ".$password."<br>";
		//echo "password md5 = ".md5($password)."<br>";
		$data = [
			'nama_pengguna' =>$user,
			'kata_sandi' =>md5($password),
			'alamat' =>$alamat,
			'email' =>$email
		];
		
		$insert = $this->Global_m->register("admin_daftar", $data);
        if($insert){
            ?>
     			<script type="text/javascript">
     				alert("Sukses! Anda berhasil melakukan register. Silahkan login untuk mengakses data.");
     				window.open("<?php echo base_url()."Login" ?>","_self");
     			</script>
     		<?php
        }
	}
	
	public function logout(){
     	$this->session->sess_destroy();
     	?>
     		<script type="text/javascript">
     			alert("Sukses! Anda berhasil melakukan logout");
     			window.open("<?php echo base_url()."Login" ?>","_self");
     		</script>
     	<?php    
	}
}

