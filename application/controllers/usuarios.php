<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios extends CI_Controller {

	
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('inicio');
		$this->load->view('include/fooder');
	}

}
