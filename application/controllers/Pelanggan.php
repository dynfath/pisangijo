<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	public function __construct(){
		parent::__construct();
        $this->load->model('menu');
        $this->load->helper('url_helper');
	}

	public function index()
	{
		$data = array(
				'signin' => $this->session->userdata('signin'),
				'device' => $this->session->userdata('device')
		);
		
		if ( $data['signin'] == true && $data['device'] != null) {
				$data['order'] = $this->cart->contents();
				$data['makanan'] = $this->menu->getMenuMakanan();
				$data['minuman'] = $this->menu->getMenuMinuman();
				$this->load->view('pages/pelanggan/index', $data);
		
		}else {
			redirect(base_url());
		}
		
	}


	public function order(){
		
		$data = array(
			'id'    => $this->input->post('id'),
			'name'  => $this->input->post('nama'),
			'price'  => $this->input->post('harga'),
			'qty' => $this->input->post('qty')
				
		);
		
		$this->cart->insert($data);

	}

	public function hapusOrder()
	{
		$id = $this->input->post('id');
		$data = array(
			'rowid' => $id,
			'qty' => 0
		);

		$this->cart->update($data);
		echo json_encode($data);


	}

	function getjmlpesan(){
		$count = 0;
		foreach ($this->cart->contents() as $item) {
			$count++;
		}

		echo json_encode($count);
	}

	public function listpesan()
	{
		$data = $this->cart->contents();
		echo json_encode($data);
	}

	function inspesan(){
		$data = $this->menu->insertPesan();
		$this->cart->destroy();
		echo json_encode($data);
	}

	function getnota(){
		$get['order'] = $this->menu->getNota();
		$get['pesan'] = $this->menu->getNotadetil();
		echo json_encode($get);
	}

}