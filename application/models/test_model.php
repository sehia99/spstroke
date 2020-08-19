<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_model extends CI_Model {

	public function getGejala()
	{
		$this->db->select_max('id_gejala')->limit(1);
		return $this->db->get('gejala')->row();
	}

}

/* End of file test_model.php */
/* Location: ./application/models/test_model.php */