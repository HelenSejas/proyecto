<?php if (!defined('BASEPATH')) exit('no direct script access allowed');
require_once APPPATH."/third_party/fpdf.php";

class pdf extends FPDF {

function Header()
{
	  $ruta=base_url()."assets/img/fondopdf.png";
	$this->Image($ruta,3,60,210,160);
	$ruta=base_url()."assets/img/logo.png";
	$this->Image($ruta,145,10,45,35);
	$ruta=base_url()."assets/img/fondopdf.png";
	$this->Image($ruta,3,60,210,160);
	$this->SetFont('Arial','B',10);
	$this->Cell(30);
	$this->Cell(190,10,'VICTOR MURIEL',0,0,'C');
	$this->Ln('15');
}

function Footer()
{
	$this->SetY(-15);
	$this->SetFont('Arial','I',7);
	$this->Cell(0,10,'Pag. ',$this->PageNo().'/{nb}',0,0,'R');
}

}
?>
