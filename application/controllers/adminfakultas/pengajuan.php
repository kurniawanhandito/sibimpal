<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function inputdatapengajuan()
	{
		$nama = $this->session->userdata('username');
		$data = array(
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminfakultas/content_inputdatapengajuan", $data, true),
			);
		$this->load->view('adminfakultas/index', $comp);
	}

	public function inputdatadetailpengajuan()
	{
		$nama = $this->session->userdata('username');
		$data = array(
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminfakultas/content_inputdatadetailpengajuan", $data, true),
			);
		$this->load->view('adminfakultas/index', $comp);
	}
}