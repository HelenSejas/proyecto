<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class entrenador extends CI_Controller {

	
	public function index()
	{   
	    $lista=$this->curso_model->listaentrenador();
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
		$data['nombres'] =$_POST['nombres'];
        $data['primerApellido'] =$_POST['primerApellido'];
        $data['segundoApellido'] =$_POST['segundoApellido'];
        $data['sueldo'] =$_POST['sueldo'];
        $data['fechaIngreso'] =$_POST['fechaIngreso'];
       
	  $lista=$this->curso_model->agregarentrenador($data);
     redirect('entrenador/index','refresh');
}
public function deshabilitarbd()
	{
		$idEntrenador=$_POST['idEntrenador'];
		$data['estado']=0;
		$this->curso_model->modificarentrenador($idEntrenador,$data);
		redirect('entrenador/index','refresh');
	}
	public function modificar()
	{
    $IdEstudiante=$_POST['idEntrenador'];
	$data['infoEntrenador']=$this->curso_model->recuperentrenador($idEntrenador);

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