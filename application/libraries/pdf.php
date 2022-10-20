<?php if (!defined('BASEPATH')) exit('no direct script access allowed');
require_once APPPATH."/third_party/fpdf.php";

class pdf extends FPDF {

function Header()
{
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
