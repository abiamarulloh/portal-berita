<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {
	
	public function all()
	{
        return $this->db->get('tbl_news')->result();
	}

	public function add($data)
	{
        $this->db->insert('tbl_news', $data);
	}

	public function getById($id) {
		return $this->db->get_where('tbl_news', array('id' => $id))->row();
	}

	public function update($data, $id) {
		$this->db->where('id', $id);
		$this->db->update('tbl_news', $data);
	}

	public function delete($id) {
		$this->db->delete('tbl_news', array('id' => $id)); 
	}
	

}
?>
