<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermember extends CI_Controller {

	// load model
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->model('user_model');
		// proteksi halaman
		$this->simple_login->cek_login();
		$this->load->helper('text');
	}


	// data user
	public function index()
	{
		$user = $this->user_model->listing();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('user/pages/home', $data);
		$this->load->view('admin/layout/wrapper', $data, FALSE); 
	}

	// tambah user
	public function tambah()
	{
		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama lengkap','required', 
			array( 'required'  => '%s harus diisi'));

		$valid->set_rules('username','Username','required', 
			array(  'required'   => '%s harus diisi',
					'is_unique'	 => '%s sudah ada. Buat username baru.'));

		$valid->set_rules('password','Password','required', 
			array( 'required'  => '%s harus diisi'));

		if($valid->run()==false) {
		// end validasi

		$data = array( 	'title' => 'Tambah Pengguna',
						'isi'	=> 'admin/user/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 'nama'   		=> $i->post('nama'),
						   'username'   	=> $i->post('username'),
						   'password'   	=> SHA1($i->post('password')),
						   'akses_level'    => $i->post('akses_level')
						);
			$this->user_model->tambah($data);
			$this->session->set_flashdata('sukses','Data telah ditambah');
			redirect(base_url('admin/user'),'refresh');
		}
		// end masuk database
	}

	public function save(){
			$i = $this->input;
			$data = array( 'nama'   		=> $i->post('nama'),
						   'username'   	=> $i->post('username'),
						   'password'   	=> SHA1($i->post('password')),
						   'akses_level'    => $i->post('akses_level')
						);
			$this->user_model->tambah($data);
			$this->session->set_flashdata('sukses','Data telah ditambah');
			redirect(base_url('admin/user'),'refresh');
	}


	// edit user
	public function edit($id_user)
	{
		$user = $this->user_model->detail($id_user);
		// validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama lengkap','required', 
			array( 'required'  => '%s harus diisi'));


		$valid->set_rules('password','Password','required', 
			array( 'required'  => '%s harus diisi'));

		if($valid->run()===FALSE) {
		// end validasi

		$data = array( 'title' => 'Edit Pengguna',
					   'user'  => $user,
					   'isi'   => 'admin/user/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk database
		}else{
			$i = $this->input;
			$data = array(  'id_user'		=> $id_user,
							'nama'   		=> $i->post('nama'),
							'username'   	=> $i->post('username'),
							'password'   	=> SHA1($i->post('password')),
							'akses_level'   => $i->post('akses_level')
							);
			$this->user_model->edit($data);
			$this->session->set_flashdata('sukses','Data telah diedit');
			redirect(base_url('admin/user'),'refresh');
		}
		// end masuk database
	}
	// delete user
	public function delete($id_user)
	{
		$data = array('id_user' => $id_user);
		$this->user_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah dihapus');
		redirect(base_url('admin/user'),'refresh');
	}
}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */


?>