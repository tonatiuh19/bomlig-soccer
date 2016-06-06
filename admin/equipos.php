<?php include_once("includes/header.php");
echo "<button type=\"button\" class=\"btn btn-success btn-lg pull-right\" data-toggle=\"modal\" data-target=\"#myModalpp\">Crear equipo</button>\n"; 
				echo "\n"; 
echo "<!-- Modal -->\n"; 
echo "<div id=\"myModalpp\" class=\"modal fade\" role=\"dialog\">\n"; 
echo "  <div class=\"modal-dialog\">\n"; 
echo "\n"; 
echo "    <!-- Modal content-->\n"; 
echo "    <div class=\"modal-content\">\n"; 
echo "      <div class=\"modal-header\">\n"; 
echo "        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\n"; 
echo "        <h4 class=\"modal-title\">Crear Equipo</h4>\n"; 
echo "      </div>\n"; 
echo "      <div class=\"modal-body\">\n"; 
echo "<form class=\"form-horizontal\" action=\"newteam.php\" method=\"post\" enctype=\"multipart/form-data\">\n"; 
echo "<!-- Select Basic -->\n"; 
echo "<div class=\"form-group\">\n"; 
echo "  <label class=\"col-md-4 control-label\" for=\"textinput\">Nombre:</label>  \n"; 
echo "  <div class=\"col-md-4\">\n"; 
echo "  <input id=\"nombre\" name=\"nombre\" type=\"text\" placeholder=\"Ejemplo: FC Barcelona\" class=\"form-control input-md\" required=\"\">    \n"; 
echo "  </div>\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "<div class=\"form-group\">\n"; 
echo "  <label class=\"col-md-4 control-label\" for=\"filebutton\">Escudo:</label>\n"; 
echo "  <div class=\"col-md-4\">\n"; 
echo "   (PNG, JPG) <input id=\"foto\" name=\"foto\" class=\"input-file\" type=\"file\">\n"; 
echo "		<span class=\"help-block\">Si no tienes escudo aun, deja este campo vacio.</span>\n";
echo "  </div>\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "<div class=\"form-group\">\n"; 
echo "  <label class=\"col-md-4 control-label\" for=\"selectbasic\">Pais:</label>\n"; 
echo "  <div class=\"col-md-4\">\n"; 
echo "    <select id=\"pais\" name=\"pais\" class=\"form-control\" value=".$_SESSION["pais"]." required>\n"; 
				echo "		<option value=".$_SESSION["pais"]." selected>".$_SESSION["pais"]."</option>\n";
				echo "		<option value=\"AF\">Afganistán</option>\n"; 
				echo "		<option value=\"AL\">Albania</option>\n"; 
				echo "		<option value=\"DE\">Alemania</option>\n"; 
				echo "		<option value=\"AD\">Andorra</option>\n"; 
				echo "		<option value=\"AO\">Angola</option>\n"; 
				echo "		<option value=\"AI\">Anguilla</option>\n"; 
				echo "		<option value=\"AQ\">Antártida</option>\n"; 
				echo "		<option value=\"AG\">Antigua y Barbuda</option>\n"; 
				echo "		<option value=\"AN\">Antillas Holandesas</option>\n"; 
				echo "		<option value=\"SA\">Arabia Saudí</option>\n"; 
				echo "		<option value=\"DZ\">Argelia</option>\n"; 
				echo "		<option value=\"AR\">Argentina</option>\n"; 
				echo "		<option value=\"AM\">Armenia</option>\n"; 
				echo "		<option value=\"AW\">Aruba</option>\n"; 
				echo "		<option value=\"AU\">Australia</option>\n"; 
				echo "		<option value=\"AT\">Austria</option>\n"; 
				echo "		<option value=\"AZ\">Azerbaiyán</option>\n"; 
				echo "		<option value=\"BS\">Bahamas</option>\n"; 
				echo "		<option value=\"BH\">Bahrein</option>\n"; 
				echo "		<option value=\"BD\">Bangladesh</option>\n"; 
				echo "		<option value=\"BB\">Barbados</option>\n"; 
				echo "		<option value=\"BE\">Bélgica</option>\n"; 
				echo "		<option value=\"BZ\">Belice</option>\n"; 
				echo "		<option value=\"BJ\">Benin</option>\n"; 
				echo "		<option value=\"BM\">Bermudas</option>\n"; 
				echo "		<option value=\"BY\">Bielorrusia</option>\n"; 
				echo "		<option value=\"MM\">Birmania</option>\n"; 
				echo "		<option value=\"BO\">Bolivia</option>\n"; 
				echo "		<option value=\"BA\">Bosnia y Herzegovina</option>\n"; 
				echo "		<option value=\"BW\">Botswana</option>\n"; 
				echo "		<option value=\"BR\">Brasil</option>\n"; 
				echo "		<option value=\"BN\">Brunei</option>\n"; 
				echo "		<option value=\"BG\">Bulgaria</option>\n"; 
				echo "		<option value=\"BF\">Burkina Faso</option>\n"; 
				echo "		<option value=\"BI\">Burundi</option>\n"; 
				echo "		<option value=\"BT\">Bután</option>\n"; 
				echo "		<option value=\"CV\">Cabo Verde</option>\n"; 
				echo "		<option value=\"KH\">Camboya</option>\n"; 
				echo "		<option value=\"CM\">Camerún</option>\n"; 
				echo "		<option value=\"CA\">Canadá</option>\n"; 
				echo "		<option value=\"TD\">Chad</option>\n"; 
				echo "		<option value=\"CL\">Chile</option>\n"; 
				echo "		<option value=\"CN\">China</option>\n"; 
				echo "		<option value=\"CY\">Chipre</option>\n"; 
				echo "		<option value=\"VA\">Ciudad del Vaticano (Santa Sede)</option>\n"; 
				echo "		<option value=\"CO\">Colombia</option>\n"; 
				echo "		<option value=\"KM\">Comores</option>\n"; 
				echo "		<option value=\"CG\">Congo</option>\n"; 
				echo "		<option value=\"CD\">Congo, República Democrática del</option>\n"; 
				echo "		<option value=\"KR\">Corea</option>\n"; 
				echo "		<option value=\"KP\">Corea del Norte</option>\n"; 
				echo "		<option value=\"CI\">Costa de Marfíl</option>\n"; 
				echo "		<option value=\"CR\">Costa Rica</option>\n"; 
				echo "		<option value=\"HR\">Croacia (Hrvatska)</option>\n"; 
				echo "		<option value=\"CU\">Cuba</option>\n"; 
				echo "		<option value=\"DK\">Dinamarca</option>\n"; 
				echo "		<option value=\"DJ\">Djibouti</option>\n"; 
				echo "		<option value=\"DM\">Dominica</option>\n"; 
				echo "		<option value=\"EC\">Ecuador</option>\n"; 
				echo "		<option value=\"EG\">Egipto</option>\n"; 
				echo "		<option value=\"SV\">El Salvador</option>\n"; 
				echo "		<option value=\"AE\">Emiratos Árabes Unidos</option>\n"; 
				echo "		<option value=\"ER\">Eritrea</option>\n"; 
				echo "		<option value=\"SI\">Eslovenia</option>\n"; 
				echo "		<option value=\"ES\">España</option>\n"; 
				echo "		<option value=\"US\">Estados Unidos</option>\n"; 
				echo "		<option value=\"EE\">Estonia</option>\n"; 
				echo "		<option value=\"ET\">Etiopía</option>\n"; 
				echo "		<option value=\"FJ\">Fiji</option>\n"; 
				echo "		<option value=\"PH\">Filipinas</option>\n"; 
				echo "		<option value=\"FI\">Finlandia</option>\n"; 
				echo "		<option value=\"FR\">Francia</option>\n"; 
				echo "		<option value=\"GA\">Gabón</option>\n"; 
				echo "		<option value=\"GM\">Gambia</option>\n"; 
				echo "		<option value=\"GE\">Georgia</option>\n"; 
				echo "		<option value=\"GH\">Ghana</option>\n"; 
				echo "		<option value=\"GI\">Gibraltar</option>\n"; 
				echo "		<option value=\"GD\">Granada</option>\n"; 
				echo "		<option value=\"GR\">Grecia</option>\n"; 
				echo "		<option value=\"GL\">Groenlandia</option>\n"; 
				echo "		<option value=\"GP\">Guadalupe</option>\n"; 
				echo "		<option value=\"GU\">Guam</option>\n"; 
				echo "		<option value=\"GT\">Guatemala</option>\n"; 
				echo "		<option value=\"GY\">Guayana</option>\n"; 
				echo "		<option value=\"GF\">Guayana Francesa</option>\n"; 
				echo "		<option value=\"GN\">Guinea</option>\n"; 
				echo "		<option value=\"GQ\">Guinea Ecuatorial</option>\n"; 
				echo "		<option value=\"GW\">Guinea-Bissau</option>\n"; 
				echo "		<option value=\"HT\">Haití</option>\n"; 
				echo "		<option value=\"HN\">Honduras</option>\n"; 
				echo "		<option value=\"HU\">Hungría</option>\n"; 
				echo "		<option value=\"IN\">India</option>\n"; 
				echo "		<option value=\"ID\">Indonesia</option>\n"; 
				echo "		<option value=\"IQ\">Irak</option>\n"; 
				echo "		<option value=\"IR\">Irán</option>\n"; 
				echo "		<option value=\"IE\">Irlanda</option>\n"; 
				echo "		<option value=\"BV\">Isla Bouvet</option>\n"; 
				echo "		<option value=\"CX\">Isla de Christmas</option>\n"; 
				echo "		<option value=\"IS\">Islandia</option>\n"; 
				echo "		<option value=\"KY\">Islas Caimán</option>\n"; 
				echo "		<option value=\"CK\">Islas Cook</option>\n"; 
				echo "		<option value=\"CC\">Islas de Cocos o Keeling</option>\n"; 
				echo "		<option value=\"FO\">Islas Faroe</option>\n"; 
				echo "		<option value=\"HM\">Islas Heard y McDonald</option>\n"; 
				echo "		<option value=\"FK\">Islas Malvinas</option>\n"; 
				echo "		<option value=\"MP\">Islas Marianas del Norte</option>\n"; 
				echo "		<option value=\"MH\">Islas Marshall</option>\n"; 
				echo "		<option value=\"UM\">Islas menores de Estados Unidos</option>\n"; 
				echo "		<option value=\"PW\">Islas Palau</option>\n"; 
				echo "		<option value=\"SB\">Islas Salomón</option>\n"; 
				echo "		<option value=\"SJ\">Islas Svalbard y Jan Mayen</option>\n"; 
				echo "		<option value=\"TK\">Islas Tokelau</option>\n"; 
				echo "		<option value=\"TC\">Islas Turks y Caicos</option>\n"; 
				echo "		<option value=\"VI\">Islas Vírgenes (EEUU)</option>\n"; 
				echo "		<option value=\"VG\">Islas Vírgenes (Reino Unido)</option>\n"; 
				echo "		<option value=\"WF\">Islas Wallis y Futuna</option>\n"; 
				echo "		<option value=\"IL\">Israel</option>\n"; 
				echo "		<option value=\"IT\">Italia</option>\n"; 
				echo "		<option value=\"JM\">Jamaica</option>\n"; 
				echo "		<option value=\"JP\">Japón</option>\n"; 
				echo "		<option value=\"JO\">Jordania</option>\n"; 
				echo "		<option value=\"KZ\">Kazajistán</option>\n"; 
				echo "		<option value=\"KE\">Kenia</option>\n"; 
				echo "		<option value=\"KG\">Kirguizistán</option>\n"; 
				echo "		<option value=\"KI\">Kiribati</option>\n"; 
				echo "		<option value=\"KW\">Kuwait</option>\n"; 
				echo "		<option value=\"LA\">Laos</option>\n"; 
				echo "		<option value=\"LS\">Lesotho</option>\n"; 
				echo "		<option value=\"LV\">Letonia</option>\n"; 
				echo "		<option value=\"LB\">Líbano</option>\n"; 
				echo "		<option value=\"LR\">Liberia</option>\n"; 
				echo "		<option value=\"LY\">Libia</option>\n"; 
				echo "		<option value=\"LI\">Liechtenstein</option>\n"; 
				echo "		<option value=\"LT\">Lituania</option>\n"; 
				echo "		<option value=\"LU\">Luxemburgo</option>\n"; 
				echo "		<option value=\"MK\">Macedonia, Ex-República Yugoslava de</option>\n"; 
				echo "		<option value=\"MG\">Madagascar</option>\n"; 
				echo "		<option value=\"MY\">Malasia</option>\n"; 
				echo "		<option value=\"MW\">Malawi</option>\n"; 
				echo "		<option value=\"MV\">Maldivas</option>\n"; 
				echo "		<option value=\"ML\">Malí</option>\n"; 
				echo "		<option value=\"MT\">Malta</option>\n"; 
				echo "		<option value=\"MA\">Marruecos</option>\n"; 
				echo "		<option value=\"MQ\">Martinica</option>\n"; 
				echo "		<option value=\"MU\">Mauricio</option>\n"; 
				echo "		<option value=\"MR\">Mauritania</option>\n"; 
				echo "		<option value=\"YT\">Mayotte</option>\n"; 
				echo "		<option value=\"MX\">México</option>\n"; 
				echo "		<option value=\"FM\">Micronesia</option>\n"; 
				echo "		<option value=\"MD\">Moldavia</option>\n"; 
				echo "		<option value=\"MC\">Mónaco</option>\n"; 
				echo "		<option value=\"MN\">Mongolia</option>\n"; 
				echo "		<option value=\"MS\">Montserrat</option>\n"; 
				echo "		<option value=\"MZ\">Mozambique</option>\n"; 
				echo "		<option value=\"NA\">Namibia</option>\n"; 
				echo "		<option value=\"NR\">Nauru</option>\n"; 
				echo "		<option value=\"NP\">Nepal</option>\n"; 
				echo "		<option value=\"NI\">Nicaragua</option>\n"; 
				echo "		<option value=\"NE\">Níger</option>\n"; 
				echo "		<option value=\"NG\">Nigeria</option>\n"; 
				echo "		<option value=\"NU\">Niue</option>\n"; 
				echo "		<option value=\"NF\">Norfolk</option>\n"; 
				echo "		<option value=\"NO\">Noruega</option>\n"; 
				echo "		<option value=\"NC\">Nueva Caledonia</option>\n"; 
				echo "		<option value=\"NZ\">Nueva Zelanda</option>\n"; 
				echo "		<option value=\"OM\">Omán</option>\n"; 
				echo "		<option value=\"NL\">Países Bajos</option>\n"; 
				echo "		<option value=\"PA\">Panamá</option>\n"; 
				echo "		<option value=\"PG\">Papúa Nueva Guinea</option>\n"; 
				echo "		<option value=\"PK\">Paquistán</option>\n"; 
				echo "		<option value=\"PY\">Paraguay</option>\n"; 
				echo "		<option value=\"PE\">Perú</option>\n"; 
				echo "		<option value=\"PN\">Pitcairn</option>\n"; 
				echo "		<option value=\"PF\">Polinesia Francesa</option>\n"; 
				echo "		<option value=\"PL\">Polonia</option>\n"; 
				echo "		<option value=\"PT\">Portugal</option>\n"; 
				echo "		<option value=\"PR\">Puerto Rico</option>\n"; 
				echo "		<option value=\"QA\">Qatar</option>\n"; 
				echo "		<option value=\"UK\">Reino Unido</option>\n"; 
				echo "		<option value=\"CF\">República Centroafricana</option>\n"; 
				echo "		<option value=\"CZ\">República Checa</option>\n"; 
				echo "		<option value=\"ZA\">República de Sudáfrica</option>\n"; 
				echo "		<option value=\"DO\">República Dominicana</option>\n"; 
				echo "		<option value=\"SK\">República Eslovaca</option>\n"; 
				echo "		<option value=\"RE\">Reunión</option>\n"; 
				echo "		<option value=\"RW\">Ruanda</option>\n"; 
				echo "		<option value=\"RO\">Rumania</option>\n"; 
				echo "		<option value=\"RU\">Rusia</option>\n"; 
				echo "		<option value=\"EH\">Sahara Occidental</option>\n"; 
				echo "		<option value=\"KN\">Saint Kitts y Nevis</option>\n"; 
				echo "		<option value=\"WS\">Samoa</option>\n"; 
				echo "		<option value=\"AS\">Samoa Americana</option>\n"; 
				echo "		<option value=\"SM\">San Marino</option>\n"; 
				echo "		<option value=\"VC\">San Vicente y Granadinas</option>\n"; 
				echo "		<option value=\"SH\">Santa Helena</option>\n"; 
				echo "		<option value=\"LC\">Santa Lucía</option>\n"; 
				echo "		<option value=\"ST\">Santo Tomé y Príncipe</option>\n"; 
				echo "		<option value=\"SN\">Senegal</option>\n"; 
				echo "		<option value=\"SC\">Seychelles</option>\n"; 
				echo "		<option value=\"SL\">Sierra Leona</option>\n"; 
				echo "		<option value=\"SG\">Singapur</option>\n"; 
				echo "		<option value=\"SY\">Siria</option>\n"; 
				echo "		<option value=\"SO\">Somalia</option>\n"; 
				echo "		<option value=\"LK\">Sri Lanka</option>\n"; 
				echo "		<option value=\"PM\">St Pierre y Miquelon</option>\n"; 
				echo "		<option value=\"SZ\">Suazilandia</option>\n"; 
				echo "		<option value=\"SD\">Sudán</option>\n"; 
				echo "		<option value=\"SE\">Suecia</option>\n"; 
				echo "		<option value=\"CH\">Suiza</option>\n"; 
				echo "		<option value=\"SR\">Surinam</option>\n"; 
				echo "		<option value=\"TH\">Tailandia</option>\n"; 
				echo "		<option value=\"TW\">Taiwán</option>\n"; 
				echo "		<option value=\"TZ\">Tanzania</option>\n"; 
				echo "		<option value=\"TJ\">Tayikistán</option>\n"; 
				echo "		<option value=\"TF\">Territorios franceses del Sur</option>\n"; 
				echo "		<option value=\"TP\">Timor Oriental</option>\n"; 
				echo "		<option value=\"TG\">Togo</option>\n"; 
				echo "		<option value=\"TO\">Tonga</option>\n"; 
				echo "		<option value=\"TT\">Trinidad y Tobago</option>\n"; 
				echo "		<option value=\"TN\">Túnez</option>\n"; 
				echo "		<option value=\"TM\">Turkmenistán</option>\n"; 
				echo "		<option value=\"TR\">Turquía</option>\n"; 
				echo "		<option value=\"TV\">Tuvalu</option>\n"; 
				echo "		<option value=\"UA\">Ucrania</option>\n"; 
				echo "		<option value=\"UG\">Uganda</option>\n"; 
				echo "		<option value=\"UY\">Uruguay</option>\n"; 
				echo "		<option value=\"UZ\">Uzbekistán</option>\n"; 
				echo "		<option value=\"VU\">Vanuatu</option>\n"; 
				echo "		<option value=\"VE\">Venezuela</option>\n"; 
				echo "		<option value=\"VN\">Vietnam</option>\n"; 
				echo "		<option value=\"YE\">Yemen</option>\n"; 
				echo "		<option value=\"YU\">Yugoslavia</option>\n"; 
				echo "		<option value=\"ZM\">Zambia</option>\n"; 
				echo "		<option value=\"ZW\">Zimbabue</option>\n"; 
				echo "	</select>\n"; 
echo "  </div>\n"; 
echo "</div>\n"; 
echo "\n";
 
				
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

echo "<style>\n"; 
echo ".error {\n"; 
echo "    color: #090808;\n"; 
echo "    text-align: left;\n"; 
echo "}\n"; 
echo ".error2 {\n"; 
echo "    color: #090808;\n"; 
echo "    text-align: right;\n"; 
echo "}\n"; 
echo ".error3 {\n"; 
echo "    text-align: center;\n";
echo "}\n";
echo ".error4 {\n"; 
echo "    background-color: #d7e5f0;\n";
echo "}\n"; 
echo ".error5 {\n"; 
echo "    background-color: #fbf682;\n";
echo "}\n"; 
echo "</style>\n";
//hidden-md hidden-lg
require_once("cn2.php");
$actual = $_SESSION['usuario'];
echo "<div class=\"hidden-xs\">\n";
$sql = "SELECT id_equipo, id_liga, id_jugador, noti, posicion FROM jugadores WHERE id_usuario='$actual'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
    	if ($row["id_equipo"]=='5') {
    		echo "<div class=\"btn btn-default active error3\">\n";
    		echo "<img src=\"default_team.png\" height=\"200\" width=\"200\"></img>"; 
			echo "  <h2>". $row["posicion"]."</h2>\n"; 
			echo "  <p>No tienes equipo para esta posicion</p>\n";
			echo "<form action=\"meter.php\" method=\"post\" >";
            echo "<input type=\"hidden\" name=\"numerodejugador\" value=".$row['id_jugador'].">"; 
			echo " <button class=\"btn btn-primary btn-lg\">Buscar</button>"; 
			echo "</form>"; 
			echo "</div>"; 
			
    	}else{
    	if ($row["noti"]=='1') {
    		echo "<div class=\"btn btn-warning active\">\n";

    		$sql2 = "SELECT nombre, escudo, pais, id_equipo, id_usuario FROM equipos WHERE id_equipo=". $row["id_equipo"]."";
			$result2 = $conn->query($sql2);


			if ($result2->num_rows > 0) {
			    // output data of each row
			    while($row2 = $result2->fetch_assoc()) {

			    	if ($row2['escudo']) {
						echo "<img src=".'users/'.$row2['id_usuario'].'/'.$row2['id_equipo'].'/'.$row2['escudo']." height=\"120\" width=\"120\"></img>";
					}else{
						echo "<img src=\"default_team.png\" height=\"120\" width=\"120\"></img>";
					}
					echo "  <br>";
					if ($row2["pais"]) {
						echo "<img class=\"flag flag-".strtolower($row2["pais"])."\" height=\"100\" width=\"100\" />";
					}
					
			        echo "  <h2>" .utf8_decode($row2["nombre"]). "</h2>\n";
			    }
			} else {
			    echo "0 results";
			}
			
			echo "  <h5>Solicitud pendiente</h5>\n";
			$sql4 = "SELECT nombre FROM ligas WHERE id_liga=". $row["id_liga"]."";
			$result4 = $conn->query($sql4);

			if ($result4->num_rows > 0) {
			    // output data of each row
			    while($row4 = $result4->fetch_assoc()) {
			        echo "  <p>Liga: " . $row4["nombre"]. "</p>\n";
			    }
			} else {
			    echo "  <p>Liga: Sin liga aun</p>\n";
			} 
			
			echo "  <p>"; 
			echo "<button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal". $row["id_equipo"]."\">Plantilla</button>\n"; 
			echo "\n"; 
			echo "<!-- Modal -->\n"; 
			echo "<div id=\"myModal". $row["id_equipo"]."\" class=\"modal fade error\" role=\"dialog\">\n"; 
			echo "  <div class=\"modal-dialog\">\n"; 
			echo "\n"; 
			echo "    <!-- Modal content-->\n"; 
			echo "    <div class=\"modal-content\">\n"; 
			echo "      <div class=\"modal-header\">\n";
			echo "        <button type=\"button\" class=\"close pull-right\" data-dismiss=\"modal\">&times;</button>\n"; 
			echo "      <div class=\"pull-right\">\n";
			echo "        <h5 >Presidente: ";
			$sqld = "SELECT nombre, apellido FROM usuarios WHERE id_usuario=(SELECT id_usuario FROM equipos WHERE id_equipo=". $row["id_equipo"].")";
			$resultd = $conn->query($sqld);

			if ($resultd->num_rows > 0) {
			    // output data of each row
			    while($rowd = $resultd->fetch_assoc()) {
			        echo "" . $rowd["nombre"]. " " . $rowd["apellido"]. "&nbsp;&nbsp; ";
			    }
			} else {
			    echo "0 results";
			}
			echo "  </h4>\n";
			echo "      </div>\n";
			
			echo "        <h4 class=\"modal-title\">Plantilla</h4>\n"; 

			echo "      </div>\n"; 
			echo "      <div class=\"modal-body\">\n"; 

			$sqli = "SELECT id_usuario, posicion, situacion, noti, numero FROM jugadores WHERE id_equipo=". $row["id_equipo"]." ORDER BY numero ASC";
			$resulti = $conn->query($sqli);
					 
					
			if ($resulti->num_rows > 0) {
				$sqlo = "SELECT nombre, escudo, pais, id_equipo, id_usuario FROM equipos WHERE id_equipo=". $row["id_equipo"]." ";
				$resulto = $conn->query($sqlo);

				if ($resulto->num_rows > 0) {
				    // output data of each row
				    while($rowo = $resulto->fetch_assoc()) {
				    	if ($rowo['escudo']) {
				    		echo "<div align=\"center\">";
							echo "<img src=".'users/'.$rowo['id_usuario'].'/'.$rowo['id_equipo'].'/'.$rowo['escudo']." height=\"60\" width=\"60\"></img>";
							echo "</div>";
						}else{
							echo "<div align=\"center\">";
							echo "<img src=\"default_team.png\" height=\"60\" width=\"60\"></img>";
							echo "</div>";
						}
				        echo "<h3 align=\"center\">". $rowo["nombre"]."</h3>";;
				    }
				} else {
				    echo "0 results";
				}
								
			    echo "<table class=\"table\">\n"; 
						echo "  <tr>\n"; 
						echo "    <th ></th>\n"; 
						echo "    <th >Nombre</th>\n"; 
						echo "    <th >Pos</th>\n"; 
						echo "    <th >Sit</th>\n"; 
						echo "    <th>Pais</th>\n"; 
						echo "  </tr>\n";
						
			    while($rowi = $resulti->fetch_assoc()) {
			       $sql9 = "SELECT nombre, apellido, pais, foto FROM usuarios WHERE id_usuario=". $rowi["id_usuario"]."";
					$result9 = $conn->query($sql9);

					if ($result9->num_rows > 0) {
					     
					    while($row9 = $result9->fetch_assoc()) {
					        echo "  <tr";
					    	if ($rowi["noti"]=='1') {
					    	 	echo " class=\"error5\">\n";
					    	 }else{
					    	 	echo " class=\"\">\n";
					    	 } 
					    	if ($row9["foto"]) {
					    		 echo "    <td align=\"right\"><img src=".'users/'.$rowi["id_usuario"].'/'.$row9["foto"]." class=\"img-responsive\" height=\"20\" width=\"20\"></td>\n"; 
					    	}else{
					    		 echo "    <td align=\"right\"><img src=\"default_user.png\" class=\"img-responsive\" height=\"20\" width=\"20\"></td>\n"; 
					    	}
					       
							
							if ($rowi["noti"]) {
								echo "<td ><span class=\"btn btn-warning btn-xs fa fa-warning fa-xs\" data-toggle=\"tooltip\" title=\"Solicitud Pendiente\"> </span> ". $row9["nombre"]." ". $row9["apellido"]."</td >";
							}else{ 
								if ($rowi["posicion"]=='DT') {
								 	echo"<td ><span class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" title=\"Director Tecnico\">DT </span> ". $row9["nombre"]." ". $row9["apellido"]."</td>\n";
								 } else{
								 	echo"<td ><span class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" title=\"Numero\">". $rowi["numero"]." </span> ". $row9["nombre"]." ". $row9["apellido"]."</td>\n";
								 }
								 
							}
							echo "    <td >". $rowi["posicion"]."</td>\n"; 
					
							if ($rowi["situacion"]==1) {
								echo "    <td >";
								echo "<span class=\"btn btn-warning btn-xs fa fa-square\" data-toggle=\"tooltip\" title=\"Tarjeta amarilla\"> </span>";
							    		
							    		echo "</td>\n";
							}elseif($rowi["situacion"]==2){
								echo "    <td >";
								echo "<span class=\"btn btn-danger btn-xs fa fa-square\" data-toggle=\"tooltip\" title=\"Tarjeta roja\"> </span>";
							    		
							    		echo "</td>\n";
							}elseif ($rowi["situacion"]==3) {
								echo "    <td >";
								echo "<span class=\"btn btn-info btn-xs fa fa-plus-square\" data-toggle=\"tooltip\" title=\"Lesionado\"> </span>";
							    		
							    		echo "</td>\n";
							}elseif ($rowi["situacion"]==4) {
								echo "    <td >";
								echo "<span class=\"btn btn-default btn-xs fa fa-exclamation\" data-toggle=\"tooltip\" title=\"Separado del equipo\"> </span>";
							    		
							    		echo "</td>\n";
							}else{
								echo "    <td >";
								echo "<span class=\"btn btn-success btn-xs fa fa-check-square\" data-toggle=\"tooltip\" title=\"Para Jugar\"> </span>";
							    		
							    		echo "</td>\n";
							} 
												
							echo "    <td ><img class=\"flag flag-".strtolower($row9["pais"])."\" height=\"100\" width=\"100\" /></td>\n"; 
							echo "  </tr>\n";
					    } 
					} else {
					    echo "0 results";
					} 
			    }echo "</table>\n";
			   
			} else {
			    echo "0 results";
			}
			echo "      </div>\n"; 
			echo "      <div class=\"modal-footer\">\n"; 
			echo "        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>\n"; 
			echo "      </div>\n"; 
			echo "    </div>\n"; 
			echo "\n"; 
			echo "  </div>\n"; 
			echo "</div>\n";
			echo "</p>\n";   
			echo "</div>\n";  
    	}else{
    		echo "<div class=\"btn btn-success active\">\n";

    		$sql2 = "SELECT nombre, escudo, pais, id_equipo, id_usuario FROM equipos WHERE id_equipo=". $row["id_equipo"]."";
			$result2 = $conn->query($sql2);


			if ($result2->num_rows > 0) {
			    // output data of each row
			    while($row2 = $result2->fetch_assoc()) {

			    	if ($row2['escudo']) {
						echo "<img src=".'users/'.$row2['id_usuario'].'/'.$row2['id_equipo'].'/'.$row2['escudo']." height=\"120\" width=\"120\"></img>";
					}else{
						echo "<img src=\"default_team.png\" height=\"120\" width=\"120\"></img>";
					}
			        echo "  <h2>" . $row2["nombre"]. "</h2>\n";
			    }
			} else {
			    echo "0 results";
			}
			
			echo "  <h5>". $row["posicion"]."</h5>\n";
			if ($row["id_liga"]=='56') {
				if ($row["posicion"]=='DT') {
					echo "  <p>";
					echo "<form action=\"meter_liga.php\" method=\"post\" >";
				            echo "<input type=\"hidden\" name=\"numerodeequipo\" value=".$row['id_equipo'].">";
				            echo " <button class=\"btn btn-danger btn-sm \">Buscar Liga</button>";
				            echo "</form>"; 
					echo"</p>\n";
				}
			}else{
				$sql4 = "SELECT nombre FROM ligas WHERE id_liga=". $row["id_liga"]."";
				$result4 = $conn->query($sql4);

				if ($result4->num_rows > 0) {
				    // output data of each row
				    while($row4 = $result4->fetch_assoc()) {

				        echo "  <p>Liga: " . $row4["nombre"]. "</p>\n";
				    }
				} else {
					echo "  <p>Liga: Sin liga aun</p>\n";
				    
				}
			} 
			 
			echo "  <p>"; 
			echo "<button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal". $row["id_equipo"]."\">Plantilla</button>\n"; 
			echo "\n"; 
			echo "<!-- Modal -->\n"; 
			echo "<div id=\"myModal". $row["id_equipo"]."\" class=\"modal fade error\" role=\"dialog\">\n"; 
			echo "  <div class=\"modal-dialog\">\n"; 
			echo "\n"; 
			echo "    <!-- Modal content-->\n"; 
			echo "    <div class=\"modal-content\">\n"; 
			echo "      <div class=\"modal-header\">\n"; 
			echo "        <button type=\"button\" class=\"close pull-right\" data-dismiss=\"modal\">&times;</button>\n"; 
			echo "      <div class=\"pull-right\">\n";
			echo "        <h5 >Presidente: ";
			$sqld = "SELECT nombre, apellido FROM usuarios WHERE id_usuario=(SELECT id_usuario FROM equipos WHERE id_equipo=". $row["id_equipo"].")";
			$resultd = $conn->query($sqld);

			if ($resultd->num_rows > 0) {
			    // output data of each row
			    while($rowd = $resultd->fetch_assoc()) {
			        echo "" . $rowd["nombre"]. " " . $rowd["apellido"]. "&nbsp;&nbsp; ";
			    }
			} else {
			    echo "0 results";
			}
			echo "  </h4>\n";
			echo "      </div>\n";
			echo "        <h4 class=\"modal-title\">Plantilla</h4>\n"; 
			echo "      </div>\n"; 
			echo "      <div class=\"modal-body\">\n"; 
			$sqli = "SELECT id_usuario, posicion, situacion, noti, numero FROM jugadores WHERE id_equipo=". $row["id_equipo"]."";
			$resulti = $conn->query($sqli);
					 
					
			if ($resulti->num_rows > 0) {
				$sqlo = "SELECT nombre, escudo, pais, id_equipo, id_usuario FROM equipos WHERE id_equipo=". $row["id_equipo"]."";
				$resulto = $conn->query($sqlo);

				if ($resulto->num_rows > 0) {
				    // output data of each row
				    while($rowo = $resulto->fetch_assoc()) {
				    	if ($rowo['escudo']) {
				    		echo "<div align=\"center\">";
							echo "<img src=".'users/'.$rowo['id_usuario'].'/'.$rowo['id_equipo'].'/'.$rowo['escudo']." height=\"60\" width=\"60\"></img>";
							echo "</div>";
						}else{
							echo "<div align=\"center\">";
							echo "<img src=\"default_team.png\" height=\"60\" width=\"60\"></img>";
							echo "</div>";
						}
				        echo "<h3 align=\"center\">". $rowo["nombre"]."</h3>";;
				    }
				} else {
				    echo "0 results";
				}
								
			    echo "<table class=\"table\">\n"; 
						echo "  <tr>\n"; 
						echo "    <th ></th>\n"; 
						echo "    <th >Nombre</th>\n"; 
						echo "    <th >Pos</th>\n"; 
						echo "    <th >Sit</th>\n"; 
						echo "    <th>Pais</th>\n"; 
						echo "  </tr>\n";
						
			    while($rowi = $resulti->fetch_assoc()) {
			       $sql9 = "SELECT nombre, apellido, pais, foto FROM usuarios WHERE id_usuario=". $rowi["id_usuario"]."";
					$result9 = $conn->query($sql9);

					if ($result9->num_rows > 0) {
					     
					    while($row9 = $result9->fetch_assoc()) {
					        echo "  <tr";
					    	if ($rowi["noti"]=='1') {
					    	 	echo " class=\"error5\">\n";
					    	 }else{
					    	 	echo " class=\"\">\n";
					    	 } 
					    	
					        if ($row9["foto"]) {
					    		 echo "    <td align=\"right\"><img src=".'users/'.$rowi["id_usuario"].'/'.$row9["foto"]." class=\"img-responsive\" height=\"20\" width=\"20\"></td>\n"; 
					    	}else{
					    		 echo "    <td align=\"right\"><img src=\"default_user.png\" class=\"img-responsive\" height=\"20\" width=\"20\"></td>\n"; 
					    	}
							
							if ($rowi["noti"]) {
								echo "<td ><span class=\"btn btn-warning btn-xs fa fa-warning fa-xs\" data-toggle=\"tooltip\" title=\"Solicitud Pendiente\"> </span> ". $row9["nombre"]." ". $row9["apellido"]."</td >";
							}else{
								if ($rowi["posicion"]=='DT') {
								  	echo"<td ><span class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" title=\"Director Tecnico\">DT</span> ". $row9["nombre"]." ". $row9["apellido"]."</td>\n"; 
								  } else{
								  	echo"<td ><span class=\"btn btn-default btn-xs\" data-toggle=\"tooltip\" title=\"Numero\">". $rowi["numero"]." </span> ". $row9["nombre"]." ". $row9["apellido"]."</td>\n"; 
								  } 
								
							}
							echo "    <td >". $rowi["posicion"]."</td>\n"; 
					
							if ($rowi["situacion"]==1) {
								echo "    <td >";
								echo "<span class=\"btn btn-warning btn-xs fa fa-square\" data-toggle=\"tooltip\" title=\"Tarjeta amarilla\"> </span>";
							    		
							    		echo "</td>\n";
							}elseif($rowi["situacion"]==2){
								echo "    <td >";
								echo "<span class=\"btn btn-danger btn-xs fa fa-square\" data-toggle=\"tooltip\" title=\"Tarjeta roja\"> </span>";
							    		
							    		echo "</td>\n";
							}elseif ($rowi["situacion"]==3) {
								echo "    <td >";
								echo "<span class=\"btn btn-info btn-xs fa fa-plus-square\" data-toggle=\"tooltip\" title=\"Lesionado\"> </span>";
							    		
							    		echo "</td>\n";
							}elseif ($rowi["situacion"]==4) {
								echo "    <td >";
								echo "<span class=\"btn btn-default btn-xs fa fa-exclamation\" data-toggle=\"tooltip\" title=\"Separado del equipo\"> </span>";
							    		
							    		echo "</td>\n";
							}else{
								echo "    <td >";
								echo "<span class=\"btn btn-success btn-xs fa fa-check-square\" data-toggle=\"tooltip\" title=\"Para Jugar\"> </span>";
							    		
							    		echo "</td>\n";
							} 
												
							echo "    <td ><img class=\"flag flag-".strtolower($row9["pais"])."\" height=\"100\" width=\"100\" /></td>\n"; 
							echo "  </tr>\n";
					    } 
					} else {
					    echo "0 results";
					} 
			    }echo "</table>\n";
			   
			} else {
			    echo "0 results";
			}
			echo "      </div>\n"; 
			echo "      <div class=\"modal-footer\">\n"; 
			echo "        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>\n"; 
			echo "      </div>\n"; 
			echo "    </div>\n"; 
			echo "\n"; 
			echo "  </div>\n"; 
			echo "</div>\n";
			echo "</p>\n"; 
			echo "</div>\n";

    	}
      	
	}

	}
} else {
    echo "<div class=\"jumbotron\">\n"; 
	echo "  <h1>No perteneces a ningun equipo.</h1>\n"; 

	
	echo "<a href=\"usuarios.php\" class=\"btn btn-primary btn-lg\" role=\"button\">Crea tu perfil de jugador</a>\n";
	echo "</div>\n";
}


$sql2 = "SELECT id_equipo, nombre, escudo, pais FROM equipos WHERE id_usuario='$actual'";
	$result2 = $conn->query($sql2);

	if ($result2->num_rows > 0) {
	    echo "<p ><h2 ><mark class=\"error4\">&nbsp;&nbsp;&nbsp;Administra tus equipos&nbsp;&nbsp;&nbsp;</mark></h2> </p>\n";
	    while($row2 = $result2->fetch_assoc()) {

	        echo "<div class=\"btn btn-primary active error3\">\n";
    		if ($row2['escudo']) {
				echo "<img src=".'users/'.$actual.'/'.$row2['id_equipo'].'/'.$row2['escudo']." height=\"120\" width=\"120\"></img>";
			}else{
				echo "<img src=\"default_team.png\" height=\"120\" width=\"120\"></img>";
			}
			echo "<br>";
			if ($row2["pais"]) {
						echo "<img class=\"flag flag-".strtolower($row2["pais"])."\" height=\"100\" width=\"100\" />";
					}
			echo "  <h2>". $row2["nombre"]."</h2>\n"; 

			echo "  <p>";
			echo "<form action=\"admin_team.php\" method=\"post\" >";
            echo "<input type=\"hidden\" name=\"iddeequipo\" value=".$row2['id_equipo'].">"; 
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

echo "</div>\n";


$conn->close();
 include_once("includes/footer.php");?>
