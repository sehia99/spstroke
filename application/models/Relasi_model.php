<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relasi_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing all relasi
	public function listing()
	{
		$this->db->select('penyakit.*,gejala.*');
		$this->db->from('relasi');
		$this->db->order_by('id_relasi', 'desc');
		$this->db->join('penyakit','penyakit.id_penyakit=relasi.id_penyakit');
		$this->db->join('gejala','gejala.id_gejala=relasi.id_gejala');
		$query = $this->db->get();
		return $query->result();
	}

	

	public function pertanyaan($id)
	{
		$this->db->select('gejala.gejala, tree.ifyes, tree.ifno,tree.hasil');
		$this->db->from('tree');
		$this->db->join('gejala','gejala.id_gejala = tree.id_gejala');
		$this->db->where('tree.id',$id);
		$query = $this->db->get();
		return $query->row();
	}

	// public function gejala($id_gejala)
	// {

	// 	$this->db->where('id_gejala',$id_gejala);
	// 	$query = $this->db->get('gejala');
	// 	return $query->result();
	// }

	public function hasil($hasil)
	{	
		
		$this->db->where('id_penyakit',$hasil);
		$query = $this->db->get('penyakit');
		return $query->row();
	}

	public function solusi($id_penyakit)
	{

		$this->db->where('id_penyakit',$id_penyakit);
		$query = $this->db->get('solusi');
		return $query->result();
	}
	// detail relasi
	

	// tambah
	public function tambah($data)
	{
		$this->db->insert('relasi', $data);
	}

	// edit
	public function edit($data)
	{
		$this->db->where('id_relasi', $data['id_relasi']);
		$this->db->update('relasi',$data);
	}

	// delete
	public function delete($data)
	{
		$this->db->where('id_relasi', $data['id_relasi']);
		$this->db->delete('relasi',$data);
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */