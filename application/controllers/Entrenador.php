<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class entrenador extends CI_Controller {

	
	public function index()
	{   
	    $lista=$this->curso_model->listaEntrenador();
         $data['entrenador']=$lista;
		$this->load->view('include/header');
		$this->load->view('listaEntrenador', $data);
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
        $data['primerApellido'] =$_POST['primerApellido'];
        $data['segundoApellido'] =$_POST['segundoApellido'];
        $data['Edad'] =$_POST['edad'];
        $data['nroCelular'] =$_POST['nroCelular'];
        $data['Curso'] =$_POST['Curso'];
        $data['sexo'] =$_POST['sexo'];
       
	  $lista=$this->entrenador_model->agregarestudiante($data);
     redirect('entrenador/index','refresh');
}
public function deshabilitarbd()
	{
		$idEntrenador=$_POST['idEntrenador'];
		$data['estado']=0;
		$this->entrenador_model->modificarentrenador($idEntrenador,$data);
		redirect('entrenador/index','refresh');
	}
	public function modificar()
	{
    $IdEstudiante=$_POST['idEntrenador'];
	$data['infoEntrenador']=$this->entrenador_model->recuperentrenador($idEntrenador);

	$this->load->view('include/header');
	$this->load->view('formularioME',$data);
	$this->load->view('include/fooder');
	}
	public function modificarbd()
	{
    $idEntrenador=$_POST['idEntrenador'];
	$data['nombres'] =$_POST['nombres'];
    $data['primerApellido'] =$_POST['primerApellido'];
    $data['segundoApellido'] =$_POST['segundoApellido'];
    $data['sueldo'] =$_POST['sueldo'];
    $data['fechaIngreso'] =$_POST['fechaIngreso'];
    $this->entrenador_model->modificarEntrenador($idEntrenador,$data);
	redirect('entrenador/index','refresh');
	}
}