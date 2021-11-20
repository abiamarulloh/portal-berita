<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	
	public function index()
	{
        $data["title"] = "News - System Portal Berita";
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('pages/news/index', $data);
		$this->load->view('layouts/footer', $data);
	}

}
