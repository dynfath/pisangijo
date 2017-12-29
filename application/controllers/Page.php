<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message.php');
	}

	public function view($page = 'home')
	{
		$this->load->view('pages/'.$page);

	}

}

