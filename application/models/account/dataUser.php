<?php
	/**
	 * Inia adalah model untuk pengambilan data user/akun
	 */
	class dataUser extends CI_Controller
	{
		public function getUser($user = false, $pass = false) {
			$this->db->select('*');
			$this->db->from('accounts');
			if($user && $pass) {
				$this->db->where(array('username' => $user, 'password' => $pass));
				$hasil = $this->db->get();
				return $hasil;
			} else {
				return false;
			}
		}
	}
?>