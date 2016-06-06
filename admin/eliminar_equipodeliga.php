<?php 
require_once("cn2.php");
	if($_SERVER['REQUEST_METHOD']=="POST"){


		 $equipo			= $_POST['equipo'];
		 $liga			= $_POST['liga'];


		$sql = "DELETE FROM tablas WHERE id_equipo='$equipo' AND id_liga='$liga'";

		if ($conn->query($sql) === TRUE) {
			
		   echo "<form name=\"myform\" method=\"post\" action=\"admin_league.php\">\n"; 
echo "<input type=\"hidden\" name=\"iddeliga\" value=\"".$liga."\">\n"; 
echo "<script language=\"JavaScript\">document.myform.submit();</script></form>\n";
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