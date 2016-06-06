<?php include_once("includes/header.php");
echo "<button type=\"button\" class=\"btn btn-success btn-lg pull-right\" data-toggle=\"modal\" data-target=\"#myModal1\">Crear Liga</button>\n"; 


require_once("cn2.php");
$actual = $_SESSION['usuario'];

$sql = "SELECT id_equipo, posicion FROM jugadores WHERE id_usuario='$actual'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$sql2 = "SELECT id_liga, confirmado FROM tablas WHERE id_equipo=".$row["id_equipo"]."";
		$result2 = $conn->query($sql2);

		if ($result2->num_rows > 0) {
		    // output data of each row
		    while($row2 = $result2->fetch_assoc()) {
		        $sql3 = "SELECT nombre, logo, id_liga, id_usuario FROM ligas WHERE id_liga=".$row2["id_liga"]."";
				$result3 = $conn->query($sql3);

				if ($result3->num_rows > 0) {
				    // output data of each row
				    while($row3 = $result3->fetch_assoc()) {

				    	if ($row2["confirmado"]=='2') {
				    		echo "<div class=\"btn btn-warning active error3 \" style=\"height:260px;\">\n";
				    		
				    	}else if ($row2["confirmado"]=='1') {
				    		echo "<div class=\"btn btn-success active error3\" style=\"height:260px;\">\n";
				    	}else{
				        echo "<div class=\"btn btn-default active error3\" style=\"height:260px;\">\n";
				    	}

				        if ($row3["logo"]) {
				        	echo "<img src=\"".'users/'.$row3["id_usuario"]."/".$row3["id_liga"]."/".$row3["logo"]."\" height=\"120\" width=\"120\"></img>";
				        }else{
				        	echo "<img src=\"default.png\" height=\"120\" width=\"120\"></img>";
				        }

						 
						
						echo "  <h4>".$row3["nombre"]."</h4>\n";
						echo "  <h5>";
						$sqlv = "SELECT nombre FROM equipos WHERE id_equipo=".$row["id_equipo"]. "";
						$resultv = $conn->query($sqlv);

						if ($resultv->num_rows > 0) {
						    // output data of each row
						    while($rowv = $resultv->fetch_assoc()) {
						        echo $rowv["nombre"];
						    }
						} else {
						    echo "0 results";
						}

						
						echo "</h5>\n"; 
						echo "<button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal".$row3["id_liga"]."\">Ver Tabla</button>\n"; 
						echo "</div>";
						echo "&nbsp;";
				    }
				} else {
				    echo "hola";

				}
		    }
		} else {
			
		    $sql4 = "SELECT nombre, escudo, id_equipo, id_usuario FROM equipos WHERE id_equipo=".$row["id_equipo"]."";
			$result4 = $conn->query($sql4);

			if ($result4->num_rows > 0) {
			    // output data of each row
			    while($row4 = $result4->fetch_assoc()) {
			    	if ($row["id_equipo"]=='5') {
			    		# code...
			    	}else{
			        echo "<div class=\"btn btn-default active error3\" style=\"\">\n";
				        if ($row4["escudo"]) {
				        	echo "<img src=\"".'users/'.$row4["id_usuario"]."/".$row4["id_equipo"]."/".$row4["escudo"]."\" height=\"120\" width=\"120\"></img>";
				        }else{
				        	echo "<img src=\"default.png\" height=\"120\" width=\"120\"></img>";
				        }

						 
						echo "  <h2></h2>\n"; 
						echo "  <h4>".$row4["nombre"]."</h4>\n";
						echo "  <h5>No pertenece a ninguna liga</h5>\n";
						echo "  <small>Presidente: ";
						$sqlt = "SELECT nombre, apellido FROM usuarios WHERE id_usuario=".$row4["id_usuario"]."";
						$resultt = $conn->query($sqlt);

						if ($resultt->num_rows > 0) {
						    // output data of each row
						    while($rowt = $resultt->fetch_assoc()) {
						        echo $rowt["nombre"]. " " . $rowt["apellido"]."";
						    }
						} else {
						    echo "0 results";
						}
						echo"</small>\n";
						if ($row["posicion"]=='DT') {
							echo "<form action=\"meter_liga.php\" method=\"post\" >";
				            echo "<input type=\"hidden\" name=\"numerodeequipo\" value=".$row['id_equipo'].">";
				            echo " <button class=\"btn btn-primary \">Buscar Liga</button>";
				            echo "</form>"; 



						}
						
						echo "</div>";

					}
					echo "&nbsp;";
			    }
			} else {
			    echo "0 results";
			}
		}
        

		
    }
} else {
    echo "<div class=\"jumbotron\">\n"; 
	echo "  <h1>No perteneces a ninguna Liga.</h1>\n"; 

	
	echo "<a href=\"usuarios.php\" class=\"btn btn-primary btn-lg\" role=\"button\">Crea tu perfil de jugador</a>\n";
	echo "</div>\n";
}


/*
$sql2 = "SELECT id, firstname, lastname FROM MyGuests";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}*/

$sql2 = "SELECT id_liga, nombre, logo, pais FROM ligas WHERE id_usuario='$actual'";
	$result2 = $conn->query($sql2);

	if ($result2->num_rows > 0) {
	    echo "<p ><h2 ><mark class=\"error4\">&nbsp;&nbsp;&nbsp;Administra tus Ligas&nbsp;&nbsp;&nbsp;</mark></h2> </p>\n";
	    while($row2 = $result2->fetch_assoc()) {

	        echo "<div class=\"btn btn-primary active error3\">\n";
    		if ($row2['logo']) {
				echo "<img src=".'users/'.$actual.'/'.$row2['id_liga'].'/'.$row2['logo']." height=\"120\" width=\"120\"></img>";
			}else{
				echo "<img src=\"default.png\" height=\"120\" width=\"120\"></img>";
			}
			echo "<br>";
			if ($row2["pais"]) {
						echo "<img class=\"flag flag-".strtolower($row2["pais"])."\" height=\"100\" width=\"100\" />";
					}
			echo "  <h2>". $row2["nombre"]."</h2>\n"; 

			echo "  <p>";
			echo "<form action=\"admin_league.php\" method=\"post\" >";
            echo "<input type=\"hidden\" name=\"iddeliga\" value=".$row2['id_liga'].">"; 
			echo " <button class=\"btn btn-default btn-lg\">Administrar</button>"; 
			echo "</form>";  
			echo "\n"; 
			echo "<!-- Modal -->\n"; 
			
			echo "</p>\n"; 
			echo "</div>\n";
	    }
	} else {
	    echo "";
	}







$conn->close();












echo "<br>";

 include_once("includes/footer.php");?>
