<?php require_once("includes/header.php");
require_once("cn2.php");

echo "<div class=\"panel panel-primary\">\n"; 
echo "    <div class=\"panel-heading\">\n"; 

echo "         <h3 class=\"pull-left\">\n"; 
echo $_SESSION["nombre"];
echo " "; 
echo $_SESSION["apellido"];
echo "            </h3>\n"; 
echo "\n"; 
echo "        <a href=\"edit_confirm.php\" class=\"btn btn-warning pull-right fa fa-pencil\" role=\"button\"> Editar</a>\n"; 
echo "        <div class=\"clearfix\"></div>\n"; 
echo "    </div>\n";  
echo "  <div class=\"panel-body\">\n"; 
	
	echo "<table class=\"table\">\n"; 
	echo "  <tr>\n"; 
	echo "    <td rowspan=\"3\">";
	if ($_SESSION["foto"]) {
	 	echo "<img src=".'users/'.$_SESSION["usuario"].'/'.$_SESSION["foto"]." class=\"img-responsive\" height=\"200\" width=\"200\">";
	 }else{
	 	echo "<img src=\"default_user.png\" class=\"img-responsive\" height=\"200\" width=\"200\">";
	 	
	 	
	 }
	 
	echo "</td>\n"; 
	echo "    <td><b>Email: </b></td>\n"; 
	echo "    <td>"; echo $_SESSION["email"]; echo "</td>\n"; 
	echo "  </tr>\n"; 
	echo "  <tr align=\"left\">\n"; 
	echo "    <td ><b>Pais:</b></td>\n"; 
	echo "    <td >"; echo "<img class=\"flag flag-".strtolower($_SESSION["pais"])."\" height=\"100\" width=\"100\" />"; echo "</td>\n"; 
	echo "  </tr>\n"; 
	echo "  <tr>\n"; 
	echo "    <td ><b>Contraseña:</b></td>\n"; 
	echo "    <td >"; echo "*******"; echo "</td>\n"; 
	echo "  </tr>\n"; 
	echo "  <tr>\n"; 
	echo "    <td >"; 
	
	 	if ($_SESSION["foto"]) {
	 		# code...
	 	}else{
	 		echo "  <span class=\"help-block\">Sube una foto de perfil para tus futuras credenciales.</span>  \n"; 
		echo "<a href=\"edit_confirm.php\" class=\"btn btn-success\" role=\"button\">Editar foto de perfil</a>\n";
	 	}
		
		
	echo "</td>\n"; 
	echo "    <td ><b>Idioma:</b></td>\n"; 
	echo "    <td>"; 
	if ($_SESSION["idioma"]==1) {
		echo "Español";
	}
	echo "</td>\n"; 
	echo "  </tr>\n"; 
	echo "</table>\n";
echo "  </div>\n"; 
echo "</div>\n";



$actual = $_SESSION["usuario"];
$sql = "SELECT posicion, score, id_jugador, id_equipo, situacion, noti, numero FROM jugadores WHERE id_usuario='$actual'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<div class=\"panel panel-success\">\n"; 
		echo "    <div class=\"panel-heading\">\n"; 
		echo "         <h3 class=\"pull-left\">\n"; 
		echo "Jugador "; 
		echo "            </h3>\n"; 
		echo "\n"; 
		
		echo "        <div class=\"clearfix\"></div>\n"; 
		echo "    </div>\n";  
		echo "  <div class=\"panel-body\">\n";
		 echo "<table class=\"table\">\n"; 
		 echo "  <tr>\n";
		echo "    <th >Posicion</th>\n";
		echo "    <th >Goles</th>\n";
		echo "    <th >Situacion</th>\n"; 
		echo "    <th >Equipo</th>\n";
		echo "    <th ></th>\n";
		
		 echo "  </tr>\n";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
       
       echo "  <tr>\n";
		
		echo "    <td>" . $row["posicion"]. "</td>\n";
		if ($row["posicion"]=='DT') {
			echo "    <td ></td>\n"; 
		 }else{
		echo "    <td >" . $row["score"]. "</td>\n";                    
		}
		if ($row["situacion"]==1) {
			echo "    <td >";
			echo "<span class=\"btn btn-warning btn-xs fa fa-square\" data-toggle=\"tooltip\" title=\"Tarjeta amarilla\"> </span>";
		    		echo " Suspendido";
		    		echo "</td>\n";
		}elseif($row["situacion"]==2){
			echo "    <td >";
			echo "<span class=\"btn btn-danger btn-xs fa fa-square\" data-toggle=\"tooltip\" title=\"Tarjeta roja\"> </span>";
		    		echo " Suspendido";
		    		echo "</td>\n";
		}elseif ($row["situacion"]==3) {
			echo "    <td >";
			echo "<span class=\"btn btn-info btn-xs fa fa-plus-square\" data-toggle=\"tooltip\" title=\"Lesionado\"> </span>";
		    		echo " Lesionado";
		    		echo "</td>\n";
		}elseif ($row["situacion"]==4) {
			echo "    <td >";
			echo "<span class=\"btn btn-default btn-xs fa fa-exclamation\" data-toggle=\"tooltip\" title=\"Separado del equipo\"> </span>";
		    		echo " Inhabilitado";
		    		echo "</td>\n";
		}else{
			echo "    <td >";
			echo "<span class=\"btn btn-success btn-xs fa fa-check-square\" data-toggle=\"tooltip\" title=\"Para Jugar\"> </span>";
		    		echo " Para Jugar";
		    		echo "</td>\n";
		}
		
		echo "    <td>"; 
		$sql2 = "SELECT nombre FROM equipos WHERE id_equipo=".$row["id_equipo"]."";
		$result2 = $conn->query($sql2);

		if ($result2->num_rows > 0) {
		    // output data of each row
		    while($row2 = $result2->fetch_assoc()) {
		    	if ($row2["nombre"]=='noequipo') {
		    		echo "<form action=\"meter.php\" method=\"post\" >";
		            echo "<input type=\"hidden\" name=\"numerodejugador\" value=".$row['id_jugador'].">";
		            echo " <button class=\"btn btn-success btn-xs\">Agregar equipo</button>";
		            echo "</form>"; 

		             



		    	}elseif ($row["noti"]==1) {
		    		echo "<span class=\"btn btn-warning btn-xs fa fa-exclamation-triangle\" data-toggle=\"tooltip\" title=\"Solicitud pendiente\"> </span>";
		    		echo " ";
		    		echo $row2['nombre'];
		    	}else{
		    		if ($row['posicion']=='DT') {
		    			echo "<span class=\"btn btn-default btn-xs \" data-toggle=\"tooltip\" title=\"Director Tecnico\">DT</span>";
		    			echo " ";
		    		}else{
		    			echo "<span class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" title=\"Numero\">".$row['numero']." </span>";
		    			echo " ";
		    		}
		    		echo $row2["nombre"];
		    	}
		       
		    }
		} else {
		    echo "0 results";
		}
		echo "</td>\n";
	echo "<td>";
	echo "<form action=\"eliminar_j.php\" method=\"post\" onsubmit=\"return confirm('¿Estas Seguro?');\">";
            echo "<input type=\"hidden\" name=\"numerodetable\" value=".$row['id_jugador'].">";
            echo " <button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
            echo "</form>"; echo "</td>";
	 echo "  </tr>\n"; 
		
		
		
		
    }
   
		echo "</table>\n";
    echo "<button type=\"button\" class=\"btn btn-success btn-md pull-right\" data-toggle=\"modal\" data-target=\"#myModal\">Añadir otra posicion</button>\n"; 
		echo "\n"; 
		echo "<!-- Modal -->\n"; 
		echo "<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">\n"; 
		echo "  <div class=\"modal-dialog\">\n"; 
		echo "\n"; 
		echo "    <!-- Modal content-->\n"; 
		echo "    <div class=\"modal-content\">\n"; 
		echo "      <div class=\"modal-header\">\n"; 
		echo "        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\n"; 
		echo "        <h4 class=\"modal-title\">¿Que posicion Juegas?</h4>\n"; 
		echo "      </div>\n"; 
		echo "      <div class=\"modal-body\">\n"; 
		echo "<form class=\"form-horizontal\" action=\"perfil_j.php\" method=\"post\" >\n"; 
		echo "<!-- Select Basic -->\n"; 
		echo "<div class=\"form-group\">\n"; 
		echo "  <label class=\"col-md-4 control-label\" for=\"selectbasic\">Posicion:</label>\n"; 
		echo "  <div class=\"col-md-4\">\n"; 
		echo "    <select id=\"position\" name=\"position\" class=\"form-control\">\n"; 
		echo "      <option value=\"DT\">Director Tecnico</option>\n"; 
		echo "      <option value=\"POR\">Portero</option>\n"; 
		echo "      <option value=\"DFC\">Defensa Central</option>\n"; 
		echo "      <option value=\"DFD\">Defensa Derecho</option>\n"; 
		echo "      <option value=\"DFI\">Defensa Izquierdo</option>\n"; 
		echo "      <option value=\"LIB\">Libero</option>\n"; 
		echo "      <option value=\"MC\">Medio Central</option>\n"; 
		echo "      <option value=\"MCO\">Medio Central Ofensivo</option>\n"; 
		echo "      <option value=\"MCD\">Medio Central Defensivo</option>\n"; 
		echo "      <option value=\"MD\">Medio Derecho</option>\n"; 
		echo "      <option value=\"MI\">Medio Izquierdo</option>\n"; 
		echo "      <option value=\"CAI\">Carrilero Izquierdo</option>\n"; 
		echo "      <option value=\"CAD\">Carrilero Derecho</option>\n"; 
		echo "      <option value=\"ED\">Extremo Derecho</option>\n"; 
		echo "      <option value=\"EI\">Extremo Izquierdo</option>\n"; 
		echo "      <option value=\"DC\">Delantero Centro</option>\n"; 
		echo "    </select>\n"; 
		echo "  </div>\n"; 
		echo "</div>\n"; 
		
		echo "      </div>\n"; 
		echo "<!-- Button -->\n"; 
		echo "<div class=\"modal-footer\">\n"; 
		echo "  <label class=\"col-md-4 control-label\" for=\"singlebutton\"></label>\n"; 
		echo "  <div class=\"col-md-4\">\n"; 
		echo "    <button id=\"singlebutton\" name=\"singlebutton\" class=\"btn btn-success\" type=\"submit\">Listo</button>\n"; 
		echo "  </div>\n"; 
		echo "</div>\n";
		echo "    </div>\n"; 
		
		echo "</form>\n"; 
		echo "\n"; 
		echo "  </div>\n"; 
		echo "</div>\n";
		echo "        <div class=\"clearfix\"></div>\n"; 
		echo "    </div>\n";  
    echo "  </div>\n"; 
		echo "</div>\n";
} else {
    echo "<div class=\"panel panel-warning\">\n"; 
		echo "    <div class=\"panel-heading\">\n"; 
		echo "         <h3 class=\"pull-left\">\n"; 
		echo "No tienes perfil de jugador"; 
		echo "            </h3>\n"; 
		echo "\n"; 
		echo "<button type=\"button\" class=\"btn btn-success btn-md pull-right\" data-toggle=\"modal\" data-target=\"#myModal\">Crear</button>\n"; 
		echo "\n"; 
		echo "<!-- Modal -->\n"; 
		echo "<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">\n"; 
		echo "  <div class=\"modal-dialog\">\n"; 
		echo "\n"; 
		echo "    <!-- Modal content-->\n"; 
		echo "    <div class=\"modal-content\">\n"; 
		echo "      <div class=\"modal-header\">\n"; 
		echo "        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\n"; 
		echo "        <h4 class=\"modal-title\">¿Que posicion Juegas?</h4>\n"; 
		echo "      </div>\n"; 
		echo "      <div class=\"modal-body\">\n"; 
		echo "<form class=\"form-horizontal\" action=\"perfil_j.php\" method=\"post\" >\n"; 
		echo "<!-- Select Basic -->\n"; 
		echo "<div class=\"form-group\">\n"; 
		echo "  <label class=\"col-md-4 control-label\" for=\"selectbasic\">Posicion:</label>\n"; 
		echo "  <div class=\"col-md-4\">\n"; 
		echo "    <select id=\"position\" name=\"position\" class=\"form-control\">\n"; 
		echo "      <option value=\"DT\">Director Tecnico</option>\n"; 
		echo "      <option value=\"POR\">Portero</option>\n"; 
		echo "      <option value=\"DFC\">Defensa Central</option>\n"; 
		echo "      <option value=\"DFD\">Defensa Derecho</option>\n"; 
		echo "      <option value=\"DFI\">Defensa Izquierdo</option>\n"; 
		echo "      <option value=\"LIB\">Libero</option>\n"; 
		echo "      <option value=\"MC\">Medio Central</option>\n"; 
		echo "      <option value=\"MCO\">Medio Central Ofensivo</option>\n"; 
		echo "      <option value=\"MCD\">Medio Central Defensivo</option>\n"; 
		echo "      <option value=\"MD\">Medio Derecho</option>\n"; 
		echo "      <option value=\"MI\">Medio Izquierdo</option>\n"; 
		echo "      <option value=\"CAI\">Carrilero Izquierdo</option>\n"; 
		echo "      <option value=\"CAD\">Carrilero Derecho</option>\n"; 
		echo "      <option value=\"ED\">Extremo Derecho</option>\n"; 
		echo "      <option value=\"EI\">Extremo Izquierdo</option>\n"; 
		echo "      <option value=\"DC\">Delantero Centro</option>\n"; 
		echo "    </select>\n"; 
		echo "  </div>\n"; 
		echo "</div>\n"; 
		
		echo "      </div>\n"; 
		echo "<!-- Button -->\n"; 
		echo "<div class=\"modal-footer\">\n"; 
		echo "  <label class=\"col-md-4 control-label\" for=\"singlebutton\"></label>\n"; 
		echo "  <div class=\"col-md-4\">\n"; 
		echo "    <button id=\"singlebutton\" name=\"singlebutton\" class=\"btn btn-success\" type=\"submit\">Listo</button>\n"; 
		echo "  </div>\n"; 
		echo "</div>\n";
		echo "    </div>\n"; 
		
		echo "</form>\n"; 
		echo "\n"; 
		echo "  </div>\n"; 
		echo "</div>\n";
		echo "        <div class=\"clearfix\"></div>\n"; 
		echo "    </div>\n";  
		
		echo "</div>\n";
}
$conn->close(); 








	require_once("includes/footer.php");
?>