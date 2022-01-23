<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		if($this->session->userdata("isLogin") == false) {
			redirect("auth");
		}

        $data["title"] = "Dashboard - System Portal Berita";
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('pages/dashboard/index', $data);
		$this->load->view('layouts/footer', $data);
	}

}
