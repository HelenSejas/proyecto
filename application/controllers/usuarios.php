<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios extends CI_Controller {

	
	public function indexInicio()
	{
		$lista=$this->estudiante_model->listaestudiantes();
		 $data['estudiante']=$lista;
		$this->load->view('include/header');
		$this->load->view('inicio',$data);
		$this->load->view('include/fooder');
	}
		public function indexSesion()
	{
		$this->load->view('include/header');
		$this->load->view('sesion');
		$this->load->view('include/fooder');
	}
public function index()
	{
		 $data['msg']=$this->uri->segment(3);
		if($this->session->userdata('login')){
			redirect ('usuarios/panel',' refresh');
		}
		else{
		$this->load->view('include/header');
		$this->load->view('login',$data);
		$this->load->view('include/fooder');
		}
		
	}

public function validar()
	{
			$usuario=$_POST['usuario'];
			$password=md5($_POST['password']);
			$consulta=$this->estudiante_model->validarusuario($usuario,$password);
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
			redirect ('usuarios/index/2', 'refresh');
		}
	}
public function panel()
	{
		if($this->session->userdata('usuario'))
		{
			redirect ('estudiante/indexEstudiante', 'refresh');
		}
		else
	{
			redirect ('usuarios/index/3', 'refresh');
		}
	}

	public function logout()
	{
	
		$this->session->sess_destroy();
		redirect ('usuarios/index/1', 'refresh');
	}

}
