<?php include_once("includes/header.php");
require_once("../admin/cn2.php");
if($_SERVER['REQUEST_METHOD']=="POST"){

	$equipo = $_POST["equipo"];
	$liga = $_POST["liga"];
	
	echo "<form action=\"aceptar_liga.php\" method=\"post\" >";
	echo "<input type=\"hidden\" name=\"numerodeequipo\" value=".$equipo.">";
	echo "<input type=\"hidden\" name=\"numerodeliga\" value=".$liga.">";
	echo " <button class=\"btn btn-success pull-right\">Aceptar Solicitud</button>";
	echo "</form>";
	echo "&nbsp;";
	echo "<a href=\"ligas.php\" class=\"btn btn-danger btn-sm pull-right\" role=\"button\">Regresar</a>\n";

	$sql4 = "SELECT nombre, escudo, id_usuario, id_equipo FROM equipos WHERE id_equipo='$equipo'";
	$result4 = $conn->query($sql4);

	if ($result4->num_rows > 0) {
	    // output data of each row
	    while($row4 = $result4->fetch_assoc()) {
	        echo "<div class=\"header\">\n"; 
			echo "  <h1>";
			if ($row4["escudo"]) {
				echo "<img src=\"".'users/'.$row4["id_usuario"]."/".$row4["id_equipo"]."/".$row4["escudo"]."\" height=\"50\" width=\"50\"></img>";
			}else{
				echo "<img src=\"default.png\" height=\"50\" width=\"50\"></img>";
			} 
			echo " <small>".$row4["nombre"]."</small></h1>\n"; 
			echo "</div>\n";
	    }
	} else {
	    echo "0 results";
	}
	

	$sql = "SELECT id_usuario, posicion, numero FROM jugadores WHERE id_equipo='$equipo'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    echo "<table class=\"table\">\n"; 
		echo "  <tr>\n"; 
		echo "    <th></th>\n"; 
		echo "    <th>Nombre</th>\n"; 
		echo "    <th></th>\n"; 
		echo "    <th>Numero</th>\n"; 
		echo "    <th>Posicion</th>\n"; 
		echo "    <th>Pais</th>\n"; 

		echo "  </tr>\n"; 
		
	    while($row = $result->fetch_assoc()) {
	        $sqld = "SELECT foto, nombre, apellido, pais, id_usuario FROM usuarios WHERE id_usuario=".$row["id_usuario"]."";
			$resultd = $conn->query($sqld);

			if ($resultd->num_rows > 0) {
			    // output data of each row
			    while($rowd = $resultd->fetch_assoc()) {
			        echo "  <tr>\n"; 
					echo "    <td>";
					if ($rowd["foto"]) {
						echo "<img src=\"".'users/'.$rowd["id_usuario"]."/".$rowd["foto"]."\" height=\"25\" width=\"25\"></img>";
					}else{
						echo "<img src=\"default_user.png\" height=\"25\" width=\"25\"></img>";
					}
					echo "</td>\n"; 
					echo "    <td>".$rowd["nombre"]." ".$rowd["apellido"]."</td>\n"; 
					echo "    <td></td>\n";
					echo "    <td>";
					if ($row['posicion']=='DT') {
		    			echo "<span class=\"btn btn-default btn-xs \" data-toggle=\"tooltip\" title=\"Director Tecnico\">DT</span>";
		    			echo " ";
		    		}else{
		    			echo "<span class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" title=\"Numero\">".$row['numero']." </span>";
		    			echo " ";
		    		} 
					echo "</td>\n"; 
					echo "    <td>".$row["posicion"]."</td>\n"; 
					echo "    <td>"; 
					echo "<img class=\"flag flag-".strtolower($_SESSION["pais"])."\" height=\"100\" width=\"100\" />"; 
					echo "</td>\n"; 
					echo "  </tr>\n"; 
			    }
			} else {
			    echo "0 results";
			}
	    }
	    echo "</table>\n";
	} else {
	    echo "0 results";
	}	
	
	

	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					
					window.location.href='ligas.php';
					</SCRIPT>");
	}

 include_once("includes/footer.php");?>
