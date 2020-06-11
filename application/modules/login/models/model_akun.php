<?php

class Model_akun extends CI_Model
{

	public function cek_login()
	{
		$username = set_value('username');
		$password1 = set_value('password');

		$result	  = $this->db->get_where('tb_user', ['username' => $username],	['password' => $password1]);


		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return array();
		}
	}
}
