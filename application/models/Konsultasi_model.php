<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing all konsultasi
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('konsultasi');
		$this->db->order_by('id_konsultasi', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// detail konsultasi
	public function detail($id_konsultasi)
	{
		$this->db->select('*');
		$this->db->from('konsultasi');
		$this->db->where('id_konsultasi', $id_konsultasi);
		$this->db->order_by('id_konsultasi', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// tambah
	public function tambah($data)
	{
		$this->db->insert('konsultasi', $data);
	}

	// edit
	public function edit($data)
	{
		$this->db->where('id_konsultasi', $data['id_konsultasi']);
		$this->db->update('konsultasi',$data);
	}

	// delete
	public function delete($data)
	{
		$this->db->where('id_konsultasi', $data['id_konsultasi']);
		$this->db->delete('konsultasi',$data);
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */