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
	public function listapdf()
	{   
	   $lista=$this->curso_model->listaequipos();
       $lista=$lista->result();

	$this->pdf=new pdf;
	$this->pdf->AddPage();
	$this->pdf->SetTitle("Lista Equipos");
	$this->pdf->SetLeftMargin(15);
	$this->pdf->SetRightMargin(15);
	$this->pdf->SetFillColor(210,210,210);
	$this->pdf->SetFont('Arial','B',11);
	$this->pdf->Cell(30);
	$this->pdf->Cell(120,10,'LISTA DE EQUIPOS','LTBR',0,'C',1);
	$this->pdf->Ln(20);

	$this->pdf->Cell(10,5,'Nro','TBLR',0,'L',0);
	$this->pdf->Cell(45,5,'EQUIPO','TBLR',0,'L',0);
	$this->pdf->Cell(45,5,'CUPOS TOTALES','TBLR',0,'L',0);
	$this->pdf->Cell(40,5,'CATEGORIA','TBLR',0,'L',0);
	$this->pdf->Ln(5);
	$this->pdf->SetFont('Arial','',9);
	$num=1;
	foreach($lista as $row)
	{
		$nombre=$row->nombre;
		$cantidad=$row->cantidad;
		$nombreC=$row->nombreC;
		$this->pdf->Cell(10,5,$num,'TBLR',0,'L',0);
		$this->pdf->Cell(45,5,$nombre,'TBLR',0,'L',0);
		$this->pdf->Cell(45,5,$cantidad,'TBLR',0,'L',0);
		$this->pdf->Cell(40,5,$nombreC,'TBLR',0,'L',0);
		$num++;
		$this->pdf->Ln(5);
        }
	$this->pdf->Output("listaequipo.pdf",'I');
	}
}
