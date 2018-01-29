<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$data = array(
				'signin' => $this->session->userdata('signin'),
				'divisi' => $this->session->userdata('divisi'),
				'device' => $this->session->userdata('device'),
			);
			if ( ($data['signin'] == true)&&($data['divisi'] != null)) {
				redirect(base_url($data['divisi']),$data);
			}elseif (($data['signin'] == true)&&($data['device'] != null)) {
				redirect(base_url('pelanggan'));
			}
			else{
				$this->load->view('pages/login/index');
			}
	}

		public function signdevice()
	{
		$device = $this->input->post('device');
		$pass = $this->input->post('password');
		$data = array(
			'device' => $device,
			'password' => $pass,
			'status' => 0
			 );
		$status = 1;
		$res = $this->db->get_where('devices',$data);
		if ($res->num_rows() > 0 ) {
			$this->session->set_userdata(
			array(
				'signin' => true,
				'device' => $device,
				'status' => $status
				)
			);
			$data = array('device' => $device, 'password' => $pass, 'status' => 1);
        	$this->db->where(device, $device); // removed quotes
        	$this->db->update('devices', $data);
			redirect(base_url('pelanggan'));
		} else {
			$this->session->set_flashdata('result_login', 'Username atau Password Salah.');
				redirect(base_url());
		}
		
	}

	public function signpegawai()
	{
		$uname = $this->input->post('username');
		$pass = $this->input->post('password');
		$divisi = $this->input->post('divisi');
		$data = array(
			'username' => $uname,
			'password' => $pass,
			'divisi' => $divisi
			 );
		$res = $this->db->get_where('pegawai',$data);
		if ($res->num_rows() > 0 ) {
			$this->session->set_userdata(
			array(
				'signin' => true,
				'divisi' => $divisi
				)
			);
			redirect(base_url($divisi));
		} else {
			$this->session->set_flashdata('result_login', 'Username atau Password Salah.');
				redirect(base_url());
		}
		

	}


	
	public function destroy()
	{
		session_destroy();
		redirect(base_url());
	}
}?>