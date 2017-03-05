<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelaporan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_pengajuan');
		$this->load->model('m_admin');
	}

	public function laporandatabarang(){
		$nama = $this->session->userdata('username');
		$data = array(
			"pengajuan" => $this->m_pengajuan->getdatapengajuan()->result_array(),
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminuniversitas/content_laporandatabarang", $data, true),
			);
		$this->load->view('adminuniversitas/index', $comp);
	}

	public function laporandatatanah(){
		$nama = $this->session->userdata('username');
		$data = array(
			"pengajuan" => $this->m_pengajuan->getdatapengajuan()->result_array(),
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminuniversitas/content_laporandatatanah", $data, true),
			);
		$this->load->view('adminuniversitas/index', $comp);
	}

	public function laporandatamutasi(){
		$nama = $this->session->userdata('username');
		$data = array(
			"pengajuan" => $this->m_pengajuan->getdatapengajuan()->result_array(),
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminuniversitas/content_laporandatamutasi", $data, true),
			);
		$this->load->view('adminuniversitas/index', $comp);
	}

	public function laporandatapengajuan(){
		$nama = $this->session->userdata('username');
		$data = array(
			"pengajuan" => $this->m_pengajuan->getdatapengajuan()->result_array(),
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminuniversitas/content_laporandatapengajuan", $data, true),
			);
		$this->load->view('adminuniversitas/index', $comp);
	}
}