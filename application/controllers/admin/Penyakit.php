<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {
	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('penyakit_model');
		// proteksi halaman
		$this->simple_login->cek_login();
	}
	
	// data penyakit
	public function index()
	{
		$penyakit = $this->penyakit_model->listing();

		$data = array( 	'title' 	=> 'Data Penyakit',
						'penyakit'	=> $penyakit,
						'isi'		=> 'admin/penyakit/list'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE); 
	}

	// tambah penyakit
	public function tambah()
	{
		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('id_penyakit','id_penyakit','required', 
			array( 'required'  => '%s harus diisi'));

		$valid->set_rules('penyakit','Nama penyakit','required', 
			array( 'required'  => '%s harus diisi'));


		if($valid->run()===FALSE) {
		// end validasi

		$data = array( 'title' => 'Tambah Penyakit',
						'isi'	=> 'admin/penyakit/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 	'id_penyakit'=> $i->post('id_penyakit'),
							'penyakit'   => $i->post('penyakit')
						 );
			$this->penyakit_model->tambah($data);
			$this->session->set_flashdata('sukses','Data telah ditambah');
			redirect(base_url('admin/penyakit'),'refresh');
		}
		// end masuk database
	}

	// edit penyakit
	public function edit($id_penyakit)
	{
		$penyakit = $this->penyakit_model->detail($id_penyakit);
		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('id_penyakit','id_penyakit');

		$valid->set_rules('penyakit','Nama penyakit','required', 
			array( 'required'  => '%s harus diisi'));

	
		if($valid->run()===FALSE) {
		// end validasi

		$data = array( 	'title' 		=> 'Edit Penyakit',
						'id_penyakit' 	=> $id_penyakit,
					   	'penyakit' 		=> $penyakit,
					   	'isi'   		=> 'admin/penyakit/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 	'id_penyakit'	=> $i->post('id_penyakit'),
							'penyakit'   	=> $i->post('penyakit')
							);
			$this->penyakit_model->edit($data);
			$this->session->set_flashdata('sukses','Data telah diedit');
			redirect(base_url('admin/penyakit'),'refresh');
		}
		// end masuk database
	}
	// delete penyakit
	public function delete($id_penyakit)
	{
		$data = array('id_penyakit' => $id_penyakit);
		$this->penyakit_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah dihapus');
		redirect(base_url('admin/penyakit'),'refresh');
	}
}

/* End of file Gejala.php */
/* Location: ./application/controllers/admin/Gejala.php */