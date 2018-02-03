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
		
		$ada_id = $this->session->userdata('id_order');
		$data = array(
			'id_order' => $ada_id,
			'status' => '0'
			 );
		$row = $this->db->get_where('pesanan',$data);
		$rowdata = $row->result_array();
		if (count($rowdata)!=0) {
			$total = $this->cart->total();
			$this->db->set('total_harga','total_harga + '.$total,false);
			$this->db->where('id_order',$ada_id);
			$this->db->update('pesanan');

			foreach ($this->cart->contents() as $value) {
				$data = array(
					'id_order' => $ada_id,
					'id_menu' => $value['id'], 
					'nama_menu' => $value['name'], 
					'harga' => $value['price'], 
					'qty' => $value['qty'], 
					'subtotal' =>  $value['subtotal']
				);
			$query = $this->db->insert('detail_pesanan', $data);
			}
			return true;
		} else {
			$datainsert = array(
				'total_harga' => $this->cart->total() ,
				'device' => $this->session->userdata('device') 
				 );
			$query1 = $this->db->insert('pesanan', $datainsert);
			$id = $this->db->insert_id();
			$this->session->set_userdata('id_order',$id);
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
		$data = $this->session->userdata('device');
		$stat = array('0','1');
		$this->db->select('*');
		$this->db->from('pesanan');
		$this->db->where('device', $data);
		$this->db->where_in('status', $stat);
		$query = $this->db->get();
		return $query->result_array();
	}

	function getNotadetil(){
		$this->db->select('*');
		$this->db->from('detail_pesanan');
		$query = $this->db->get();
		return $query->result();
	}

	function requestbill(){
		$data = array(
			'device' => $this->session->userdata('device'), 
			'deskripsi' => 'Request Bill',
			'status'	=> '0'
		);

		$query = $this->db->get_where('billrequest', $data);
		$req = $query->result_array();
		if(count($req) == 0){
			$query = $this->db->insert('billrequest',$data);
			return true;
		}else{
			return false;
		}
	}

	function bahanbaku(){
		$this->db->trans_begin();
		$gagal = false;
		foreach ($this->cart->contents() as $value) {
			$this->db->select('b1.`id_menu` AS id_menu,b1.`id_bahan` AS id_bahan, b1.`jumlah` AS jml_pakai, b2.`jumlah` AS jml_stock');
	        $this->db->from('bahan_menu b1');
	        $this->db->join('bahan b2', 'b1.`id_bahan`=b2.`id_bahan`');
	        $this->db->where('b1.`id_menu`', $value['id']);
	        $query = $this->db->get()->result_array();
	        	foreach ($query as $key) {
	        		 $jml = $key['jml_pakai'] * $value['qty'];
	        		 $stock = $key['jml_stock'];
	        		 $stock = $stock - $jml;
	        		 $hasil[] = array('jumlah' => $stock, 'id' => $key['id_bahan'] );
	        		 if ($stock < 0) {
	        		 	$gagal = true;
	        		 } else {
	        		 	$this->db->set('jumlah', $stock);
	        			$this->db->where('id_bahan', $key['id_bahan']);
	        		 	$this->db->update('bahan');
	        		 }
	        	}

		}
		if ($gagal != true) {
			$this->db->trans_commit();
			return $hasil;
		} else {
			$this->db->trans_rollback();
			return false;
		}	
		
	}
	

}

	
?>