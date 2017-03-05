<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keloladatabarang extends CI_Model {

	public function getdatabarang($where=""){
		$data = $this->db->query('SELECT * FROM barang where fakultas like'.'"'.$where.'"');
		return $data;
	}

	public function inputdatabarang($tableName, $data){
		$res = $this->db->insert($tableName, $data);
		return $res;
	}

	public function mutasidatabarang($tableName, $data, $where){
		$res = $this->db->update($tableName, $data, $where);
		return $res;
	}

	public function incrementId(){
		$res = $this->db->query('SELECT count(*) FROM barang');
		return $res;
	}
}
