<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keloladatabarang extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_keloladatabarang');
		$this->load->model('m_pengajuan');
		$this->load->model('m_admin');
	}

	public function inputdatabarang(){
		$nama = $this->session->userdata('username');
		$data = array(
			"pengajuan" => $this->m_admin->getdataadmin($nama)->result_array(),
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminuniversitas/content_inputdatabarang", $data, true),
			);
		$this->load->view('adminuniversitas/index', $comp);
	}

	public function do_inputdatabarang(){
		$getData = $this->m_keloladatabarang->incrementId()->row();
		foreach ($getData as $row);
		$idbarang = "DBR".str_pad($row+1, 4, "0", STR_PAD_LEFT);
		$namabarang = $_POST['inputNamaBarang'];
		$fakultas = $_POST['inputFakultas'];
		$jumlah = $_POST['inputJumlah'];
		$kondisibaik = $jumlah;
		$kondisiburuk = 0;
		$tanggalinput = date("Y-m-d");
		$username = "admin";
		$datainsert = array(
			'idbarang' => $idbarang,
			'namabarang' => $namabarang,
			'fakultas' => $fakultas,
			'jumlah' => $jumlah,
			'kondisibaik' => $kondisibaik,
			'kondisiburuk' => $kondisiburuk,
			'tanggalinput' => $tanggalinput,
			'username' => $username,
		);

		$res = $this->m_keloladatabarang->inputdatabarang('barang', $datainsert);

		if ($res >= 1) {
			redirect('adminuniversitas/keloladatabarang/inputdatabarang');
		}
	}

	public function mutasidatabarang(){
		$nama = $this->session->userdata('username');
		$data = array(
			"barang" => $this->m_keloladatabarang->getdatabarang('%')->result_array(),
			"pengajuan" => $this->m_pengajuan->getdatapengajuan()->result_array(),
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
		);
		$comp = array(
			"content" => $this->load->view("adminuniversitas/content_mutasidatabarang", $data, true),
			);
		$this->load->view('adminuniversitas/index', $comp);
	}

	public function caridatabarang(){
		$nama = $this->session->userdata('username');
		$data = array(
			"barang" => $this->m_keloladatabarang->getdatabarang('%')->result_array(),
			"pengajuan" => $this->m_pengajuan->getdatapengajuan()->result_array(),
			"admin" => $this->m_admin->getdataadmin($nama)->result_array(),
			);
		$comp = array(
			"content" => $this->load->view("adminuniversitas/content_caridatabarang", $data, true),
			);
		$this->load->view('adminuniversitas/index', $comp);
	}
}