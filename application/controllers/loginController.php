<?php
	/**
	 * Ini adalah controller untuk memenajemen login
	 */
	class loginController extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function index() {
			$this->load->view('auth/login');
		}
	}
?>