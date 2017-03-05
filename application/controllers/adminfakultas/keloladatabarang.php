<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keloladatabarang extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_keloladatabarang');
		$this->load->model('m_admin');
	}

	public function evaluasidatabarang(){
		$nama = $this->session->userdata('username');
		$data = array(
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminfakultas/content_evaluasidatabarang", $data, true),
			);
		$this->load->view('adminfakultas/index', $comp);
	}

	public function caridatabarang(){
		$nama = $this->session->userdata('username');
		$data = array(
			"barang" => $this->m_keloladatabarang->getdatabarang($nama)->result_array(),
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminfakultas/content_caridatabarang", $data, true),
			);
		$this->load->view('adminfakultas/index', $comp);
	}
}