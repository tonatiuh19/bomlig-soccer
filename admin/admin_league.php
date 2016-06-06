<?php include_once("includes/header.php");


	require_once("cn2.php");
	echo "<style>\n"; 

echo ".error5 {\n"; 
echo "    background-color: #fbf682;\n";
echo "}\n"; 
echo "</style>\n";
	

	if($_SERVER['REQUEST_METHOD']=="POST"){

		$actual         = $_SESSION['usuario'];
		$liga			= $_POST['iddeliga'];
		echo "<div class=\"container\">\n"; 
		echo "    <div class=\"row\">\n";
		$sql = "SELECT nombre, id_liga, logo, pais FROM ligas WHERE id_liga='$liga'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	echo "        <div class=\"col-sm-7\">"; 
		    	if ($row['logo']) {
					echo "<img src=".'users/'.$actual.'/'.$liga.'/'.$row['logo']." height=\"50\" width=\"50\"></img>";
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
				echo "<form class=\"form-horizontal\" action=\"editar_escudo_liga.php\" method=\"post\" enctype=\"multipart/form-data\">\n"; 
				echo "<!-- Select Basic -->\n"; 
				echo "<div class=\"form-group\">\n"; 
				echo "<div class=\"form-group\">\n"; 
				 echo "<input type=\"hidden\" name=\"equipo\" value=".$liga.">";
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
				echo "<form class=\"form-horizontal\" action=\"editar_nombre_l.php\" method=\"post\" enctype=\"multipart/form-data\">\n"; 
				
				 echo "<input type=\"hidden\" name=\"liga\" value=".$liga.">";
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
					echo "<form action=\"eliminar_equipo.php\" method=\"post\" onsubmit=\"return confirm('¿Estas Seguro de eliminar esta liga?');\">";
							       
							        echo "<input type=\"hidden\" name=\"liga\" value=".$liga.">";
							        echo " <button class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\" title=\"Eliminar Liga\"><span class=\"glyphicon glyphicon-trash\" ></span></button>";
							    echo "</form>";
				echo "    </td>\n";  
				echo "  </tr>\n";

				echo "</table>\n";


				//echo "        <div class=\"col-sm-12\">";
				echo "    </div>\n"; 
				echo "    </div>\n"; 
				echo "</div>\n"; 
				echo "<button type=\"button\" class=\"btn btn-success btn-md pull-right\" data-toggle=\"modal\" data-target=\"#myModal1\">+ Añadir Jornada</button>\n";
				echo "<br>";
				

				//echo "</div>\n"; 
		        
		    }
		} else {
		    echo "0 results";
		}
		
		 
		
		echo "<table class=\"table\">\n"; 
		echo "  <tr>\n";
		echo "    <th></th>\n"; 
		echo "    <th></th>\n"; 
		echo "    <th>Equipo</th>\n"; 
		echo "    <th>JJ</th>\n"; 
		echo "    <th>JG</th>\n"; 
		echo "    <th>JE</th>\n"; 
		echo "    <th>JP</th>\n"; 
		echo "    <th>GF</th>\n"; 
		echo "    <th>GC</th>\n"; 
		echo "    <th>DIF</th>\n"; 
		echo "    <th>Puntos</th>\n"; 
		echo "    <th>Editar</th>\n"; 
		echo "    <th>Eliminar</th>\n";
		echo "    <th>Plantilla</th>\n"; 
		echo "  </tr>\n";
		$sql4 = "SELECT id_equipo, jj, jg, je, jp, gf, gc, dif, pts, confirmado FROM tablas WHERE id_liga='$liga' ORDER BY pts DESC";
		$result4 = $conn->query($sql4);

		if ($result4->num_rows > 0) {
		    // output data of each row
		    while($row4 = $result4->fetch_assoc()) {
		        echo "  <tr";
				if ($row4["confirmado"]=='2') {
					echo " class=\"error5\">\n";
				}else{
					echo " class=\"\">\n";
				}
		        $sql5 = "SELECT nombre, escudo, id_usuario FROM equipos WHERE id_equipo=".$row4["id_equipo"]."";
				$result5 = $conn->query($sql5);

				if ($result5->num_rows > 0) {
				    $numero = 0;
				    while($row5 = $result5->fetch_assoc()) {
				    	$numero = $numero +1;
				    	echo "    <td><b>".$numero."<b></td>\n"; 
				        echo "    <td>";
				        if ($row4["confirmado"]=='2') {
				        	echo "<span class=\"btn btn-warning btn-xs fa fa-warning fa-xs\" data-toggle=\"tooltip\" title=\"Solicitud Pendiente\"> </span>";
				        }else{
				        if ($row5['escudo']) {
							echo "<img src=".'users/'.$row5['id_usuario'].'/'.$row4['id_equipo'].'/'.$row5['escudo']." height=\"20\" width=\"20\" class=\"img-responsive\"></img>";
						}else{
							echo "<img src=\"default_team.png\" height=\"20\" width=\"20\" class=\"img-responsive\" ></img>";
						} }
				        echo "</td>\n"; 
						echo "    <td>".$row5["nombre"]."</td>\n";
						echo "    <td>".$row4["jj"]."</td>\n"; 
						echo "    <td>".$row4["jg"]."</td>\n"; 
						echo "    <td>".$row4["je"]."</td>\n"; 
						echo "    <td>".$row4["jp"]."</td>\n"; 
						echo "    <td>".$row4["gf"]."</td>\n"; 
						echo "    <td>".$row4["gc"]."</td>\n"; 
						echo "    <td>".$row4["dif"]."</td>\n"; 
						echo "    <td>".$row4["pts"]."</td>\n"; 
						echo "    <td>";
						
						echo "<button type=\"button\" class=\"btn btn-info btn-sm\" data-toggle=\"modal\" data-target=\"#myModalp".$row4["id_equipo"]."\"><span class=\"glyphicon glyphicon-pencil\"></span></button>\n"; 
						echo "\n"; 
						echo "<!-- Modal -->\n"; 
						echo "<div id=\"myModalp".$row4["id_equipo"]."\" class=\"modal fade\" role=\"dialog\">\n"; 
						echo "  <div class=\"modal-dialog\">\n"; 
						echo "\n"; 
						echo "    <!-- Modal content-->\n"; 
						echo "    <div class=\"modal-content\">\n"; 
						echo "      <div class=\"modal-header\">\n"; 
						echo "        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\n"; 
						echo "        <h4 class=\"modal-title\" align=\"center\">".$row5["nombre"]."</h4>\n"; 
						echo "      </div>\n"; 
						echo "      <div class=\"modal-body\">\n"; 
						echo "<form class=\"form-horizontal\" action=\"cambiar_puntos.php\" method=\"post\">\n"; 
						echo "\n"; 
						echo "<div class=\"form-group\">\n"; 
						echo "  <label class=\"col-md-4 control-label\" for=\"textinput\">JJ</label>  \n"; 
						echo "  <div class=\"col-md-4\">\n";
						echo "<input type=\"hidden\" name=\"equipo\" value=".$row4["id_equipo"].">"; 
						echo "<input type=\"hidden\" name=\"liga\" value=".$liga.">"; 
						echo "  <input id=\"textinput\" name=\"jj\" type=\"text\" value=\"".$row4["jj"]."\" class=\"form-control input-sm\">\n"; 
						echo "  </div>\n"; 
						echo "</div>\n"; 
						echo "\n"; 
						echo "<div class=\"form-group\">\n"; 
						echo "  <label class=\"col-md-4 control-label\" for=\"textinput\">JG</label>  \n"; 
						echo "  <div class=\"col-md-4\">\n"; 
						echo "  <input id=\"textinput\" name=\"jg\" type=\"text\" value=\"".$row4["jg"]."\" class=\"form-control input-sm\">\n"; 
						echo "  </div>\n"; 
						echo "</div>\n"; 
						echo "\n"; 
						echo "<div class=\"form-group\">\n"; 
						echo "  <label class=\"col-md-4 control-label\" for=\"textinput\">JE</label>  \n"; 
						echo "  <div class=\"col-md-4\">\n"; 
						echo "  <input id=\"textinput\" name=\"je\" type=\"text\" value=\"".$row4["je"]."\" class=\"form-control input-sm\">\n"; 
						echo "  </div>\n"; 
						echo "</div>\n"; 
						echo "\n"; 
						echo "<div class=\"form-group\">\n"; 
						echo "  <label class=\"col-md-4 control-label\" for=\"textinput\">JP</label>  \n"; 
						echo "  <div class=\"col-md-4\">\n"; 
						echo "  <input id=\"textinput\" name=\"jp\" type=\"text\" value=\"".$row4["jp"]."\" class=\"form-control input-sm\">\n"; 
						echo "  </div>\n"; 
						echo "</div>\n"; 
						echo "\n"; 
						echo "<div class=\"form-group\">\n"; 
						echo "  <label class=\"col-md-4 control-label\" for=\"textinput\">GF</label>  \n"; 
						echo "  <div class=\"col-md-4\">\n"; 
						echo "  <input id=\"textinput\" name=\"gf\" type=\"text\" value=\"".$row4["gf"]."\" class=\"form-control input-sm\">\n"; 
						echo "  </div>\n"; 
						echo "</div>\n"; 
						echo "\n"; 
						echo "<div class=\"form-group\">\n"; 
						echo "  <label class=\"col-md-4 control-label\" for=\"textinput\">GC</label>  \n"; 
						echo "  <div class=\"col-md-4\">\n"; 
						echo "  <input id=\"textinput\" name=\"gc\" type=\"text\" value=\"".$row4["gc"]."\" class=\"form-control input-sm\">\n"; 
						echo "  </div>\n"; 
						echo "</div>\n"; 
						echo "\n"; 
						echo "<div class=\"form-group\">\n"; 
						echo "  <label class=\"col-md-4 control-label\" for=\"textinput\">DIF</label>  \n"; 
						echo "  <div class=\"col-md-4\">\n"; 
						echo "  <input id=\"textinput\" name=\"dif\" type=\"text\" value=\"".$row4["dif"]."\" class=\"form-control input-sm\">\n"; 
						echo "  </div>\n"; 
						echo "</div>\n"; 
						echo "\n"; 
						echo "<div class=\"form-group\">\n"; 
						echo "  <label class=\"col-md-4 control-label\" for=\"textinput\">Puntos</label>  \n"; 
						echo "  <div class=\"col-md-4\">\n"; 
						echo "  <input id=\"textinput\" name=\"pts\" type=\"text\" value=\"".$row4["pts"]."\" class=\"form-control input-sm\">\n"; 
						echo "  </div>\n"; 
						echo "</div>\n"; 
						echo "\n"; 
						
						echo "\n"; 
						echo "      </div>\n"; 
						echo "      <div class=\"modal-footer\">\n"; 
						echo "        <button type=\"submit\" class=\"btn btn-success\" >Guardar</button>\n"; 
						echo "      </div>\n"; 
						echo "    </div>\n"; 
						echo "\n";
						echo "</form>\n";  
						echo "  </div>\n"; 
						echo "</div>\n";

						echo "</td>\n"; 
						echo "    <td>"; 
						echo "<form action=\"eliminar_equipodeliga.php\" method=\"post\" onsubmit=\"return confirm('¿Estas Seguro de eliminar este equipo de la liga?');\">";
							       echo "<input type=\"hidden\" name=\"equipo\" value=".$row4["id_equipo"].">";
							        echo "<input type=\"hidden\" name=\"liga\" value=".$liga.">";
							        echo " <button class=\"btn btn-danger btn-sm\" data-toggle=\"tooltip\" title=\"Dar de baja equipo\"><span class=\"glyphicon glyphicon-arrow-down\" ></span></button>";
							    echo "</form>";
						echo "</td>\n";
						echo "    <td>";
						echo "<form action=\"ver_plantilla.php\" method=\"post\" >";
							       echo "<input type=\"hidden\" name=\"equipo\" value=".$row4["id_equipo"].">";
							        echo "<input type=\"hidden\" name=\"liga\" value=".$liga.">";
							        echo " <button class=\"btn btn-success btn-sm\" data-toggle=\"tooltip\" title=\"Dar de baja equipo\"><span class=\"glyphicon glyphicon-user\" ></span></button>";
							    echo "</form>"; 
						
						echo "</td>\n"; 
						echo "  </tr>\n";
				    }
				} else {
				    echo "0 results";
				} 
				 
				
		    }
		} else {
		    echo "0 results";
		} 
		 
		echo "</table>\n";
		echo "<button type=\"button\" class=\"btn btn-warning btn-sm pull-right\" data-toggle=\"modal\" data-target=\"#myModal1\">Terminar Liga</button>\n";
		echo "<span class=\"pull-right\">&nbsp;</span>";
		echo "<form action=\"admin_league_pdf.php\" method=\"post\" >";
							       
							        echo "<input type=\"hidden\" name=\"liga\" value=".$liga.">";
							        echo " <button class=\"btn btn-info btn-sm pull-right\" formtarget=\"_blank\">Imprimir Tabla</button>";
							    echo "</form>"; 		
		
	


		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		    window.location.href='ligas.php';
		    </SCRIPT>");
	}

	//enctype="multipart/form-data"

	
include_once("includes/footer.php");?>