<?php 
require_once("cn2.php");

if($_SERVER['REQUEST_METHOD']=="POST"){

//

		$jj = $_POST['jj'];
		$jg = $_POST['jg'];
		$je = $_POST['je'];
		$jp = $_POST['jp'];
		$gf = $_POST['gf'];
		$gc = $_POST['gc'];
		$dif = $_POST['dif'];
		$pts = $_POST['pts'];
		$equipo = $_POST['equipo'];
		$liga = $_POST['liga'];
		$actual   = $_SESSION['usuario'];
		


		
		$sql = "UPDATE tablas SET jj='$jj', jg='$jg', je='$je', jp='$jp', gf='$gf', gc='$gc', dif='$dif', pts='$pts' WHERE id_equipo='$equipo' AND id_liga='$liga'";

		if ($conn->query($sql) === TRUE) {
		   	echo "<form name=\"myform\" method=\"post\" action=\"admin_league.php\">\n"; 
			echo "<input type=\"hidden\" name=\"iddeliga\" value=\"".$liga."\">\n"; 
			echo "<script language=\"JavaScript\">document.myform.submit();</script></form>\n";
		} else {
		    echo "Error updating record: " . $conn->error;
		}

		$conn->close();
		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

}else{
		header("location: usuarios.php");
	}

 
	
?>


