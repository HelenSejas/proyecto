<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class equipo extends CI_Controller {

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
}
