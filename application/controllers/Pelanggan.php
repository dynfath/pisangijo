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
		/*$data = array(
				'signin' => $this->session->userdata('signin'),
				'device' => $this->session->userdata('device')
		);
		
		if ( $data['signin'] == true && $data['device'] != null) {
			$this->load->view('pages/pelanggan/index');
		}else {
			redirect(base_url());
		}*/
		$data['makanan'] = $this->menu->getMenuMakanan();
		$data['minuman'] = $this->menu->getMenuMinuman();
		$this->load->view('pages/pelanggan/index', $data);
		
	}
}