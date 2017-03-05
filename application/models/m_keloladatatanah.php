<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keloladatatanah extends CI_Model {

	public function getdatatanah($where=""){
		$data = $this->db->query('SELECT * FROM tanah where fakultas like'.'"'.$where.'"');
		return $data;
	}

	public function inputdatatanah($tableName, $data){
		$res = $this->db->insert($tableName, $data);
		return $res;
	}

	public function mutasidatatanah($tableName, $data, $where){
		$res = $this->db->update($tableName, $data, $where);
		return $res;
	}

	public function incrementId(){
		$res = $this->db->query('SELECT count(*) FROM tanah');
		return $res;
	}
}
