<?php
	/**
	 * Ini adalah model untuk melakukan insert ke tabel accounts
	 */
	class insertUser extends CI_Controller
	{
		public function inserAccount($table, $data) {
			$isi = $this->db->insert($table, $data);
			var_dump($isi);
		}
	}
?>