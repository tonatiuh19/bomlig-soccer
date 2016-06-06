<?php

session_start();
require_once("cn2.php");
if($_SERVER['REQUEST_METHOD']=="POST"){

$jugador = $_SESSION["jugador"];
	$actual = $_SESSION["usuario"];
	$equipo = $_POST["equipo"];
	$numero = $_POST["numero"];

	$sql = "UPDATE jugadores SET id_equipo='$equipo', noti='1', numero='$numero' WHERE id_jugador='$jugador' AND id_usuario='$actual'";

	if ($conn->query($sql) === TRUE) {
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Solicitud enviada')
		    window.location.href='usuarios.php';
		    </SCRIPT>");
	} else {
	    echo "Error updating record: " . $conn->error;
	}

	$conn->close();



		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		    
		    window.location.href='usuarios.php';
		    </SCRIPT>");
}
	//enctype="multipart/form-data"	

	
	
	


?>
