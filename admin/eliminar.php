<?php

session_start();
	require_once("includes/funciones.php");
	

	if($_SERVER['REQUEST_METHOD']=="POST"){


		$numerodeliga			= $_POST['numerodeliga'];
		

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

		$sql = "DELETE FROM ligas WHERE id_liga='$numerodeliga'";

		if ($conn->query($sql) === TRUE) {
		  echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Liga Eliminada :(')
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

	//enctype="multipart/form-data"

	
?>