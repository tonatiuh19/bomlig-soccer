<?php require_once("includes/header.php");

	if($_SERVER['REQUEST_METHOD']=="POST"){


		 $jugador			= $_POST['numerodejugador'];
		
		
		 $_SESSION["jugador"] = $jugador;
		
	echo "<script type=\"text/javascript\" src=\"ajax.js\"></script>\n"; 
	echo "        <h4 >Busca tu equipo</h4>\n"; 
	echo "<form class=\"form-horizontal\">\n"; 
	echo "<!-- Text input-->\n"; 
	echo "<div class=\"form-group\">\n"; 
	echo "  <label class=\"col-md-4 control-label\" for=\"textinput\">¿Cual es el nombre?</label>  \n"; 
	echo "  <div class=\"col-md-6\">\n"; 
	echo "  <input id=\"bus\" name=\"bus\" type=\"text\" onkeyup=\"loadXMLDoc()\" placeholder=\"Ejemplo: FC Barcelona\" class=\"form-control input-md\" required>\n"; 
	echo "<div id=\"myDiv\"></div>\n";
	echo "  </div>\n"; 
	echo "</div>\n"; 
	echo "</form>\n"; 
					



		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		    
		    window.location.href='usuarios.php';
		    </SCRIPT>");
}
	//enctype="multipart/form-data"




					

	require_once("includes/footer.php");
?>