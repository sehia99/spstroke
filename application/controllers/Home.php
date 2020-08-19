<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	// halaman utama website-homepage
	public function index()
	{
		$data = array( 'title' => 'Sistem Pakar',
						'isi'	=> 'member/user/list');
		$this->load->view('member/layout/wrapper', $data, FALSE);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */