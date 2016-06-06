<?php

session_start();
require_once("cn2.php");
if($_SERVER['REQUEST_METHOD']=="POST"){

	$equipo = $_SESSION["equipo"];
	$actual = $_SESSION["usuario"];
	$liga = $_POST["liga"];
	

	$sql = "INSERT INTO tablas (id_liga, id_equipo, confirmado) VALUES ('$liga', '$equipo', '2')";

	if ($conn->query($sql) === TRUE) {
	    echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Solicitud enviada')
		    window.location.href='ligas.php';
		    </SCRIPT>");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}



		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		    
		    window.location.href='ligas.php';
		    </SCRIPT>");
}
	//enctype="multipart/form-data"	

	
	
	


?>
