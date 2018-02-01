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

	function listdevice()
	{
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->where('status','1');
		$this->db->or_where('status','0');
		$this->db->order_by('waktu','asc');
		$this->db->group_by('device');
		$query = $this->db->get();
		return $query->result();
	}

	function listbayar(){
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->where('status','1');
		$this->db->or_where('status','0');
		$this->db->order_by('waktu','asc');
		$query = $this->db->get();
		return $query->result();
	}

	function detilbayar(){
		$stat = array('0','1');
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->join('detail_pesanan','pesanan.id_order = detail_pesanan.id_order');
		$this->db->where_in('pesanan.status',$stat);
		$query = $this->db->get();
		return $query->result();
	}

	function dobayar($data){
		$stat = array('0','1');
		$this->db->set('status', '2');
		$this->db->where('device',$data);
		$this->db->where_in('status',$stat);
		$this->db->update('pesanan');
		return true;
	}


}