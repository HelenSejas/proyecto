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
        $data['estado'] =1;
        $data['fechaInicio'] =$_POST['fechaInicio'];
        $data['idPadre'] =1;
         $data['idEquipo'] =21;
         $idCurso=$_POST['idCurso'];
       $idEntrenador=$_POST['idEntrenador'];
	  $lista=$this->estudiante_model->inscribir($data,$idCurso,$idEntrenador);
     redirect('estudiante/indexEstudiante','refresh');
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
	$this->pdf->Cell(2,5,'CURSO','TBLR',0,'L',0);
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
	 $num=1;
	$this->pdf=new pdf;
	$this->pdf->AddPage();
	$this->pdf->Cell(10,5,'Nro',0,0,'L',0);
	$this->pdf->Cell(130,5,$num,0,0,'L',0);
	$this->pdf->Cell(10,5,'Cochabamba 2022',10,0,'L',0);
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
	$this->pdf->Cell(120,8,'','LTBR',3,'L',0);
	$this->pdf->Ln(8);
	$this->pdf->Cell(30,8,'De:','LTBR',0,'L',20);
	$this->pdf->Cell(140,8,'','LTBR',0,0,0);
	$this->pdf->Ln(8);
	$this->pdf->Cell(30,8,'Atendido por:','LTBR',0,'L',20);
	$this->pdf->Cell(140,8,'','LTBR',0,0,0);
	$this->pdf->Ln(10);
	$this->pdf->Cell(20,8,'Curso:','LTBR',0,'L',20);
	$this->pdf->Cell(60,8,'','LTBR',0,0,0);
	$this->pdf->Cell(25,8,'equipo:','LTBR',0,'L',20);
	$this->pdf->Cell(65,8,'','LTBR',0,0,0);
	$this->pdf->Ln(8);
	$this->pdf->Cell(20,8,'Mes:','LTBR',0,'L',20);
	$this->pdf->Cell(150,8,'','LTBR',0,0,0);
	$this->pdf->Ln(8);
	$this->pdf->Cell(40,8,'Cantidad meses:','LTBR',0,'L',20);
	$this->pdf->Cell(130,8,'','LTBR',0,0,0);
	$this->pdf->Ln(8);
	$this->pdf->Cell(43,8,'Monto a cancelar Bs:','LTBR',0,'L',20);
	$this->pdf->Cell(127,8,'','LTBR',0,0,0);
	$this->pdf->Ln(15);
	$this->pdf->Cell(80,5,'Monto Cancelado:',0,'C',0);
	$this->pdf->Cell(15,5,'150 bs',0,0,0);
	$this->pdf->Cell(60,5,'/ciento cincuenta bolivianos',0,0,0);
	$this->pdf->SetFont('Arial','',9);
	
	
	$this->pdf->Output("mensualidad.pdf",'I');
	}
}