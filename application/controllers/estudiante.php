<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estudiante extends CI_Controller {

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
	public function indexEstudiante()
	{   
	    $lista=$this->estudiante_model->listaestudiantes();
         $data['estudiante']=$lista;
		$this->load->view('include/header');
		$this->load->view('lista', $data);
		$this->load->view('include/fooder');
	}
		public function inactivos()
	{   
	    $lista=$this->estudiante_model->listadeshabilitados();
         $data['estudiante']=$lista;
		$this->load->view('include/header');
		$this->load->view('listadeshabilitados', $data);
		$this->load->view('include/fooder');

	}
	public function agregarbd()
	{
		$data['nombres'] =$_POST['nombre'];
        $data['ApellidoPaterno'] =$_POST['primerApellido'];
        $data['ApellidoMaterno'] =$_POST['segundoApellido'];
        $data['Edad'] =$_POST['edad'];
        $data['nroCelular'] =$_POST['nroCelular'];
        $data['Curso'] =$_POST['Curso'];
        $data['sexo'] =$_POST['sexo'];
       
	  $lista=$this->estudiante_model->agregarestudiante($data);
     redirect('estudiante/index','refresh');
}
public function deshabilitarbd()
	{
		$IdEstudiante=$_POST['IdEstudiante'];
		$data['estado']=0;
		$this->estudiante_model->modificarestudiante($IdEstudiante,$data);
		redirect('estudiante/index');
	}
	public function habilitarbd()
	{
		$IdEstudiante=$_POST['IdEstudiante'];
		$data['estado']=1;
		$this->estudiante_model->modificarestudiante($IdEstudiante,$data);
		redirect('estudiante/index');
	}
	public function modificar()
	{
    $IdEstudiante=$_POST['IdEstudiante'];
	$data['infoestudiante']=$this->estudiante_model->recuperarestudiante($IdEstudiante);

	$this->load->view('include/header');
	$this->load->view('formularioModificar',$data);
	$this->load->view('include/fooder');
	}
	public function modificarbd()
	{
    $IdEstudiante=$_POST['IdEstudiante'];
	$data['nombres'] =$_POST['nombre'];
    $data['ApellidoPaterno'] =$_POST['primerApellido'];
    $data['ApellidoMaterno'] =$_POST['segundoApellido'];
    $data['Edad'] =$_POST['edad'];
    $data['nroCelular'] =$_POST['nroCelular'];
    $data['Curso'] =$_POST['Curso'];
    $data['sexo'] =$_POST['sexo'];
    $data['fechaInicio'] =$_POST['fechaInicio'];
    	$this->estudiante_model->modificarestudiante($IdEstudiante,$data);
    	redirect('estudiante/index');
	}
	public function buscar() {
    $this->estudiante_model->encontrarestudiante();    
	}
	public function seleccionado()
	{
    $IdEstudiante=$_POST['IdEstudiante'];
	$data['infoestudiante']=$this->estudiante_model->recuperarestudiante($IdEstudiante);
	$this->load->view('include/header');
	$this->load->view('cobrarmensualidad',$data);
	$this->load->view('include/fooder');
	}

}