<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {
	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('gejala_model');
		// proteksi halaman
		$this->simple_login->cek_login();
	}
	
	// data gejala
	public function index()
	{
		$gejala = $this->gejala_model->listing();

		$data = array( 	'title' => 'Data Gejala',
						'gejala'=> $gejala,
						'isi'	=> 'pakar/gejala/list'
						);
		$this->load->view('pakar/layout/wrapper', $data, FALSE); 
	}

	// tambah gejala
	public function tambah()
	{
		// validasi input
		$valid = $this->form_validation;


		//$valid->set_rules('id_gejala','Id gejala','required', 
		//	array( 'required'  => '%s harus diisi'));

		$valid->set_rules('gejala','Nama gejala','required', 
			array( 'required'  => '%s harus diisi'));


		if($valid->run()===FALSE) {

		// end validasi

		$data = array( 'title' => 'Tambah Gejala',
						'isi'	=> 'pakar/gejala/tambah'
					);
		$this->load->view('pakar/layout/wrapper', $data, FALSE);
		
		// masuk database
		}else{
			$i = $this->input;
			$last = $this->gejala_model->getMaxid();
			$getnum = substr($last->id_gejala,-2);
			$plusnum = $getnum+1 ;
			$newid = str_pad((string)$plusnum,2,"0", STR_PAD_LEFT);
			$data = array(	'id_gejala'	=> 'G'.$newid,
							'gejala'   	=> $i->post('gejala'));
			$this->gejala_model->tambah($data);
			$this->session->set_flashdata('sukses','Data telah ditambah');
			redirect(base_url('pakar/gejala'),'refresh');
		}


		// end masuk database

	}

	// edit gejala
	public function edit($id_gejala)
	{
		$gejala = $this->gejala_model->detail($id_gejala);
		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('id_gejala','id_gejala');

		$valid->set_rules('gejala','Nama gejala','required', 
			array( 'required'  => '%s harus diisi'));

	
		if($valid->run()===FALSE) {
		// end validasi

		$data = array(  'title' 	=> 'Edit Gejala',
						'id_gejala' => $id_gejala,
					    'gejala' 	=> $gejala,
					    'isi'   	=> 'pakar/gejala/edit');
		$this->load->view('pakar/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 	'id_gejala'		=> $i->post('id_gejala'),
							'gejala'   		=> $i->post('gejala')						
							);
			$this->gejala_model->edit($data);
			$this->session->set_flashdata('sukses','Data telah diedit');
			redirect(base_url('pakar/gejala'),'refresh');
		}
		// end masuk database
	}
	// delete gejala
	public function delete($id_gejala)
	{
		$data = array('id_gejala' => $id_gejala);
		$this->gejala_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah dihapus');
		redirect(base_url('pakar/gejala'),'refresh');
	}
}

/* End of file Gejala.php */
/* Location: ./application/controllers/pakar/Gejala.php */