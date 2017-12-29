<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayan extends CI_Controller {

	public function view($page = 'cekmeja')
	{
		$data = array(
				'signin' => $this->session->userdata('signin'),
				'divisi' => $this->session->userdata('divisi')
		);
		
		if ( $data['signin'] == true && $data['divisi'] == 'pelayan') {
			$exists = file_exists(APPPATH.'views/pages/pelayan/' . $page) . '.php';
			if (!$exists) {
				show_404();
			}
			$halaman['page'] = $page;
			$this->load->view('pages/pelayan/'.$page);
		}else {
			redirect(base_url());
		}
	}
}
