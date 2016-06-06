<?php
session_start();
require('fpdf/fpdf.php');
require('cn2.php');
if($_SERVER['REQUEST_METHOD']=="POST"){


         $equipo           = $_POST['equipo'];
         $actual         = $_SESSION['usuario'];;


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
//$pdf->Image('../recursos/tienda.gif' , 10 ,8, 10 , 13,'GIF');
//CONSULTA
$image1 = "../fonts/img/logo.png";
$pdf->Cell(40, 10, $pdf->Image($image1, $pdf->GetX(), $pdf->GetY(), 28.78), 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(110, 10, 'Plantilla No '.$equipo.'', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Fecha: '.date('d-m-Y').'', 0);
$pdf->Ln(6);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(70, 8, 'bomlig.com', 0,'L');
$pdf->Ln(9);
$pdf->SetFont('Arial', 'B', 13);

$sql = "SELECT id_jugador, id_usuario, posicion, situacion, noti, numero, id_equipo, score FROM jugadores WHERE id_equipo='$equipo' ORDER BY numero ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    
    $sql2 = "SELECT nombre, escudo, id_usuario, id_equipo FROM equipos WHERE id_equipo='$equipo'";
    $result2 = $conn->query($sql2);

    if ($result2->num_rows > 0) {
        // output data of each row
        while($row2 = $result2->fetch_assoc()) {
            $logo = "../admin/users/".$row2["id_usuario"]."/".$row2["id_equipo"]."/".$row2["escudo"]."";
            $pdf->Cell(90, 8, '', 0);
            $pdf->Cell(90, 10, $pdf->Image($logo, $pdf->GetX(), $pdf->GetY(), 23.58), 0);
            $pdf->Ln(23);
            $pdf->Cell(90, 8, '', 0);

            $pdf->Cell(100, 8, $row2['nombre'], 0,'C');
            $pdf->Ln(6);
            $pdf->SetFont('Arial', 'B', 9.5);
            $pdf->Cell(20, 8, 'Presidente: ', 0,'L');
            $sql3 = "SELECT nombre, apellido FROM usuarios WHERE id_usuario=".$row2['id_usuario']."";
            $result3 = $conn->query($sql3);

            if ($result3->num_rows > 0) {
                // output data of each row
                while($row3 = $result3->fetch_assoc()) {
                    $pdf->Cell(20, 8, $row3['nombre'].' '.$row3['apellido'], 0,'L');
                    $pdf->Cell(20, 8, '', 0,'L');
                }
            } else {
                echo "0 results";
            }
            
            $pdf->Ln(7);
        }
    } else {
        echo "0 results";
    }
   
    $pdf->SetFont('Arial', 'B', 8);
    $pdf->Cell(35, 8, '', 0);
    $pdf->Cell(15, 8, 'Numero', 0);
    $pdf->Cell(15, 8, '', 0);
    $pdf->Cell(60, 8, 'Nombre', 0);
    $pdf->Cell(15, 8, 'Posicion', 0);
    $pdf->Cell(15, 8, 'Situacion', 0);
    $pdf->Cell(15, 8, 'Score', 0);
   
    $pdf->Ln(8);
    $pdf->SetFont('Arial', '', 8);
    while($row = $result->fetch_assoc()) {
        $pdf->Cell(35, 8, '', 0);
        if ($row['numero']=='0') {
            $pdf->Cell(15, 8, 'DT', 0);
        }else{
            $pdf->Cell(15, 8, $row['numero'], 0);
        }
        $sql5 = "SELECT nombre, apellido, foto FROM usuarios WHERE id_usuario=".$row["id_usuario"]."";
        $result5 = $conn->query($sql5);

        if ($result5->num_rows > 0) {
            // output data of each row
            while($row5 = $result5->fetch_assoc()) {
                if ($row5["foto"]) {
                    $foto = "../admin/users/".$row['id_usuario']."/".$row5["foto"]."";
                    $pdf->Cell(15, 8, $pdf->Image($foto, $pdf->GetX(), $pdf->GetY(), 6.58), 0);
                }else{
                    $foto = "../admin/default_user.png";
                    $pdf->Cell(15, 8, $pdf->Image($foto, $pdf->GetX(), $pdf->GetY(), 6.58), 0);
                }
                //$pdf->Cell(15, 8, '', 0);
                $pdf->Cell(60, 8, $row5['nombre'].' '.$row5['apellido'], 0);
            }
        } else {
            echo "0 results";
        }
        
        $pdf->Cell(15, 8, $row['posicion'], 0);
        if ($row["situacion"]==1) {
                                $pdf->Cell(19, 8, 'Amonestacion', 0);
                            }elseif($row["situacion"]==2){
                                $pdf->Cell(15, 8, 'Suspendido', 0);
                            }elseif ($row["situacion"]==3) {
                                $pdf->Cell(15, 8, 'Lesionado', 0);
                            }elseif ($row["situacion"]==4) {
                                $pdf->Cell(15, 8, 'Separado', 0);
                            }else{
                                $pdf->Cell(18, 8, 'Para Jugar', 0);
                            }
        
        $pdf->Cell(18, 8, $row['score'], 0);
        $pdf->Ln(8);
        
    }
    $pdf->Ln(8);
    $pdf->Cell(90, 8, '', 0);
    $pdf->Cell(90, 10, $pdf->Image('http://chart.googleapis.com/chart?chs=350x350&cht=qr&chl=http://localhost/quiero_equipo.php?liga=$equipo&.png', $pdf->GetX(), $pdf->GetY(), 23.58), 0);
    $pdf->Ln(20);
    $pdf->Cell(90, 8, '', 0);
    $pdf->SetFont('Arial', 'B', 9);
     $pdf->Cell(90, 10, 'Unete a este equipo', 0);
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