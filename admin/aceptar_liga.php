<?php

session_start();
	require_once("cn2.php");
	

	if($_SERVER['REQUEST_METHOD']=="POST"){


		$equipo			= $_POST['numerodeequipo'];
		$liga			= $_POST['numerodeliga'];
		

		
		$sql = "UPDATE tablas SET confirmado='1' WHERE id_equipo='$equipo' AND id_liga='$liga'";

		if ($conn->query($sql) === TRUE) {
		    echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.location.href='ligas.php';
		    </SCRIPT>");
		} else {
		    echo "Error updating record: " . $conn->error;
		}

		$conn->close();

	


		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		header("location: ligas.php");
	}

	//enctype="multipart/form-data"

	
?>