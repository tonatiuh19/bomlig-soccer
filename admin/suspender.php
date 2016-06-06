<?php 
require_once("cn2.php");
	if($_SERVER['REQUEST_METHOD']=="POST"){


		 $jugador			= $_POST['numerodetable'];
		 $equipo			= $_POST['equipo'];
		 $liga			= $_POST['liga'];


		$sql = "UPDATE jugadores SET situacion='2' WHERE id_jugador='$jugador' AND id_equipo='$equipo'";

		if ($conn->query($sql) === TRUE) {
		     echo "<form name=\"myform\" method=\"post\" action=\"ver_plantilla.php\">\n"; 
echo "<input type=\"hidden\" name=\"equipo\" value=\"".$equipo."\">\n";
echo "<input type=\"hidden\" name=\"liga\" value=\"".$liga."\">\n"; 
echo "<script language=\"JavaScript\">document.myform.submit();</script></form>\n";
		} else {
		    echo "Error updating record: " . $conn->error;
		}

		$conn->close();
		
		
		


		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		    
		    window.location.href='ligas.php';
		    </SCRIPT>");
}
	//enctype="multipart/form-data"




					

?>