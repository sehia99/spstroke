<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solusi extends CI_Controller {
	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('solusi_model');
		// proteksi halaman
		$this->simple_login->cek_login();
	}
	
	// data solusi
	public function index()
	{
		$solusi = $this->solusi_model->listing();

		$data = array( 	'title' 	=> 'Data Solusi',
						'solusi'	=> $solusi,
						'isi'		=> 'admin/solusi/list'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE); 
	}

	// tambah solusi
	public function tambah()
	{
		// validasi input
		$valid = $this->form_validation;
		$valid->set_rules('id_solusi','Id solusi','required',
			array( 'required'  => '%s harus diisi'));
		$valid->set_rules('id_penyakit','Id Penyakit','required', 
			array( 'required'  => '%s harus diisi'));
		$valid->set_rules('solusi','Nama solusi','required', 
			array( 'required'  => '%s harus diisi'));


		if($valid->run()===FALSE) {
		// end validasi

		$data = array( 'title' => 'Tambah Solusi',
						'isi'	=> 'admin/solusi/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 'id_solusi'   => $i->post('id_solusi'),
							'id_penyakit'   => $i->post('id_penyakit'),
							'solusi'   => $i->post('solusi'));
			$this->solusi_model->tambah($data);
			$this->session->set_flashdata('sukses','Data telah ditambah');
			redirect(base_url('admin/solusi'),'refresh');
		}
		// end masuk database
	}

	// edit solusi
	public function edit($id_solusi)
	{
		$solusi = $this->solusi_model->detail($id_solusi);
		// validasi input
		$valid = $this->form_validation;
		$valid->set_rules('id_solusi','Id solusi','required',
			array( 'required'  => '%s harus diisi'));
		$valid->set_rules('id_penyakit','Id Penyakit','required', 
			array( 'required'  => '%s harus diisi'));
		$valid->set_rules('solusi','Nama solusi','required', 
			array( 'required'  => '%s harus diisi'));

	
		if($valid->run()===FALSE) {
		// end validasi

		$data = array( 'title' => 'Edit Solusi',
					   'solusi' => $solusi,
					   'isi'   => 'admin/solusi/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 	'id_solusi'   => $i->post('id_solusi'),
							'id_penyakit'   => $i->post('id_penyakit'),
							'solusi'   		=> $i->post('solusi')
							);
			$this->solusi_model->edit($data);
			$this->session->set_flashdata('sukses','Data telah diedit');
			redirect(base_url('admin/solusi'),'refresh');
		}
		// end masuk database
	}
	// delete solusi
	public function delete($id_solusi)
	{
		$data = array('id_solusi' => $id_solusi);
		$this->solusi_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah dihapus');
		redirect(base_url('admin/solusi'),'refresh');
	}
}

/* End of file Gejala.php */
/* Location: ./application/controllers/admin/Gejala.php */