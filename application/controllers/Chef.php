<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chef extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Chef_model");
	}

	public function index()
	{
		$data = array(
				'signin' => $this->session->userdata('signin'),
				'divisi' => $this->session->userdata('divisi')
		);
		
		if ( $data['signin'] == true && $data['divisi'] == 'Chef') {
			$data['list'] = $this->Chef_model->listpesan();
			$data['detil'] = $this->Chef_model->getjoinlist();
			$this->load->view('pages/chef/chef', $data);
		}else {
			redirect(base_url());
		}
	}

	public function getlist()
	{
		$data = $this->Chef_model->listpesan();
		print_r($data);
	}

	function getdone(){
		$id = $this->input->post('id_order');
		$this->Chef_model->selesaibuat($id);
		redirect(base_url('Chef'));

	}
}
