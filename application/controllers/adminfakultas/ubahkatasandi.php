<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubahkatasandi extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
	}
	
	public function index()
	{
		$nama = $this->session->userdata('username');
		$data = array(
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminfakultas/content_ubahkatasandi", $data, true),
			);
		$this->load->view('adminfakultas/index', $comp);
	}
}