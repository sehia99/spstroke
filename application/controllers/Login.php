<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	// halaman login

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

	public function index()
	{
        $this->form_validation->set_rules('username','Username','required',array( 'required' => '%s harus diisi'));
		$this->form_validation->set_rules('password','Password','required',array( 'required' => '%s harus diisi'));

        if ($this->form_validation->run() == false){
            $data['title'] = 'Login Page';
            $this->load->view('login/list', $data);

        } else {
            //validasi sukses
            $this->_login(); //_login adalah method private
        }
    }

    private function _login()
    {
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        $user = $this->db->get_where('users', ['username' => $username])->row_array();
        
        if($user) {
                //cek password
                if(password_verify($password, $user['password'])){
                    $data = [
                        'username' => $user['username'],
                        'akses_level' => $user['akses_level'],
                    ];
                    $this->session->set_userdata($data);
                    if ($user['akses_level'] == Admin ){
                        redirect('admin/dasbor');
                    } else {
                        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Success login ! Welcome.</div>');
                        redirect('pakar/dasbor');
                    } 
                } else {
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">This username has not been activated!</div>');
                redirect('login');
            }
    }


	// fungsi login
	public function logout()
	{
		// ambil fungsi logout dari simple_login
		$this->simple_login->logout();
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */