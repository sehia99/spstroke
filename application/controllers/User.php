<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		
		$this->load->model('Konsultasi_model');
		$this->load->model('Relasi_model');
	}

	
	public function index()
	{
		$data['content']=$this->load->view('user/pages/home','',true);
		$this->load->view('user/default',$data);
	}
	
	public function tentang()
	{
		$data['content']=$this->load->view('user/pages/tentang','',true);
		$this->load->view('user/default',$data);
	}
	// public function gejala()
	// {
	// 	$data2['gejala']=$this->Gejala_model->listing();
	// 	$data['content']=$this->load->view('user/pages/gejala',$data2,true);
	// 	$this->load->view('user/default',$data);
	// }
	
	// public function penyakit()
	// {
	// 	$data2['penyakit']=$this->Penyakit_model->listing();
	// 	$data['content']=$this->load->view('user/pages/penyakit',$data2,true);
	// 	$this->load->view('user/default',$data);
	// }

	public function konsultasi()
	{
		$data2['gejala']=$this->Gejala_model->listing();
		// $data2['konsultasi']=$this->Konsultasi_model->listing();
		$data['content']=$this->load->view('user/pages/konsultasi',$data2,true);
		$this->load->view('user/default',$data);
	// echo json_encode($data2);
	}

	public function submit_konsultasi()
	{
		$id =$_POST['gejala'];
		// $gejala='';
		// foreach ($id as $p) {
		// 	$gejala =  $p.",".$gejala;
		// }

		$diagnosa = $this->Relasi_model->diagnosa($id);




		// $gejala = explode(",",$_POST['gejala']);
		echo json_encode($diagnosa) ;
		// echo json_encode($id) ;
	}

	public function pertanyaan($id=''){
		if ($id == '') {
			$data2['pertanyaan'] = $this->Relasi_model->pertanyaan('1');
		}elseif ($id == '99') {
			redirect('user/hasil');
		}else{
			$data2['pertanyaan'] = $this->Relasi_model->pertanyaan($id);
			if ($data2['pertanyaan']->hasil != null) {
				$data2['hasil'] = $data2['pertanyaan']->hasil;
			}
			
		}

		$data['content']=$this->load->view('user/pages/pertanyaan',$data2,true);
		$this->load->view('user/default',$data);

		

		// echo json_encode($data2);
	}

	public function hasil($hasil=''){
		if ($hasil=='') {
			// echo 'tidak terdeteksi';
			$data2['hasil']='';
			$data['content']=$this->load->view('user/pages/gagal',$data2,true);
			$this->load->view('user/default', $data);
		}else{
			//$data2['gejala'] = $this->Relasi_model->gejala($data2['hasil']->id_gejala);
			$data2['hasil'] = $this->Relasi_model->hasil($hasil);
			$data2['solusi'] = $this->Relasi_model->solusi($data2['hasil']->id_penyakit);

			$data['content']=$this->load->view('user/pages/hasil',$data2,true);
			$this->load->view('user/default',$data);
			// echo json_encode($data2);
		}


	
		

		// echo json_encode($data2);
	}
	
}
