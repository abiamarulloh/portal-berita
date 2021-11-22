<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('News_model', 'news_model');
	}
	
	public function index()
	{
        $data["title"] = "News - System Portal Berita";
		$data["news_list"] = $this->news_model->all();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('pages/news/index', $data);
		$this->load->view('layouts/footer', $data);
	}

}
