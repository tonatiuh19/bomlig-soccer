<?php

session_start();
require_once("cn2.php");
	

	if($_SERVER['REQUEST_METHOD']=="POST"){


		$position = $_POST['position'];
		$actual   = $_SESSION['usuario'];

		$sql = "INSERT INTO jugadores (id_usuario, posicion, id_equipo, id_liga)
		VALUES ('$actual', '$position','5','56')";

		if ($conn->query($sql) === TRUE) {
		    /*session_unset();
			session_destroy();
			echo "<form name=\"myForm\" action=\"auto.php\" method=\"POST\">\n"; 
			echo "<input type=\"hidden\" name=\"usuario\" value=".$actual.">\n"; 
			echo "</form>\n";  document.myForm.submit();*/
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.location.href='usuarios.php';
					</SCRIPT>");
		} else {
		    echo ("<SCRIPT LANGUAGE='JavaScript'>
					
					window.alert('Algo anda mal1')
					window.location.href='usuarios.php';
					</SCRIPT>");
		}

		$conn->close();
		





		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		header("location: usuarios.php");
	}

	//enctype="multipart/form-data"


?>
