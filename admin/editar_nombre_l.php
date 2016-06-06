<?php

session_start();
	require_once("cn2.php");
	

	if($_SERVER['REQUEST_METHOD']=="POST"){


		$nombre			= $_POST['nombre'];
		$liga			= $_POST['liga'];
		
		$sql = "SELECT * FROM ligas WHERE nombre='$nombre'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    echo "<form name=\"myform\" method=\"post\" action=\"admin_league.php\">\n"; 
			echo "<input type=\"hidden\" name=\"iddeliga\" value=\"".$liga."\">\n"; 
			echo "<script language=\"JavaScript\">
			window.alert('Este nombre ya existe')
			document.myform.submit();
			</script></form>\n";
		} else {
		    $sql2 = "UPDATE ligas SET nombre='$nombre' WHERE id_liga='$liga'";

			if ($conn->query($sql2) === TRUE) {
			    echo "<form name=\"myform\" method=\"post\" action=\"admin_league.php\">\n"; 
				echo "<input type=\"hidden\" name=\"iddeliga\" value=\"".$liga."\">\n"; 
				echo "<script language=\"JavaScript\">document.myform.submit();</script></form>\n";
			} else {
			    echo "Error updating record: " . $conn->error;
			}
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