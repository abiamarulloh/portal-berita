<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('News_model', 'news_model');
	}

	public function index()
	{
		$this->load->view('_template/_header.php');
		$this->load->view('berita/beranda.php');
		$this->load->view('_template/_footer.php');
	}
	
	public function admin()
	{
        $data["title"] = "News - System Portal Berita";
		$data["news_list"] = $this->news_model->all();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('layouts/topbar', $data);
		$this->load->view('pages/news/index', $data);
		$this->load->view('layouts/footer', $data);
	}

	public function add()
	{
		// get Data By Id
		$data['new_by_id'] = [];

		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');
		$this->form_validation->set_rules('tags', 'tags', 'required');
		$this->form_validation->set_rules('author', 'author', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data["title"] = "Add - System Portal Berita";
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('pages/news/form');
			$this->load->view('layouts/footer', $data);
		}else {
			$title = $this->input->post("title");
			$description = $this->input->post("description");
			$tags = $this->input->post("tags");
			$author = $this->input->post("author");

			$config['upload_path']          = './assets/image_uploaded';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 10000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('image'))
			{
				$data_form = [
					"title" => $title,
					"description" => $description,
					"image" => $this->upload->data()['file_name'],
					"tags" => $tags,
					"author" => $author,
					"create_at" => time(),
				];
				$this->news_model->add($data_form);
			}
			redirect("news");
		}
	}

	public function edit($id)
	{

		// get Data By Id
		$data['new_by_id'] = $this->news_model->getById($id);

		$this->form_validation->set_rules('title', 'title', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');
		$this->form_validation->set_rules('tags', 'tags', 'required');
		$this->form_validation->set_rules('author', 'author', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data["title"] = "Edit - System Portal Berita";
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar', $data);
			$this->load->view('layouts/topbar', $data);
			$this->load->view('pages/news/form');
			$this->load->view('layouts/footer', $data);
		}else {
			$title = $this->input->post("title");
			$description = $this->input->post("description");
			$tags = $this->input->post("tags");
			$author = $this->input->post("author");
			$image = $this->input->post("image");

			$config['upload_path']          = './assets/image_uploaded';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 10000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('image'))
			{
				$data_form = [
					"title" => $title,
					"description" => $description,
					"image" => $this->upload->data()['file_name'],
					"tags" => $tags,
					"author" => $author,
					"update_at" => time()
				];
				$this->news_model->update($data_form, $id);
			}else {
				$data_form = [
					"title" => $title,
					"description" => $description,
					"image" => $data['new_by_id']->image,
					"tags" => $tags,
					"author" => $author,
					"update_at" => time()
				];
				$this->news_model->update($data_form, $id);
			}
			redirect("news");
		}
	}

	public function delete($id) {
		$this->news_model->delete($id);
		redirect("news");
	}

	public function preview($id) {
        $data["title"] = "Preview - System Portal Berita";
		$data['news'] = $this->news_model->getById($id);
		$this->load->view('pages/news/preview', $data);
	}

}
