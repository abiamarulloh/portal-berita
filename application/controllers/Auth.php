<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		if($this->session->userdata("isLogin") == true) {
			redirect("dashboard");
		}

		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if ($this->form_validation->run() == FALSE) { 
			$data["title"] = "News - System Portal Berita";
			$this->load->view('pages/auth/index', $data);
		}else {
			if($this->input->post("username") == "admin" && $this->input->post("password") == "password") {
				$this->session->set_userdata("isLogin", true);
				redirect("dashboard");
			}else {
				redirect("auth");
			}
		}
	}

}
