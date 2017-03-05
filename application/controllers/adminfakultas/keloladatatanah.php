<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keloladatatanah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_keloladatatanah');
		$this->load->model('m_admin');
	}

	public function evaluasidatatanah(){
		$nama = $this->session->userdata('username');
		$data = array(
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminfakultas/content_evaluasidatatanah", $data, true),
			);
		$this->load->view('adminfakultas/index', $comp);
	}

	public function caridatatanah(){
		$nama = $this->session->userdata('username');
		$data = array(
			"tanah" => $this->m_keloladatatanah->getdatatanah($nama)->result_array(),
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminfakultas/content_caridatatanah", $data, true),
			);
		$this->load->view('adminfakultas/index', $comp);
	}
}