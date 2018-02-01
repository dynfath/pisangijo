<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Kasir_model");
	}

	public function index()
	{
		$data = array(
				'signin' => $this->session->userdata('signin'),
				'divisi' => $this->session->userdata('divisi')
		);
		
		if ( $data['signin'] == true && $data['divisi'] == 'Kasir') {
			$data['list'] = $this->Kasir_model->listdevice();
			$data['total'] = $this->Kasir_model->listbayar();
			$data['detil'] = $this->Kasir_model->detilbayar();
			$this->load->view('pages/kasir/kasir', $data);
		}else {
			redirect(base_url());
		}
	}

	function bayar(){
		$data = $this->input->post('bayar');
		$this->Kasir_model->dobayar($data);
		redirect(base_url());
	}

}