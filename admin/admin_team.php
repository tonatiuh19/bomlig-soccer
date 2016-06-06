<?php include_once("includes/header.php");


	require_once("cn2.php");
	

	if($_SERVER['REQUEST_METHOD']=="POST"){

		$actual         = $_SESSION['usuario'];
		$equipo			= $_POST['iddeequipo'];
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
				echo "<button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#myModal1\">Cambiar Escudo</button>\n"; 
				echo "\n"; 
				echo "<!-- Modal -->\n"; 
				echo "<div id=\"myModal1\" class=\"modal fade\" role=\"dialog\">\n"; 
				echo "  <div class=\"modal-dialog\">\n"; 
				echo "\n"; 
				echo "    <!-- Modal content-->\n"; 
				echo "    <div class=\"modal-content\">\n"; 
				echo "      <div class=\"modal-header\">\n"; 
				echo "        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\n"; 
				echo "        <h4 class=\"modal-title\">Cambiar Escudo</h4>\n"; 
				echo "      </div>\n"; 
				echo "      <div class=\"modal-body\">\n"; 
				echo "<form class=\"form-horizontal\" action=\"editar_escudo.php\" method=\"post\" enctype=\"multipart/form-data\">\n"; 
				echo "<!-- Select Basic -->\n"; 
				echo "<div class=\"form-group\">\n"; 
				echo "<div class=\"form-group\">\n"; 
				 echo "<input type=\"hidden\" name=\"equipo\" value=".$equipo.">";
				echo "  <label class=\"col-md-4 control-label\" for=\"filebutton\">Elige una foto</label>\n"; 
				echo "  <div class=\"col-md-4\">\n"; 
				echo "    <input id=\"foto\" name=\"foto\" class=\"input-file\" type=\"file\">\n"; 
				echo "  </div>\n"; 
				echo "</div>\n"; 
				echo "</div>\n"; 
				
				echo "      </div>\n"; 
				echo "<!-- Button -->\n"; 
				echo "<div class=\"modal-footer\">\n"; 
				echo "  <label class=\"col-md-4 control-label\" for=\"singlebutton\"></label>\n"; 
				echo "  <div class=\"col-md-4\">\n"; 
				echo "    <button id=\"singlebutton\" name=\"singlebutton\" class=\"btn btn-success\" type=\"submit\">Guardar</button>\n"; 
				echo "  </div>\n"; 
				echo "</div>\n";
				echo "    </div>\n"; 
				
				echo "</form>\n"; 
				echo "\n"; 
				echo "  </div>\n"; 
				echo "</div>\n";
				echo "    </td>\n"; 

				echo "    <td >\n";
				echo "<button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#myModal2\">Cambiar Nombre</button>\n"; 
				echo "\n"; 
				echo "<!-- Modal -->\n"; 
				echo "<div id=\"myModal2\" class=\"modal fade\" role=\"dialog\">\n"; 
				echo "  <div class=\"modal-dialog\">\n"; 
				echo "\n"; 
				echo "    <!-- Modal content-->\n"; 
				echo "    <div class=\"modal-content\">\n"; 
				echo "      <div class=\"modal-header\">\n"; 
				echo "        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\n"; 
				echo "        <h4 class=\"modal-title\">Cambiar Nombre</h4>\n"; 
				echo "      </div>\n"; 
				echo "      <div class=\"modal-body\">\n"; 
				echo "<form class=\"form-horizontal\" action=\"editar_nombre_e.php\" method=\"post\" enctype=\"multipart/form-data\">\n"; 
				
				 echo "<input type=\"hidden\" name=\"equipo\" value=".$equipo.">";
				 echo "<div class=\"form-group\">\n"; 
				echo "  <label class=\"col-md-4 control-label\" for=\"textinput\">Nombre nuevo</label>  \n"; 
				echo "  <div class=\"col-md-4\">\n"; 
				echo "  <input id=\"nombre\" name=\"nombre\" type=\"text\" placeholder=\"Nuevo nombre\" class=\"form-control input-md\">\n"; 
			 
				echo "  </div>\n"; 
				echo "</div>\n";
				
				echo "      </div>\n"; 
				echo "<!-- Button -->\n"; 
				echo "<div class=\"modal-footer\">\n"; 
				echo "  <label class=\"col-md-4 control-label\" for=\"singlebutton\"></label>\n"; 
				echo "  <div class=\"col-md-4\">\n"; 
				echo "    <button id=\"singlebutton\" name=\"singlebutton\" class=\"btn btn-success\" type=\"submit\">Guardar</button>\n"; 
				echo "  </div>\n"; 
				echo "</div>\n";
				echo "    </div>\n"; 
				echo "</form>\n"; 
				echo "\n"; 
				echo "  </div>\n"; 
				echo "</div>\n";
				echo "    </td>\n";
				echo "    <td>\n";
					echo "<form action=\"eliminar_equipo.php\" method=\"post\" onsubmit=\"return confirm('¿Estas Seguro de eliminar este equipo?');\">";
							       
							        echo "<input type=\"hidden\" name=\"equipo\" value=".$equipo.">";
							        echo " <button class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\" title=\"Eliminar Equipo\"><span class=\"glyphicon glyphicon-trash\" ></span></button>";
							    echo "</form>";
				echo "    </td>\n";  
				echo "  </tr>\n"; 
				echo "</table>\n";

				//echo "        <div class=\"col-sm-12\">";
				echo "    </div>\n"; 
				echo "    </div>\n"; 
				echo "</div>\n"; 
				echo "<form action=\"meter_liga.php\" method=\"post\" >";
				            echo "<input type=\"hidden\" name=\"numerodeequipo\" value=".$equipo.">";
				            echo " <button class=\"btn btn-warning btn-sm pull-right\">Buscar Liga</button>";
				            echo "</form>";
				echo "<br>";
				$sql2 = "SELECT id_jugador, id_usuario, posicion, numero, situacion, score, noti FROM jugadores WHERE id_equipo='$equipo' ORDER BY numero ASC";
				$result2 = $conn->query($sql2);

				if ($result2->num_rows > 0) {
				    echo "<table class=\"table\">\n"; 
					echo "  <tr>\n"; 
					echo "    <th ></th>\n"; 
					echo "    <th >Nombre</th>\n"; 
					echo "    <th align=\"center\" class=\"hidden-sm hidden-md hidden-lg\">#</th>\n"; 
					echo "    <th align=\"center\" class=\"hidden-xs\">Numero</th>\n"; 
					echo "    <th >Pos</th>\n"; 
					echo "    <th class=\"hidden-sm hidden-md hidden-lg\">Sit</th>\n";
					echo "    <th class=\"hidden-xs\">Situacion</th>\n"; 
					echo "    <th class=\"hidden-xs\">Pais</th>\n";
					echo "    <th align=\"center\" class=\"hidden-xs\">Credencial</th>\n"; 
					
					echo "    <th align=\"center\" class=\"hidden-xs\">Eliminar</th>\n";
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
					    		 echo "    <img src=".'users/'.$row2["id_usuario"].'/'.$row3["foto"]." class=\"img-responsive\" height=\"30\" width=\"30\">\n"; 
						    	}else{
						    		 echo "    <img src=\"default_user.png\" class=\"img-responsive\" height=\"30\" width=\"30\">\n"; 
						    	}
								echo "</td>\n"; 
								echo "    <td >". $row3["nombre"]." ". $row3["apellido"]."</td>\n";
								if ($row2["numero"]=='0') {
								 	echo "    <td><span class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" title=\"Director Tecnico\">DT</span></td>\n";
								 }else{
								 	echo "    <td><span class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" title=\"Numero\">". $row2["numero"]." </span></td>\n";
								 } 
								
								echo "    <td>". $row2["posicion"]."</td>\n"; 
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
								echo "    <td class=\"hidden-xs\"><img class=\"flag flag-".strtolower($row3["pais"])."\" height=\"100\" width=\"100\" /></td>\n";
								 echo "<td >";
								echo "<form action=\"credencial.php\" method=\"post\" >";
							        echo "<input type=\"hidden\" name=\"numerodetable\" value=".$row2['id_jugador'].">";
							        echo "<input type=\"hidden\" name=\"equipo\" value=".$equipo.">";
							        echo " <button class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-qrcode\"></span></button>";
							    echo "</form>"; echo "</td>"; 
								
							
								echo "<td >";
								echo "<form action=\"eliminar_j2.php\" method=\"post\" onsubmit=\"return confirm('¿Estas Seguro?');\">";
							        echo "<input type=\"hidden\" name=\"numerodetable\" value=".$row2['id_jugador'].">";
							        echo "<input type=\"hidden\" name=\"equipo\" value=".$equipo.">";
							        echo " <button class=\"btn btn-danger btn-sm\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
							    echo "</form>"; echo "</td>";
								echo "  </tr>\n";
								 
						    }
						} else {
						    echo "0 results";
						} 
				    }
				    echo "</table>\n";
				    echo "<div class=\"pull-right\">";
				    echo "<form action=\"admin_team_pdf.php\" method=\"post\" >";
							        echo "<input type=\"hidden\" name=\"equipo\" value=".$equipo.">";
							        echo " <button class=\"btn btn-primary btn-md\" formtarget=\"_blank\">Imprimir Plantilla</button>";
							    echo "</form>";
							    echo "</div>";
				} else {
				    //echo "<div class=\"container\">\n"; 
					echo "  <div class=\"jumbotron\">\n"; 
					echo "    <h1>¡No hay jugadores!</h1> \n"; 
					echo "    <p>Comparte este link con tus amigos para que se unan</p> \n"; 
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
		    window.location.href='equipos.php';
		    </SCRIPT>");
	}

	//enctype="multipart/form-data"

	
include_once("includes/footer.php");?>