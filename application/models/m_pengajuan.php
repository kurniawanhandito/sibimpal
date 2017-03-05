<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengajuan extends CI_Model {

	public function getdatapengajuan($where=""){
		$data = $this->db->query('SELECT * FROM pengajuan'.$where);
		return $data;
	}

	public function inputdatapengajuan($tableName, $data){
		$res = $this->db->insert($tableName, $data);
		return $res;
	}
}
