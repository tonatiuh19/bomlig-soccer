<?php

session_start();
	require_once("cn2.php");
	

	if($_SERVER['REQUEST_METHOD']=="POST"){


		$jugador			= $_POST['jugador'];
		

		
		$sql = "UPDATE jugadores SET noti='0' WHERE id_jugador='$jugador'";

		if ($conn->query($sql) === TRUE) {
		    echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.location.href='equipos.php';
		    </SCRIPT>");
		} else {
		    echo "Error updating record: " . $conn->error;
		}

		$conn->close();

	


		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		header("location: equipos.php");
	}

	//enctype="multipart/form-data"

	
?>