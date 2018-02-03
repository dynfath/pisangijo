<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayan extends CI_Controller {
	public function __construct(){
		parent::__construct();
        $this->load->model('menu');
        $this->load->model('Pelayan_model');
        $this->load->helper('url_helper');
	}

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
			$data['pesanan'] = $this->menu->getpesanan();
			$data['devices'] = $this->menu->getDevices();
			$halaman['page'] = $page;
			$this->load->view('pages/pelayan/'.$page,$data);
		}else {
			redirect(base_url());
		}
	}

	function tampildetilmenu(){
		$id = $this->input->post('id');
		$data= $this->menu->getpesandetil($id);
		echo json_encode($data);
	}

	function tampilmenu(){
		$data= $this->menu->getpesanan();
		echo json_encode($data);
	}

	function showReqbill(){
		$bill = $this->Pelayan_model->getBillreq();
		echo json_encode($bill);
	}

	function takebill(){
		$id = $this->input->post('id');
		$req = $this->Pelayan_model->takeBillreq($id);
		echo json_encode($id);
	}
}
