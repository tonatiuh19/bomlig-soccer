<?php

session_start();
	require_once("funciones.php");

	if($_SERVER['REQUEST_METHOD']=="POST"){


		$tipo			= $_POST['tipo'];
		$nombre			= $_POST['nombre'];
		$pais			= $_POST['pais'];
		$id_usuario		= $_SESSION['usuario'];
		


	


		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		header("location: ../productos.php");
	}

	//enctype="multipart/form-data"

	
?>