<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class curso extends CI_Controller {

	
	public function index()
	{ 
		if ($this->session->userdata('usuario')) {
			if ($this->session->userdata('tipo')==1){
				$lista=$this->curso_model->listacurso();
      $data['curso']=$lista;

		$this->load->view('include/header');
		$this->load->view('listacurso', $data);
		$this->load->view('include/fooder');
			}
			else{
		$lista=$this->curso_model->listacurso();
      $data['curso']=$lista;

		$this->load->view('include/header');
		$this->load->view('vistacurso', $data);
		$this->load->view('include/fooder');	
			}
		}
      
	}
	public function inactivos()
	{ 
	$lista=$this->curso_model->listacursoinactivos();
      $data['curso']=$lista;
		$this->load->view('include/header');
		$this->load->view('listacursodeshabilitados', $data);
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
	public function habilitarcursobd()
	{
		$idCurso=$_POST['idCurso'];
		$data['estado']=0;
		$this->curso_model->modificarcurso($idCurso,$data);
		redirect('curso/index');
	}
//controlador equipo
		public function indexEquipo()
	{
			if ($this->session->userdata('usuario')) {
			if ($this->session->userdata('tipo')==1){
		 $listaequipo=$this->curso_model->listaequipos();
         $data['equipo']=$listaequipo;

		$this->load->view('include/header');
		$this->load->view('equipos',$data);
		$this->load->view('include/fooder');
	}else{
		$listaequipo=$this->curso_model->listaequipos();
         $data['equipo']=$listaequipo;

		$this->load->view('include/header');
		$this->load->view('vistaequipo',$data);
		$this->load->view('include/fooder');
	}
}
	}
	public function agregarequipo()
	{
		$data['nombre'] =$_POST['nombre'];
        $data['cantidad'] =$_POST['cantidad'];
        $data['fechaRegistro'] =$_POST['fechaRegistro'];
       
	  $lista=$this->curso_model->agregarequipo($data);
     redirect('curso/indexEquipo','refresh');
}
public function modificarequipobd()
	{
    $idEquipo=$_POST['idEquipo'];
	$data['nombre'] =$_POST['nombre'];
    $data['cantidad'] =$_POST['cantidad'];
    $data['fechaRegistro'] =$_POST['fechaRegistro'];

    $this->curso_model->modificarequipo($idEquipo,$data);
    redirect('curso/indexEquipo','refresh');	
	}
public function deshabilitarequipo()
	{
		$idEquipo=$_POST['idEquipo'];
		$data['estado']=0;
		$this->curso_model->modificarequipo($idEquipo,$data);
		redirect('curso/indexEquipo');
	}
	public function habilitarequipo()
	{
		$idEquipo=$_POST['idEquipo'];
		$data['estado']=0;
		$this->curso_model->modificarequipo($idEquipo,$data);
		redirect('curso/indexEquipo');
	}
	//controlador uniforme
	public function indexUniforme()
	{
		$this->load->view('include/header');
		$this->load->view('uniformes');
		$this->load->view('include/fooder');
	}
}
