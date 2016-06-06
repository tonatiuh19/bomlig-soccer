<?php 
require_once("cn2.php");
	if($_SERVER['REQUEST_METHOD']=="POST"){


		 $equipo			= $_POST['equipo'];


		$sql = "DELETE FROM equipos WHERE id_equipo='$equipo'";

		if ($conn->query($sql) === TRUE) {
		    echo ("<SCRIPT LANGUAGE='JavaScript'>
		    
		    window.location.href='equipos.php';
		    </SCRIPT>");
		} else {
		    echo "Error deleting record: " . $conn->error;
		}

		$conn->close();
		
		
		


		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		    
		    window.location.href='equipos.php';
		    </SCRIPT>");
}
	//enctype="multipart/form-data"




					

?>