<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_pengajuan');
		$this->load->model('m_admin');
	}

	public function konfirmasidatapengajuan(){
		$nama = $this->session->userdata('username');
		$data = array(
			"pengajuan" => $this->m_pengajuan->getdatapengajuan()->result_array(),
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminuniversitas/content_konfirmasidatapengajuan", $data, true),
			);
		$this->load->view('adminuniversitas/index', $comp);
	}

	public function aksikonfirmasidatapengajuan(){
		$nama = $this->session->userdata('username');
		$data = array(
			"pengajuan" => $this->m_pengajuan->getdatapengajuan()->result_array(),
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminuniversitas/content_aksikonfirmasidatapengajuan", $data, true),
			);
		$this->load->view('adminuniversitas/index', $comp);
	}
}