<?php include_once("includes/header.php");


	require_once("cn2.php");
	

	if($_SERVER['REQUEST_METHOD']=="POST"){

		$actual         = $_SESSION['usuario'];
		$equipo			= $_POST['equipo'];
		$liga			= $_POST['liga'];
		echo "<form action=\"admin_league.php\" method=\"post\">";
							       
							     
							         echo "<input type=\"hidden\" name=\"iddeliga\" value=".$liga.">";
							        echo " <button class=\"btn btn-success btn-sm\" data-toggle=\"tooltip\" >Regresar</button>";
							    echo "</form>";
		echo "<div class=\"container\">\n"; 
		echo "    <div class=\"row\">\n";
		$sql = "SELECT nombre, situacion, id_liga, escudo, pais FROM equipos WHERE id_equipo='$equipo'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	echo "        <div class=\"col-sm-7\">"; 
		    	if ($row['escudo']) {
					echo "<img src=".'users/'.$actual.'/'.$equipo.'/'.$row['escudo']." height=\"50\" width=\"50\"></img>";
				}else{
					echo "<img src=\"default_team.png\" height=\"50\" width=\"50\"></img>";
				}
				echo "<strong style=\"font-size:200%;\"> ".$row['nombre']."</strong>";

		    	echo "</div>\n"; 
				echo "        <div class=\"col-sm-5\">";

				echo "<table >\n"; 
				echo "  <tr>\n"; 
				echo "    <td>\n"; 
				
				echo "    </td>\n"; 

				echo "    <td >\n";
				
				echo "    </td>\n";
				echo "    <td>\n";
					
				echo "    </td>\n";  
				echo "  </tr>\n"; 
				echo "</table>\n";

				//echo "        <div class=\"col-sm-12\">";
				echo "    </div>\n"; 
				echo "    </div>\n"; 
				echo "</div>\n"; 
				echo "<form action=\"eliminar_equipodeliga.php\" method=\"post\" >";
				           echo "<input type=\"hidden\" name=\"equipo\" value=".$equipo.">";
							         echo "<input type=\"hidden\" name=\"liga\" value=".$liga.">";
				            echo " <button class=\"btn btn-danger btn-sm pull-right\"><span class=\"glyphicon glyphicon-trash\" ></span></button>";
				            echo "</form>";
				echo "<br>";
				$sql2 = "SELECT id_jugador, id_usuario, posicion, numero, situacion, score, noti FROM jugadores WHERE id_equipo='$equipo' AND noti='0' ORDER BY numero ASC";
				$result2 = $conn->query($sql2);

				if ($result2->num_rows > 0) {
				    echo "<table class=\"table\">\n"; 
					echo "  <tr>\n"; 
					echo "    <th ></th>\n"; 
					echo "    <th >Nombre</th>\n";
					echo "    <th class=\"hidden-sm hidden-md hidden-lg\">Sit</th>\n";
					echo "    <th class=\"hidden-xs\">Situacion</th>\n"; 
					echo "    <th align=\"center\" class=\"hidden-sm hidden-md hidden-lg\">#</th>\n"; 
					echo "    <th align=\"center\" class=\"hidden-xs\">Numero</th>\n"; 
					echo "    <th >Pos</th>\n"; 
					
					 
					
					echo "    <th align=\"center\" class=\"hidden-xs\">Credencial</th>\n"; 
					
					echo "    <th align=\"center\" class=\"hidden-xs\">Amonestar </th>\n";
					echo "    <th align=\"center\" class=\"hidden-xs\">Suspender </th>\n";
					echo "    <th align=\"center\" class=\"hidden-xs\">Liberar </th>\n";
					echo "    <th align=\"center\" class=\"hidden-sm hidden-md hidden-lg\"></th>\n"; 
					
					echo "    <th align=\"center\" class=\"hidden-sm hidden-md hidden-lg\"></th>\n"; 
					echo "  </tr>\n"; 
				    while($row2 = $result2->fetch_assoc()) {
				    	$sql3 = "SELECT nombre, apellido, pais, foto FROM usuarios WHERE id_usuario=". $row2["id_usuario"]."";
						$result3 = $conn->query($sql3);

						if ($result3->num_rows > 0) {
						    // output data of each row
						    while($row3 = $result3->fetch_assoc()) {
						        echo "  <tr>\n"; 
								echo "    <td >"; 
								if ($row3["foto"]) {
					    		 echo "    <img src=".'users/'.$row2["id_usuario"].'/'.$row3["foto"]." class=\"img-responsive \" height=\"30\" width=\"30\">\n"; 
						    	}else{
						    		 echo "    <img src=\"default_user.png\" class=\"img-responsive\" height=\"30\" width=\"30\">\n"; 
						    	}
								echo "</td>\n"; 
								echo "    <td ><img class=\"flag flag-".strtolower($row3["pais"])." hidden-xs\" height=\"100\" width=\"100\" /> ". $row3["nombre"]." ". $row3["apellido"]."</td>\n";
								if ($row2["situacion"]==1) {
								echo "    <td >";
								echo "<span class=\"btn btn-warning btn-xs fa fa-square\" data-toggle=\"tooltip\" title=\"Tarjeta amarilla\"> </span>";
							    		
							    		echo "</td>\n";
								}elseif($row2["situacion"]==2){
									echo "    <td >";
									echo "<span class=\"btn btn-danger btn-xs fa fa-square\" data-toggle=\"tooltip\" title=\"Tarjeta roja\"> </span>";
								    		
								    		echo "</td>\n";
								}elseif ($row2["situacion"]==3) {
									echo "    <td >";
									echo "<span class=\"btn btn-info btn-xs fa fa-plus-square\" data-toggle=\"tooltip\" title=\"Lesionado\"> </span>";
								    		
								    		echo "</td>\n";
								}elseif ($row2["situacion"]==4) {
									echo "    <td >";
									echo "<span class=\"btn btn-default btn-xs fa fa-exclamation\" data-toggle=\"tooltip\" title=\"Separado del equipo\"> </span>";
								    		
								    		echo "</td>\n";
								}else{
									echo "    <td >";
									echo "<span class=\"btn btn-success btn-xs fa fa-check-square\" data-toggle=\"tooltip\" title=\"Para Jugar\"> </span>";
								    		
								    		echo "</td>\n";
								} 
								if ($row2["numero"]=='0') {
								 	echo "    <td><span class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" title=\"Director Tecnico\">DT</span></td>\n";
								 }else{
								 	echo "    <td><span class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" title=\"Numero\">". $row2["numero"]." </span></td>\n";
								 } 
								
								echo "    <td>". $row2["posicion"]."</td>\n"; 
								
							
								 echo "<td >";
								echo "<form action=\"credencial.php\" method=\"post\" >";
							        echo "<input type=\"hidden\" name=\"numerodetable\" value=".$row2['id_jugador'].">";
							        echo "<input type=\"hidden\" name=\"equipo\" value=".$equipo.">";
							         echo "<input type=\"hidden\" name=\"liga\" value=".$liga.">";
							        echo " <button class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-qrcode\"></span></button>";
							    echo "</form>"; echo "</td>"; 
								
							
								echo "<td >";
								echo "<form action=\"amonestar.php\" method=\"post\" onsubmit=\"return confirm('¿Estas Seguro?');\">";
							        echo "<input type=\"hidden\" name=\"numerodetable\" value=".$row2['id_jugador'].">";
							        echo "<input type=\"hidden\" name=\"equipo\" value=".$equipo.">";
							        echo "<input type=\"hidden\" name=\"liga\" value=".$liga.">";
							        echo " <button class=\"btn btn-warning btn-sm\"><span class=\" fa fa-square\"></span></button>";
							    echo "</form>"; echo "</td>";
							    echo "<td>";
							    echo "<form action=\"suspender.php\" method=\"post\" onsubmit=\"return confirm('¿Estas Seguro?');\">";
							        echo "<input type=\"hidden\" name=\"numerodetable\" value=".$row2['id_jugador'].">";
							        echo "<input type=\"hidden\" name=\"equipo\" value=".$equipo.">";
							         echo "<input type=\"hidden\" name=\"liga\" value=".$liga.">";
							        echo " <button class=\"btn btn-danger btn-sm\"><span class=\" fa fa-square\"></span></button>";
							    echo "</form>"; 
							    echo "</td>";
							    echo "<td>";
							    echo "<form action=\"liberar.php\" method=\"post\" >";
							        echo "<input type=\"hidden\" name=\"numerodetable\" value=".$row2['id_jugador'].">";
							        echo "<input type=\"hidden\" name=\"equipo\" value=".$equipo.">";
							         echo "<input type=\"hidden\" name=\"liga\" value=".$liga.">";
							        echo " <button class=\"btn btn-success btn-sm\"><span class=\" fa fa-check-square\"></span></button>";
							    echo "</form>"; 
							    echo "</td>";
								echo "  </tr>\n";
								 
						    }
						} else {
						    echo "0 results";
						} 
				    }
				    echo "</table>\n";
				    echo "<div class=\"pull-right\">";
				    echo "<form action=\"imprimir_plantilla.php\" method=\"post\" >";
							        echo "<input type=\"hidden\" name=\"numerodetable\" value=".$row2['id_jugador'].">";
							        echo "<input type=\"hidden\" name=\"equipo\" value=".$equipo.">";
							        echo " <button class=\"btn btn-primary btn-md\">Imprimir Plantilla</button>";
							    echo "</form>";
							    echo "</div>";
				} else {
				    //echo "<div class=\"container\">\n"; 
					echo "  <div class=\"jumbotron\">\n"; 
					echo "    <h1>¡No hay jugadores!</h1> \n"; 
					echo "    <p></p> \n"; 
					echo "  </div>\n"; 
					echo "\n"; 
					//echo "</div>\n";
				}

				//echo "</div>\n"; 
		        
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();
		 
		
		
		
	


		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		    
		    window.location.href='ligas.php';
		    </SCRIPT>");
	}

	//enctype="multipart/form-data"

	
include_once("includes/footer.php");?>