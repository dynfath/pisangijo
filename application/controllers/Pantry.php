<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pantry extends CI_Controller {

	public function index()
	{
		/*$data = array(
				'signin' => $this->session->userdata('signin'),
				'divisi' => $this->session->userdata('divisi')
		);
		
		if ( $data['signin'] == true && $data['divisi'] == 'pantry') {
			$this->load->view('pages/pegawai/pantry');
		}else {
			redirect(base_url());
		}*/
		$this->load->view('pages/pantry/pantry');
	}
}
