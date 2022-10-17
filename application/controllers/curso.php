<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class curso extends CI_Controller {

	
	public function index()
	{
      $lista=$this->curso_model->listacurso();
      $data['curso']=$lista;

		$this->load->view('include/header');
		$this->load->view('listacurso', $data);
		$this->load->view('include/fooder');
	}
	public function indexUniforme()
	{
		$this->load->view('include/header');
		$this->load->view('uniformes');
		$this->load->view('include/fooder');
	}
public function agregar()
	{
		$this->load->view('include/header');
		$this->load->view('formulariocurso');
		$this->load->view('include/fooder');
	}
	public function agregarbd()
	{
		$data['curso'] =$_POST['curso'];
        $data['cantidad'] =$_POST['cantidad'];
        $data['horario'] =$_POST['horario'];
       
	  $lista=$this->curso_model->agregarcurso($data);
     redirect('curso/index','refresh');
}
	public function modificar()
	{
    $idCurso=$_POST['idCurso'];
	$data['infocurso']=$this->curso_model->recuperarcurso($idCurso);

	$this->load->view('include/header');
	$this->load->view('formularioMC',$data);
	$this->load->view('include/fooder');
	}
	public function modificarcursobd()
	{
    $idCurso=$_POST['idCurso'];
	$data['curso'] =$_POST['curso'];
    $data['cantidad'] =$_POST['cantidad'];
    $data['horario'] =$_POST['horario'];

    $this->curso_model->modificarcurso($idCurso,$data);
    redirect('curso/index','refresh');	
	}
	public function deshabilitarbd()
	{
		$idCurso=$_POST['idCurso'];
		$data['estado']=0;
		$this->curso_model->modificarcurso($idCurso,$data);
		redirect('curso/index');
	}

		public function indexEquipo()
	{
		 $listaequipo=$this->curso_model->listaequipos();
         $data['equipo']=$listaequipo;

		$this->load->view('include/header');
		$this->load->view('equipos',$data);
		$this->load->view('include/fooder');
	}
}
