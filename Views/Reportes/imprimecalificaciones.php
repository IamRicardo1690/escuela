<?php 
	/*require_once("Public/fpdf/fpdf.php");
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->SetFont("Arial","B",16);
	while ($fila =mysql_fetch_assoc($datos)) {
		$pdf->Cell(40,10,$fila['nombre']." ".$fila['ap_p']." ".$fila['ap_m']);
		$pdf->Ln();

	}
	//$pdf->Cell(10,40,"HOLA MUNDO");
	$pdf->Output("F","Reporte.pdf");*/
	ob_start();
	require_once("Public/fpdf/fpdf.php");
	Class PDF extends FPDF {
		function Header(){
			$this->SetFont('Arial','',12);
			$this->Cell(80);
			$this->Cell(30,10,utf8_decode('"2018. Año del "'));
			$this->Ln(20);
		}
		function Footer(){
			$this->SetY(-15);
			$this->SetFont('Arial','I',12);
		}
	}
	$pdf=new PDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial',"B",12);
	$inicioX=40;
	$inicioY=40;
	$pdf->SetY($inicioY);
	$pdf->Cell(15,10,"Materia:");
	$pdf->SetX($pdf->GetX()+5);
	$pdf->SetFont("Arial","",12);
	$pdf->Cell(30,10,$datos[0]['desc_materia']);
	$pdf->SetY($pdf->GetY()+7);
	$pdf->SetFont("Arial","B",12);
	$pdf->Cell(15,10,"Grupo:");
	$pdf->SetX($pdf->GetX()+5);
	$pdf->SetFont("Arial","",12);
	$pdf->Cell(30,10,$datos[0]['desc_grupo']);
	$pdf->SetY($pdf->GetY()+7);
	$pdf->SetFont("Arial","B",12);
	$pdf->Cell(15,10,"Docentes:");
	$pdf->SetX($pdf->GetX()+5);
	$pdf->SetFont("Arial","",12);
	$pdf->Cell(15,10,utf8_decode($datos[0]['nombre']." ".$datos[0]['ap_p']." ".$datos[0]['ap_m']));
	$pdf->Ln();
	$pdf->Ln();
	$pdf->SetFont("Arial","",10);
	$pdf->Cell(10,7,"No.",1,0);
	$pdf->Cell(10,7,"Alumno",1,0,'C');
	$largo=110/($datos[0]['no_unidades']+1);
	for ($i=0; $i < $datos[0]['no_unidades']; $i++) {
		$pdf->Cell($largo,7,"Unidad ".($i+1),1,0,'C');
	}
	$pdf->Cell($largo,7,"Promedio",1,0,'C');



	$pdf->Output("F","Reporte.pdf");
	ob_end_flush();


 ?>