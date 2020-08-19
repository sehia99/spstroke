<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		// proteksi halaman
		$this->simple_login->cek_login();
	}

	// halaman utama dasbor
	public function index()
	{
		$data = array( 'title' => 'halaman Administrator',
						'isi'	=> 'member/gejala/list');
		$this->load->view('member/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/admin/Dasbor.php */