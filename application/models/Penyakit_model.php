<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit_model extends CI_Model {

public function __construct()
	{
		parent::__construct();
		$this->load->database(); 
	}	
	//listing all penyakit

	public function listing()

{
	$this->db->select('*');
	$this->db->from('penyakit');
	$this->db->order_by('id_penyakit', 'desc');
	$query = $this->db->get();
	return $query->result();
}

//detail penyakit
public function detail($id_penyakit)

{
	$this->db->select('*');
	$this->db->from('penyakit');
	$this->db->where('id_penyakit', $id_penyakit);
	$this->db->order_by('id_penyakit', 'desc');
	$query = $this->db->get();
	return $query->row();
}
	//tambah
	public function tambah($data)
	{
	$this->db->insert('penyakit',$data);
	}

	// edit
	public function edit($data)
	{
		$this->db->where('id_penyakit',$data['id_penyakit']);
		$this->db->update('penyakit',$data);
	}

	// delete
	public function delete($data)
	{
		$this->db->where('id_penyakit',$data['id_penyakit']);
		$this->db->delete('penyakit',$data);
	}

	public function getMaxid()
	{
		$this->db->select_max('id_penyakit')->limit(1);
		return $this->db->get('penyakit')->row();
	}
}

/* End of file penyakit_model.php */
/* Location: ./application/models/penyakit_model.php */