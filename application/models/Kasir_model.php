<?php

/**
* 
*/
class Kasir_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();	
	}

	function listbayar()
	{
		$this->db->select('*');
		$this->db->from('order');
		$this->db->where('status','1');
		$this->db->order_by('waktu','asc');
		$query = $this->db->get();
		return $query->result();
	}


}