<?php

session_start();
	require_once("cn2.php");
	

	if($_SERVER['REQUEST_METHOD']=="POST"){


		$numerodejugador			= $_POST['numerodetable'];
		$equipo			= $_POST['equipo'];
		

		
		$sql = "DELETE FROM jugadores WHERE id_jugador='$numerodejugador'";

		if ($conn->query($sql) === TRUE) {
		  echo "<form name=\"myform\" method=\"post\" action=\"admin_team.php\">\n"; 
			echo "<input type=\"hidden\" name=\"iddeequipo\" value=\"".$equipo."\">\n"; 
			echo "<script language=\"JavaScript\">document.myform.submit();</script></form>\n";


		} else {
		    echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.alert('Algo anda mal')
		    window.location.href='equipos.php';
		    </SCRIPT>");
		}

		$conn->close();


	


		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		header("location: usuarios.php");
	}

	//enctype="multipart/form-data"

	
?>