<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function test()
	{
		$this->load->model('test_model');
		$query =  $this->test_model->getGejala();
		$query2 = substr($query->id_gejala,-2);
		$query3 = $query2-30;
		$data['gejala'] = str_pad((string)$query3,2,"0", STR_PAD_LEFT);
		$this->load->view('test', $data);
	}
}
