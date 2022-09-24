<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios extends CI_Controller {

	
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('inicio');
		$this->load->view('include/fooder');
	}
public function indexE()
	{
		 $lista=$this->entrenador_model->listaentrenador();
         $data['entrenador']=$lista;
		$this->load->view('include/header');
		$this->load->view('listaEntrenador');
		$this->load->view('include/fooder');
	}

	}