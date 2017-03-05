<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		if (isset($_POST['submit'])) {
			$username = $this->input->post('inputUsername');
			$password = $this->input->post('inputPassword');
			$hasil = $this->m_login->login($username, $password);
	  		if ($hasil->num_rows() == 1) {
	   			foreach ($hasil->result() as $sess) {
		    		$sess_data['logged_in'] = 'Sudah Login';
		    		$sess_data['username'] = $sess->username;
		    		$sess_data['level'] = $sess->level;
		    		$this->session->set_userdata($sess_data);
	   			}
	   			if ($this->session->userdata('level')=='universitas') {
	    			redirect('adminuniversitas/dashboard');
	   			}
	   			elseif ($this->session->userdata('level')=='fakultas') {
	    			redirect('adminfakultas/dashboard');
	   			}  
 	 		}
	 	 	else {
	   			echo "<script>alert('Gagal login: Cek namaUser, password!');history.go(-1);</script>";
	 	 	}
		}
		else {
			$this->load->view('login');
		}
	
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}