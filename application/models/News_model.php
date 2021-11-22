<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {
	
	public function all()
	{
        return $this->db->get('tbl_news')->result();
	}

}
?>
