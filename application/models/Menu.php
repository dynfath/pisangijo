<?php 
	class Menu extends CI_Model
	{
		
	public function __construct()
	{
		$this->load->database();
	}

	
	function getMenuMakanan()
	{
		$query = $this->db->get('makanan');
		
		return $query->result_array();

	}

	function getMenuMinuman()
	{
		$query = $this->db->get('minuman');

		return $query->result_array();
	}

	function insertPesan(){

		$datainsert = array(
			'total_harga' => $this->cart->total() ,
			'device' => $this->session->userdata('device') 
			 );
		$query1 = $this->db->insert('order', $datainsert);
		$id = $this->db->insert_id();
		foreach ($this->cart->contents() as $value) {
			$data = array(
				'id_order' => $id,
				'kd_pesanan' => $value['id'], 
				'nama' => $value['name'], 
				'harga' => $value['price'], 
				'qty' => $value['qty'], 
				'subtotal' =>  $value['subtotal']
			);
		$query = $this->db->insert('pesan', $data);
		
		}
		return true;
	}

	function getpesanan(){
		$query = $this->db->get('order');
		return $query->result_array();
	}

	function getpesandetil($id){
		$data = array('id_order' => $id );
		$query = $this->db->get_where('pesan', $data);
		return $query->result_array();
	}

	function getDevices()
	{
		$status = 0;
		$data = array(
				'status' => $status
			);
		$query = $this->db->get_where('devices', $data);

		return $query->result_array();
	}

	function getNota(){
		$data = array(
				'device' => $this->session->userdata('device'),
				'status' => 0
			);
		$query = $this->db->get_where('order', $data);
		return $query->result_array();
	}

	function getNotadetil(){
		$this->db->select('*');
		$this->db->from('pesan');
		$query = $this->db->get();
		return $query->result();
	}
	

}

	
?>