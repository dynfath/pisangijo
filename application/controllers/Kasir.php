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
			$data['list'] = $this->Kasir_model->listbayar();
			$this->load->view('pages/kasir/kasir', $data);
		}else {
			redirect(base_url());
		}
	}

}