<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function getdataadmin($where=""){
		$data = $this->db->query('SELECT * FROM admin where username like'.'"'.$where.'"');
		return $data;
	}
}
