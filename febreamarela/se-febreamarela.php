<?php
require_once("fpdf/fpdf.php");
$pdf= new FPDF("P","pt","A4");
$pdf->AddPage();
$pdf->SetFont('arial','b',20);
$pdf->Cell(0,5,utf8_decode("Estado: Sergipe"),0,1,'L');
$pdf->Image('sergipe.png',20,50,-130);
$pdf->Ln(20);
$pdf->Ln(20);
$pdf->Ln(20);
$pdf->Ln(20);
$pdf->SetFont('arial','b',14);
$pdf->Cell(0,150,utf8_decode("Situação:6 mil casos nas últimas 24h"),0,200,'L');
$pdf->Ln(10);
$pdf->Cell(0,-120,utf8_decode("Óbitos: 10 nas últimas 24h"),0,0,'L');
$pdf->Ln(20);
$pdf->Cell(0,-120,utf8_decode("Sintomas: Dores nas costas, no abdômen ou nos músculos, calafrios, fadiga, febre,"),0,1,'L');
$pdf->Ln(12);
$pdf->Cell(0,130,utf8_decode("mal-estar ou perda de apetite."),0,1,'L');
$pdf->Output("se-febreamarela.pdf","I");
?>