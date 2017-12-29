<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function index()
	{
		$data = array(
				'signin' => $this->session->userdata('signin'),
				'device' => $this->session->userdata('device')
		);
		
		if ( $data['signin'] == true && $data['device'] != null) {
			$this->load->view('pages/pelanggan/index');
		}else {
			redirect(base_url());
		}
		
	}
}
