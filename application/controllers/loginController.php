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

		public function loginAct() {
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			var_dump($_POST);
		}

	}
?>