<?php 
require_once("cn2.php");
	if($_SERVER['REQUEST_METHOD']=="POST"){


		 $liga			= $_POST['liga'];


		$sql = "DELETE FROM ligas WHERE id_liga='$liga'";

		if ($conn->query($sql) === TRUE) {
		    echo ("<SCRIPT LANGUAGE='JavaScript'>
		    
		    window.location.href='ligas.php';
		    </SCRIPT>");
		} else {
		    echo "Error deleting record: " . $conn->error;
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