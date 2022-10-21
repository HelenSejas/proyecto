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
	public function listapdf()
	{   
	   $lista=$this->curso_model->listacurso();
        $lista=$lista->result();
	$this->pdf=new pdf;
	$this->pdf->AddPage();
	$this->pdf->SetTitle("Lista Cursos");
	$this->pdf->SetLeftMargin(15);
	$this->pdf->SetRightMargin(15);
	$this->pdf->SetFillColor(210,210,210);
	$this->pdf->SetFont('Arial','B',11);
	$this->pdf->Cell(30);
	$this->pdf->Cell(120,10,'LISTA DE CURSOS','LTBR',0,'C',1);
	$this->pdf->Ln(20);

	$this->pdf->Cell(10,5,'Nro','TBLR',0,'L',0);
	$this->pdf->Cell(40,5,'CURSO','TBLR',0,'L',0);
	$this->pdf->Cell(35,5,'CUPOS TOTALES','TBLR',0,'L',0);
	$this->pdf->Cell(35,5,'HORARIO','TBLR',0,'L',0);
	$this->pdf->Cell(40,5,'DIA','TBLR',0,'L',0);
	$this->pdf->Ln(5);
	$this->pdf->SetFont('Arial','',9);
	$num=1;
	foreach($lista as $row)
	{
		$curso=$row->curso;
		$cantidad=$row->cantidad;
		$horario=$row->horario;
		$dia=$row->dia;
		$this->pdf->Cell(10,5,$num,'TBLR',0,'L',0);
		$this->pdf->Cell(40,5,$curso,'TBLR',0,'L',0);
		$this->pdf->Cell(35,5,$cantidad,'TBLR',0,'L',0);
		$this->pdf->Cell(35,5,$horario,'TBLR',0,'L',0);
		$this->pdf->Cell(40,5,$dia,'TBLR',0,'L',0);
		$num++;
		$this->pdf->Ln(5);
        }
	$this->pdf->Output("listacurso.pdf",'I');
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
       $data['estado'] =1;
        $data['fechaCreacion'] =$_POST['fechaCreacion'];
        $data['dia'] =$_POST['dia'];
        $data['idEntrenador'] =1;
        $data['imagen'] ='';
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
		$data['estado']=1;
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
