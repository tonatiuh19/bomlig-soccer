<?php require_once("includes/header.php");
require_once("cn2.php");

if($_SERVER['REQUEST_METHOD']=="POST"){


		$equipo = $_POST['equipo'];
		$actual   = $_SESSION['usuario'];
		


		
		echo "<form class=\"form-horizontal\" action=\"solicitud_j.php\" method=\"post\">\n"; 
echo "<fieldset>\n"; 
echo "\n"; 
echo "<!-- Form Name -->\n"; 
echo "<legend>¿Que numero quieres portar?</legend>\n"; 
echo "\n"; 
echo "<!-- Select Basic -->\n"; 
echo "<div class=\"form-group\">\n"; 
echo "  <label class=\"col-md-4 control-label\" for=\"selectbasic\">Numeros Disponibles:</label>\n"; 
echo "<input type=\"hidden\" name=\"equipo\" value=$equipo>";
echo "  <div class=\"col-md-4\">\n"; 
echo "    <select id=\"numero\" name=\"numero\" class=\"form-control\">\n";
echo "      <option value=\"0\">DT</option>\n"; 

$sql = "SELECT numbers FROM numeros WHERE numbers NOT IN (SELECT numero FROM jugadores WHERE id_equipo='$equipo')";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	
			   
			echo "      <option value=\"".$row['numbers']."\">".$row['numbers']."</option>\n"; 
	    	

			}
			
		
	} else {
	    echo "0 results";
	} 	
echo "    </select>\n"; 
echo "  </div>\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "<!-- Button -->\n"; 
echo "<div class=\"form-group\">\n"; 
echo "  <label class=\"col-md-4 control-label\" for=\"singlebutton\"></label>\n"; 
echo "  <div class=\"col-md-4\">\n"; 
echo "    <button id=\"singlebutton\" name=\"singlebutton\" class=\"btn btn-success\">Enviar Solicitud</button>\n"; 
echo "  </div>\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "</fieldset>\n"; 
echo "</form>\n";


//$array1 = array_pad($data, 202, 0);
//$array2 = range(1,101);


$y=0;


//$resultado = array_unique($array1, SORT_LOCALE_STRING);
//print_r($array1);
echo "<br>";
echo "<br>";

//echo array_search(5,$array1,true);








$conn->close();
		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

}else{
		header("location: usuarios.php");
	}

 
	require_once("includes/footer.php");
?>


