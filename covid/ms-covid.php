<?php
require_once("fpdf/fpdf.php");
$pdf= new FPDF("P","pt","A4");
$pdf->AddPage();
$pdf->SetFont('arial','b',20);
$pdf->Cell(0,5,utf8_decode("Estado: Mato Grosso Do Sul"),0,1,'L');
$pdf->Image('mato grosso.png',20,50,-1100);
$pdf->Ln(20);
$pdf->Ln(20);
$pdf->Ln(20);
$pdf->Ln(20);
$pdf->SetFont('arial','b',14);
$pdf->Cell(0,150,utf8_decode("Situação: Total de 5.632.505 casos"),0,200,'L');
$pdf->Ln(10);
$pdf->Cell(0,-120,utf8_decode("Óbitos: 610 nas últimas 24h"),0,0,'L');
$pdf->Ln(20);
$pdf->Cell(0,-120,utf8_decode("Sintomas menos comuns: dores e desconfortos, dor de garganta, dor de cabeça"),0,1,'L');
$pdf->Ln(12);
$pdf->Cell(0,130,utf8_decode("Sintomas mais comum: febre, tosse seca cansaço"),0,1,'L');
$pdf->Output("ms-covid.pdf","I");
?>