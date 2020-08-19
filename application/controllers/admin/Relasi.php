<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relasi extends CI_Controller {
	// load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('relasi_model');
		// proteksi halaman
		$this->simple_login->cek_login();
	}
	
	// data relasi
	public function index()
	{
		$relasi = $this->relasi_model->listing();

		$data = array( 	'title' 	=> 'Tambah Relasi',
						'relasi'	=> $relasi,
						'isi'		=> 'admin/relasi/list'
						);
		$this->load->view('admin/layout/wrapper', $data, FALSE); 

		// echo json_encode($relasi);
	}



	// tambah relasi
	public function tambah()
	{
		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('relasi','Nama relasi','required', 
			array( 'required'  => '%s harus diisi'));


		if($valid->run()===FALSE) {
		// end validasi

		$data = array( 'title' => 'Tambah Relasi',
						'isi'	=> 'admin/relasi/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 	'id_penyakit'=> $i->post('id_penyakit'),
							'id_gejala'   => $i->post('id_gejala')
						 );
			$this->relasi_model->tambah($data);
			$this->session->set_flashdata('sukses','Data telah ditambah');
			redirect(base_url('admin/relasi'),'refresh');
		}
		// end masuk database
	}

	// edit relasi
	public function edit($id_relasi)
	{
		$relasi = $this->relasi_model->detail($id_relasi);
		// validasi input
		$valid = $this->form_validation;


		$valid->set_rules('gejala','Nama gejala','required', 
			array( 'required'  => '%s harus diisi'));

	
		if($valid->run()===FALSE) {
		// end validasi

		$data = array( 	'title' 		=> 'Edit Relasi',
						'relasi' 		=> $relasi,
					   	'isi'   		=> 'admin/relasi/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 	'id_relasi'	=> $id_relasi,
							'gejala'   	=> $i->post('gejala')
							);
			$this->relasi_model->edit($data);
			$this->session->set_flashdata('sukses','Data telah diedit');
			redirect(base_url('admin/relasi'),'refresh');
		}
		// end masuk database
	}
	// delete relasi
	public function delete($id_relasi)
	{
		$data = array('id_relasi' => $id_relasi);
		$this->relasi_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah dihapus');
		redirect(base_url('admin/relasi'),'refresh');
	}
}

/* End of file Gejala.php */
/* Location: ./application/controllers/admin/Gejala.php */