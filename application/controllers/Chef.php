<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chef extends CI_Controller {

	public function index()
	{
		/*$data = array(
				'signin' => $this->session->userdata('signin'),
				'divisi' => $this->session->userdata('divisi')
		);
		
		if ( $data['signin'] == true && $data['divisi'] == 'pelayan') {
			$this->load->view('pages/chef/chef');
		}else {
			redirect(base_url());
		}*/
		$this->load->view('pages/chef/chef');
	}
}
