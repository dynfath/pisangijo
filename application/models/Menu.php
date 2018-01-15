<?php 
	class Menu extends CI_Model
	{
		
	public function __construct()
	{
		$this->load->database();
	}

	
	function getMenuMakanan()
	{
		$query = $this->db->get_where('makanan');
		
		return $query->result_array();

	}

	function getMenuMinuman()
	{
		$query = $this->db->get_where('minuman');

		return $query->result_array();
	}

	}
	
?>