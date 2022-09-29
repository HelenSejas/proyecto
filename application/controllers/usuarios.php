<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios extends CI_Controller {

	
	public function indexInicio()
	{
		$this->load->view('include/header');
		$this->load->view('inicio');
		$this->load->view('include/fooder');
	}
public function index()
	{
		if($this->session->userdata('login')){
			redirect ('usuarios/panel',' refresh');
		}
		else{
		$this->load->view('include/header');
		$this->load->view('login');
		$this->load->view('include/fooder');
		}
		
	}

public function validar()
	{
			$usuario=$_POST['usuario'];
			$password=$_POST['password'];
			$consulta=$this->usuario_model->validar($usuario,$password);
		if($consulta->num_rows()>0){
			foreach ($consulta->result() as $row) 
			{
          $this->session->set_userdata('idEntrenador',$row->idEntrenador);
		  $this->session->set_userdata('usuario',$row->usuario);
		  $this->session->set_userdata('tipo',$row->tipo);
			redirect ('usuarios/panel','refresh');
		}
		}
		else{
			redirect ('usuarios/index', 'refresh');
		}
	}
public function panel()
	{
		if($this->session->userdata('login'))
		{
			redirect ('estudiante/index', 'refresh');
		}
		else
	{
			redirect ('usuarios/index', 'refresh');
		}
	}
}
