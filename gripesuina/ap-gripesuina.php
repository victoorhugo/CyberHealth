<?php
require_once("fpdf/fpdf.php");
$pdf= new FPDF("P","pt","A4");
$pdf->AddPage();
$pdf->SetFont('arial','b',20);
$pdf->Cell(0,5,utf8_decode("Estado: Amapá"),0,1,'L');
$pdf->Image('amapa.png',20,50,-100);
$pdf->Ln(20);
$pdf->Ln(20);
$pdf->Ln(20);
$pdf->Ln(20);
$pdf->SetFont('arial','b',14);
$pdf->Cell(0,225,utf8_decode("Situação:24.979 mil casos nas últimas 24h"),0,1,'L');
$pdf->Ln(-15);
$pdf->Cell(0,-140,utf8_decode("Óbitos: 432 nas últimas 24h"),0,0,'L');
$pdf->Ln(14);
$pdf->Cell(0,-130,utf8_decode("Sintomas:febre, tosse, dor de garganta, dores musculares, dor de cabeça, calafrios,"),0,1,'L');
$pdf->Ln(15);
$pdf->Cell(0,130,utf8_decode("corrimento nasal e cansaço. Também são comuns enjoos, vômitos e diarreia."),0,1,'L');
$pdf->Output("ap-gripesuina.pdf","I");
?>