<?php 
	class Menu extends CI_Model
	{
		
	public function __construct()
	{
		$this->load->database();
	}

	
	function getMenuMakanan()
	{
		$data = array('jenis_menu' => 'makanan' );
		$query = $this->db->get_where('menu', $data);
		
		return $query->result_array();

	}

	function getMenuMinuman()
	{
		$data = array('jenis_menu' => 'minuman' );
		$query = $this->db->get_where('menu', $data);

		return $query->result_array();
	}

	function insertPesan(){

		$datainsert = array(
			'total_harga' => $this->cart->total() ,
			'device' => $this->session->userdata('device') 
			 );
		$query1 = $this->db->insert('pesanan', $datainsert);
		$id = $this->db->insert_id();
		foreach ($this->cart->contents() as $value) {
			$data = array(
				'id_order' => $id,
				'id_menu' => $value['id'], 
				'nama_menu' => $value['name'], 
				'harga' => $value['price'], 
				'qty' => $value['qty'], 
				'subtotal' =>  $value['subtotal']
			);
		$query = $this->db->insert('detail_pesanan', $data);
		
		}
		return true;
	}

	function getpesanan(){
		$query = $this->db->get('pesanan');
		return $query->result_array();
	}

	function getpesandetil($id){
		$data = array('id_order' => $id );
		$query = $this->db->get_where('detail_pesanan', $data);
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
		$query = $this->db->get_where('pesanan', $data);
		return $query->result_array();
	}

	function getNotadetil(){
		$this->db->select('*');
		$this->db->from('detail_pesanan');
		$query = $this->db->get();
		return $query->result();
	}
	

}

	
?>