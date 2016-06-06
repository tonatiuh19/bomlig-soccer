<?php

session_start();
	require_once("includes/funciones.php");

	if($_SERVER['REQUEST_METHOD']=="POST"){


		//$tipo			= $_POST['tipo'];
		$nombre			= $_POST['nombre'];
		$pais			= $_POST['pais'];
		$id_usuario		= $_SESSION['usuario'];
		$numerodeliga			= $_POST['numdeliga'];
		

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "fut";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "UPDATE ligas SET tipo='$tipo', nombre='$nombre', pais='$pais' WHERE id_liga='$numerodeliga'";

		if ($conn->query($sql) === TRUE) {
		  echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Liga Actualizada!')
		    window.location.href='productos.php';
		    </SCRIPT>");
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();


	


		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		header("location: productos.php");
	}
?>