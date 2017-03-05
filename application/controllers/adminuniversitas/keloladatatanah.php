<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keloladatatanah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_keloladatatanah');
		$this->load->model('m_pengajuan');
		$this->load->model('m_admin');
	}

	public function inputdatatanah(){
		$nama = $this->session->userdata('username');
		$data = array(
			"pengajuan" => $this->m_pengajuan->getdatapengajuan()->result_array(),
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminuniversitas/content_inputdatatanah", $data, true),
			);
		$this->load->view('adminuniversitas/index', $comp);
	}

	public function do_inputdatatanah(){
		$getData = $this->m_keloladatatanah->incrementId()->row();
		foreach ($getData as $row);
		$idtanah = "DTN".str_pad($row+1, 2, "0", STR_PAD_LEFT);
		$luas = $_POST['inputLuasTanah'];
		$fakultas = $_POST['inputFakultas'];
		$lokasi = $_POST['inputLokasiTanah'];
		$tanggalinput = date("Y-m-d");
		$username = "admin";
		$datainsert = array(
			'idtanah' => $idtanah,
			'luas' => $luas,
			'fakultas' => $fakultas,
			'lokasi' => $lokasi,
			'tanggalinput' => $tanggalinput,
			'username' => $username,
		);

		$res = $this->m_keloladatatanah->inputdatatanah('tanah', $datainsert);

		if ($res >= 1) {
			redirect('adminuniversitas/Keloladatatanah/inputdatatanah');
		}
	}

	public function mutasidatatanah(){
		$nama = $this->session->userdata('username');
		$data = array(
			"pengajuan" => $this->m_pengajuan->getdatapengajuan()->result_array(),
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminuniversitas/content_mutasidatatanah", $data, true),
			);
		$this->load->view('adminuniversitas/index', $comp);
	}

	public function caridatatanah(){
		$nama = $this->session->userdata('username');
		$data = array(
			"tanah" => $this->m_keloladatatanah->getdatatanah('%')->result_array(),
			"pengajuan" => $this->m_pengajuan->getdatapengajuan()->result_array(),
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminuniversitas/content_caridatatanah", $data, true),
			);
		$this->load->view('adminuniversitas/index', $comp);
	}
}