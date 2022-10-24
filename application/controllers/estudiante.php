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
	public function inscribir()
	{   
	$lista=$this->curso_model->listacurso();
      $data['curso']=$lista;
		$this->load->view('include/header');
		$this->load->view('inscripcion',$data);
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
        $data['sexo'] =$_POST['sexo'];
        $data['estado'] =1;
        $data['fechaInicio'] =$_POST['fechaInicio'];
        $data['idPadre'] =1;
         $data['idEquipo'] =1;
       
	  $lista=$this->estudiante_model->agregarestudiante($data);
     redirect('estudiante/indexEstudiante','refresh');
}
public function inscribirbd()
	{
		$data['nombres'] =$_POST['nombre'];
        $data['primerApellido'] =$_POST['primerApellido'];
        $data['segundoApellido'] =$_POST['segundoApellido'];
        $data['Edad'] =$_POST['edad'];
        $data['nroCelular'] =$_POST['nroCelular'];
        $data['sexo'] =$_POST['sexo'];
        $data['fechaNacimiento'] =$_POST['fechaNacimiento'];
        $data['estado'] =1;
        $data['fechaInicio'] =$_POST['fechaInicio'];
        $data['idPadre'] =1;
        $data['idEquipo'] =21;
        $idCurso=67;
       $idEntrenador=$_POST['idEntrenador'];
	  $lista=$this->estudiante_model->inscribir($data,$idCurso,$idEntrenador);
     redirect('estudiante/indexEstudiante','refresh');
}
public function mensualidadbd()
	{
	   $data['cantidad'] =$_POST['cantidad'];
	   $data['mes'] =$_POST['mes'];
	   $calculo =$_POST['cantidad'];
	   $monto=$calculo*150;
	   $data['monto'] =$monto;
	   $data['fecha']=$_POST['fecha'];
	   $data['estado'] =1;
	   $data['idInscripcion']=$_POST['idInscripcion'];
       $data['IdEstudiante']=$_POST['IdEstudiante'];
	  $lista=$this->estudiante_model->mensualidad($data);
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
		redirect('estudiante/indexEstudiante');
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
    $data['primerApellido'] =$_POST['primerApellido'];
    $data['segundoApellido'] =$_POST['segundoApellido'];
    $data['Edad'] =$_POST['edad'];
    $data['nroCelular'] =$_POST['nroCelular'];
    $data['sexo'] =$_POST['sexo'];
    $data['fechaActualizacion'] =$_POST['fechaActualizacion'];
    $this->estudiante_model->modificarestudiante($IdEstudiante,$data);
    	redirect('estudiante/indexEstudiante');
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
	public function seleccionado1()
	{
	$this->load->view('include/header');
	$this->load->view('cobrarmensualidad');
	$this->load->view('include/fooder');
	}
		public function listapdf()
	{   
	   $lista=$this->estudiante_model->listaestudiantes();
         $lista=$lista->result();
	$this->pdf=new pdf;
	$this->pdf->AddPage();
	$this->pdf->SetTitle("Lista Estudiantes");
	$this->pdf->SetLeftMargin(15);
	$this->pdf->SetRightMargin(15);
	$this->pdf->SetFillColor(210,210,210);
	$this->pdf->SetFont('Arial','B',11);
	$this->pdf->Cell(30);
	$this->pdf->Cell(120,10,'LISTA DE ESTUDIANTES','LTBR',0,'C',1);
	$this->pdf->Ln(20);

	$this->pdf->Cell(10,5,'Nro','TBLR',0,'L',0);
	$this->pdf->Cell(40,5,'NOMBRE','TBLR',0,'L',0);
	$this->pdf->Cell(70,5,'APELLIDOS','TBLR',0,'L',0);
	$this->pdf->Cell(15,5,'EDAD','TBLR',0,'L',0);
	$this->pdf->Cell(15,5,'SEXO','TBLR',0,'L',0);
	$this->pdf->Cell(28,5,'CURSO','TBLR',0,'L',0);
	$this->pdf->Ln(5);
	$this->pdf->SetFont('Arial','',9);
	$num=1;
	foreach($lista as $row)
	{
		$nombre=$row->nombres;
		$primerApellido=$row->primerApellido;
		$segundoApellido=$row->segundoApellido;
		$edad=$row->Edad;
		$sexo=$row->sexo;
		$curso=$row->curso;
		$this->pdf->Cell(10,5,$num,'TBLR',0,'L',0);
		$this->pdf->Cell(40,5,$nombre,'TBLR',0,'L',0);
		$this->pdf->Cell(35,5,$primerApellido,'TBLR',0,'L',0);
		$this->pdf->Cell(35,5,$segundoApellido,'TBLR',0,'L',0);
		$this->pdf->Cell(15,5,$edad,'TBLR',0,'L',0);
		$this->pdf->Cell(15,5,$sexo,'TBLR',0,'L',0);
		$this->pdf->Cell(28,5,utf8_decode($curso),'TBLR',0,'L',0);
		$num++;
		$this->pdf->Ln(5);
        }
	$this->pdf->Output("listaestudiantes.pdf",'I');
	}
		public function mensualidadpdf()
	{   
		 $IdEstudiante=$_POST['IdEstudiante'];
		 $lista=$this->estudiante_model->comprobante($IdEstudiante);
         $lista=$lista->result();
         $lista2=$this->curso_model->entrenador();
         $lista2=$lista2->result();
	 $num=1;
	 foreach($lista as $row)
	{
		$nombre=$row->nombres;
		$primerApellido=$row->primerApellido;
		$segundoApellido=$row->segundoApellido;
		$monto=$row->monto;
		$cantidad=$row->cantidad;
		$curso=$row->curso;
        $mes=$row->mes;
        $idPadre=$row->idPadre;
        $nombresp=$row->nombrePadre;
		$apellidos=$row->apellidos;
 
	$this->pdf=new pdf;
	$this->pdf->AddPage();
	$this->pdf->Cell(10,5,'Cochabamba 2022',10,0,'L',0);
	$this->pdf->Ln(5);
	$this->pdf->Cell(10,5,'Nro',0,0,'L',0);
	$this->pdf->Cell(130,5,$num,0,0,'L',0);
	
	$this->pdf->Ln(10);
	$this->pdf->SetTitle("Comprobante");
	$this->pdf->SetLeftMargin(15);
	$this->pdf->SetRightMargin(15);
	$this->pdf->SetFillColor(255,255,80);
	$this->pdf->SetFont('Arial','B',11);
	$this->pdf->Cell(10);
	$this->pdf->Cell(155,10,'COMPROBANTE DE PAGO',0,0,'C',1);
	$this->pdf->Ln(10);
	$this->pdf->Cell(180,5,'Mensualidad',0,0,'C',0);
	
	$this->pdf->Ln(15);
	
	$this->pdf->SetFillColor(0,205,205);
	$this->pdf->Cell(50,8,'A favor del estudiante:','LTBR',0,'L',20);
     $this->pdf->Cell(30,8,$nombre,'TB',0,'L',0);
	$this->pdf->Cell(45,8,$primerApellido,'TB',0,'L',0);
	$this->pdf->Cell(45,8,$segundoApellido,'TBR',0,'L',0);
	$this->pdf->Ln(8);
	if ($idPadre==1) {
		$this->pdf->Cell(30,8,'De:','LTBR',0,'L',20);
		$this->pdf->Cell(30,8,$nombre,'TB',0,'L',0);
		$this->pdf->Cell(45,8,$primerApellido,'TB',0,'L',0);
		$this->pdf->Cell(45,8,$segundoApellido,'TBR',0,'L',0);
		$this->pdf->Ln(8);
	}
	else{
	$this->pdf->Cell(30,8,'De:','LTBR',0,'L',20);
	$this->pdf->Cell(45,8,$nombresp,'TB',0,'L',0);
	$this->pdf->Cell(95,8,$apellidos,'TBR',0,'L',0);
	$this->pdf->Ln(8);
	}
 foreach($lista2 as $row)
	{
		$nombresE=$row->nombresE;
		$primerApellidoE=$row->primerApellidoE;
		$segundoApellidoE=$row->segundoApellidoE;
	$this->pdf->Cell(30,8,'Atendido por:','LTBR',0,'L',20);
	$this->pdf->Cell(40,8,$nombresE,'TB',0,'L',0);
	$this->pdf->Cell(50,8,$primerApellidoE,'TB',0,'L',0);
	$this->pdf->Cell(50,8,$segundoApellidoE,'TBR',0,'L',0);
	$this->pdf->Ln(10);
	}
	
	$this->pdf->Cell(20,8,'Curso:','LTBR',0,'L',20);
	$this->pdf->Cell(150,8,utf8_decode($curso),'LTBR',0,'L',0);
	$this->pdf->Ln(8);
	$this->pdf->Cell(20,8,'Mes:','LTBR',0,'L',20);
	$this->pdf->Cell(150,8,$mes,'LTBR',0,'L',0);
	$this->pdf->Ln(8);
	$this->pdf->Cell(43,8,'Monto a cancelar Bs:','LTBR',0,'L',20);
	$this->pdf->Cell(127,8,$monto,'LTBR',0,'L',0);
	$this->pdf->Ln(15);
	$this->pdf->Cell(80,5,'Monto Cancelado:',0,'C',0);
	$this->pdf->Cell(15,5,$monto,0,'L',0);
	$this->pdf->Cell(15,5,'BS.',0,0,0);
	$this->pdf->Cell(60,5,'/ciento cincuenta bolivianos',0,0,0);
	$this->pdf->SetFont('Arial','',9);
	
	 }
	$this->pdf->Output("mensualidad.pdf",'I');
	}
}