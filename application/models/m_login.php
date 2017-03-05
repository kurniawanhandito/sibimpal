<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function login($username, $password)
	{
		$check = $this->db->get_where('admin', array('username' => $username, 'password' => md5($password)));

		return $check;
	}
}
