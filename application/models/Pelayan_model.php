<?php

/**
* 
*/
class Pelayan_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();	
	}

	function getBillreq(){

		$req = $this->db->get_where('billrequest',array('status'=>'0'));
		return $req->result_array();
	}

	function takeBillreq($id){
		$device = $id;

		$this->db->set('status','1');
		$this->db->where('status','0');
		$this->db->where('device',$device);
		$this->db->update('billrequest');
		return true;
	}

}