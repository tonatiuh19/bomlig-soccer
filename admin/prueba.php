<?php
session_start();
require('fpdf/fpdf.php');
require('cn2.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
//$pdf->Image('../recursos/tienda.gif' , 10 ,8, 10 , 13,'GIF');
//CONSULTA
$jugador='25';

$image1 = "../fonts/img/logo2.png";
$crede = "../admin/crede.png";
$pdf->Cell(40, 10, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 28.78), 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(110, 10, 'Credencial de jugador No '.$jugador.'', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(6);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(70, 8, 'bomlig.com', 0,'L');
$pdf->Ln(9);
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(1, 10, $pdf->Image($crede, $pdf->GetX(), $pdf->GetY(), 193), 0);
$pdf->Ln(3);



$sql = "SELECT id_jugador, id_usuario, posicion, situacion, noti, numero, id_equipo, score FROM jugadores WHERE id_jugador='$jugador'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
    while($row = $result->fetch_assoc()) {
        $pdf->Cell(79, 10, '', 0);
        $pdf->Cell(60, 10, $row["id_usuario"], 0);
        $pdf->Ln(2);
         $pdf->Cell(18, 10, '', 0);
        $pdf->Cell(70, 10, $row["id_usuario"], 0);
        $pdf->Ln(7.87);
        $pdf->SetFont('Arial', '', 8);
        $pdf->Cell(23, 10, '', 0);
        $pdf->Cell(70, 10, $row["id_usuario"], 0);
    }
    
} else {
    echo "0 results";
}



$pdf->Output();

        //move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);


?>