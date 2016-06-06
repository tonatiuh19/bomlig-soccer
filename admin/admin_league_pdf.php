<?php
session_start();
require('fpdf/fpdf.php');
require('cn2.php');
if($_SERVER['REQUEST_METHOD']=="POST"){


         $liga           = $_POST['liga'];
         $actual         = $_SESSION['usuario'];;


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
//$pdf->Image('../recursos/tienda.gif' , 10 ,8, 10 , 13,'GIF');
//CONSULTA

$sql = "SELECT id_liga, id_equipo, jj, jg, je, jp, gf, gc, dif, pts, confirmado FROM tablas WHERE id_liga='$liga' ORDER BY pts DESC";
$result = $conn->query($sql);
$image1 = "../fonts/img/logo.png";
if ($result->num_rows > 0) {
    $pos = 0;
    $pdf->Cell(40, 10, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 28.78), 0);
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->Cell(110, 10, 'Tabla de Posiciones', 0);
    $pdf->SetFont('Arial', '', 9);
    $pdf->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0);
    $pdf->Ln(6);
    $pdf->SetFont('Arial', '', 9);
    $pdf->Cell(70, 8, 'bomlig.com', 0,'L');
    $pdf->Ln(9);
    $pdf->SetFont('Arial', 'B', 13);
    
    $sql2 = "SELECT nombre, logo, pais, id_usuario, id_liga FROM ligas WHERE id_liga='$liga'";
    $result2 = $conn->query($sql2);

    if ($result2->num_rows > 0) {
        // output data of each row
        while($row2 = $result2->fetch_assoc()) {
            $logo = "../admin/users/".$row2["id_usuario"]."/".$row2["id_liga"]."/".$row2["logo"]."";
            $pdf->Cell(90, 8, '', 0);
            $pdf->Cell(90, 10, $pdf->Image($logo, $pdf->GetX(), $pdf->GetY(), 23.58), 0);
            $pdf->Ln(23);
            $pdf->Cell(90, 8, '', 0);

            $pdf->Cell(100, 8, $row2['nombre'], 0,'C');
            $pdf->Ln(13);
        }
    } else {
        echo "0 results";
    }
    
    
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->Cell(15, 8, 'Posicion', 0);
    $pdf->Cell(15, 8, '', 0);
    $pdf->Cell(44, 8, 'Equipo', 0);
    $pdf->Cell(15, 8, 'JJ', 0);
    $pdf->Cell(15, 8, 'JG', 0);
    $pdf->Cell(15, 8, 'JE', 0);
    $pdf->Cell(15, 8, 'JP', 0);
    $pdf->Cell(15, 8, 'GF', 0);
    $pdf->Cell(15, 8, 'GC', 0);
    $pdf->Cell(15, 8, 'DIF', 0);
    $pdf->Cell(15, 8, 'Puntos', 0);
    $pdf->Ln(8);
    $pdf->SetFont('Arial', '', 8);
    while($row = $result->fetch_assoc()) {
        if ($row['confirmado']=='1') {
            $pos=$pos+1;
            $pdf->Cell(15, 8, $pos, 0);
            $sql3 = "SELECT nombre, escudo, id_usuario, id_equipo FROM equipos WHERE id_equipo=".$row["id_equipo"]."";
            $result3 = $conn->query($sql3);

            if ($result3->num_rows > 0) {
                // output data of each row
                while($row3 = $result3->fetch_assoc()) {
                    $escudo = "../admin/users/".$row3["id_usuario"]."/".$row3["id_equipo"]."/".$row3["escudo"]."";
                    $pdf->Cell(15, 10, $pdf->Image($escudo, $pdf->GetX(), $pdf->GetY(), 10), 0);
                    $pdf->Cell(44, 8, $row3['nombre'], 0);
                }
            } else {
                echo "0 results";
            }
            
            $pdf->Cell(15, 8, $row['jj'], 0);
            $pdf->Cell(15, 8, $row['jg'], 0);
            $pdf->Cell(15, 8, $row['je'], 0);
            $pdf->Cell(15, 8, $row['jp'], 0);
            $pdf->Cell(15, 8, $row['gf'], 0);
            $pdf->Cell(15, 8, $row['gc'], 0);
            $pdf->Cell(15, 8, $row['dif'], 0);
            $pdf->Cell(15, 8, $row['pts'], 0);
            $pdf->Ln(8);
        }
        
    }
    $pdf->Ln(8);
    $pdf->Cell(90, 8, '', 0);
    $pdf->Cell(90, 10, $pdf->Image('http://chart.googleapis.com/chart?chs=350x350&cht=qr&chl=http://localhost/quiero_liga.php?liga=$liga&.png', $pdf->GetX(), $pdf->GetY(), 23.58), 0);
    $pdf->Ln(20);
    $pdf->Cell(90, 8, '', 0);
    $pdf->SetFont('Arial', 'B', 9);
     $pdf->Cell(90, 10, 'Unete a la Liga', 0);
     $pdf->Ln(3);
     $pdf->Cell(90, 8, '', 0);
     $pdf->Cell(90, 10, 'escanenando este QR', 0);
} else {
    echo "0 results";
}



$pdf->Output();

        //move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

    }else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
            
            window.location.href='ligas.php';
            </SCRIPT>");
}


?>