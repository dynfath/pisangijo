<?php

/**
* 
*/
class Chef_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();	
	}

	function listpesan()
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->where('status','0');
		$this->db->order_by('waktu','asc');
		$query = $this->db->get();
		return $query->result();
	}

	public function getjoinlist()
	{
		$this->db->select('*');
		$this->db->from('detail_pesanan');
		$query = $this->db->get();
		return $query->result();
	}

	public function selesaibuat($id)
	{
		$data = array('status' => '1' );
		$this->db->where('id_order', $id);
		$this->db->update('pesanan', $data);		
	}

}