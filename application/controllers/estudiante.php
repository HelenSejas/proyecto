<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estudiante extends CI_Controller {

	
	public function index()
	{   
	    $lista=$this->estudiante_model->listaestudiantes();
         $data['estudiante']=$lista;
		$this->load->view('include/header');
		$this->load->view('lista', $data);
		$this->load->view('include/fooder');
	}
public function agregar()
	{
		$this->load->view('include/header');
		$this->load->view('formulario');
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
	  print_r('estudiante agregado exitosamente');
     redirect('estudiante/index','refresh');
}
public function eliminarbd()
	{
		$IdEstudiante=$_POST['IdEstudiante'];
		$this->estudiante_model->eliminarestudiante($IdEstudiante);
		redirect('estudiante/index','refresh');
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
    	$this->estudiante_model->modificarestudiante($IdEstudiante,$data);
		redirect('estudiante/index','refresh');
	}
}