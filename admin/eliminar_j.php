<?php

session_start();
	require_once("cn2.php");
	

	if($_SERVER['REQUEST_METHOD']=="POST"){


		$numerodejugador			= $_POST['numerodetable'];
		

		
		$sql = "DELETE FROM jugadores WHERE id_jugador='$numerodejugador'";

		if ($conn->query($sql) === TRUE) {
		  echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.location.href='usuarios.php';
		    </SCRIPT>");
		} else {
		    echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Algo anda mal')
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