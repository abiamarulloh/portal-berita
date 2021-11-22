<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {
  public function index()
  {
    $data["title"] = "Add - System Portal Berita";
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
    $this->load->view('pages/add/index');
    $this->load->view('layouts/footer', $data);

    // $this->News_model->addNewsData();
    // redirect('news');
  }
}
?>