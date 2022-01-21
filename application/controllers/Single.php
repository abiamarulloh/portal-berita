<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single extends CI_Controller {
	
	public function index()
	{
		$this->load->view('_template/_header.php');
		$this->load->view('berita/single_page.php');
		$this->load->view('_template/_footer.php');
	}

}
