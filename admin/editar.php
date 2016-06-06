<?php
require_once("includes/header.php"); 

	require_once("includes/funciones.php");

	if($_SERVER['REQUEST_METHOD']=="POST"){


		$numerodeliga			= $_POST['numerodeliga'];
		

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "fut";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT ligas.id_liga, ligas.nombre, ligas.tipo, ligas.jornadas, ligas.id_usuario, ligas.pais FROM ligas WHERE id_liga='$numerodeliga'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		         "id: " . $row["id_liga"]. " - Name: " . $row["nombre"]. " " . $row["jornadas"]. "<br>";
		         $row["tipo"];

		   

		        echo "<form class=\"form-horizontal\" action=\"guardar_editar.php\" method=\"POST\" enctype=\"multipart/form-data\" onsubmit=\"return marcado();\" data-toggle=\"validator\">\n"; 
				echo "<fieldset>\n"; 
				echo "\n"; 
				echo "<!-- Form Name -->\n"; 
				echo "<legend>".$row["nombre"]."</legend>\n"; 

				echo "\n"; 
				echo "<input type=\"hidden\" name=\"numdeliga\" value=".$numerodeliga."> <p></p>";
				
				echo "<!-- Select Basic -->\n"; 
				echo "<div class=\"form-group\">\n"; 
				echo "  <label class=\"col-md-4 control-label\" for=\"selectbasic\">Tipo de Liga</label>\n "; 
				echo "  <div class=\"col-md-4\">\n"; 
				echo "    <select id=\"tipo\" name=\"tipo\" class=\"form-control\" value=". $row["tipo"]." required>\n";
				echo "		<option disabled selected> -- ". $row["tipo"]." -- </option>\n"; 
				echo "      <option value=\"1\" >Futbol Soccer</option >\n"; 
				echo "      <option value=\"2\"	>Basketball</option>\n"; 
				echo "      <option value=\"3\" >Volleyball</option>\n"; 
				echo "      <option value=\"4\" >Futbol Americano</option>\n"; 
				echo "      <option value=\"5\" >Futbol 7</option>\n"; 
				echo "      <option value=\"6\" >Futbol Rapido</option>\n"; 
				echo "    </select>\n"; 
				echo "<span class=\"input-group-addon\">". $row["tipo"]."</span>\n";
				echo "  </div>\n"; 
				echo "</div>\n"; 
				echo "\n"; 
				echo "<!-- Text input-->\n"; 
				echo "<div class=\"form-group\">\n"; 
				echo "  <label class=\"col-md-4 control-label\" for=\"textinput\">Nombre de la Liga</label>  \n"; 
				echo "  <div class=\"col-md-5\">\n"; 
				echo "  <input id=\"nombre\" name=\"nombre\" type=\"text\" placeholder=\"¿Como se llama?\" class=\"form-control input-md\" required=\"\" value=". $row["nombre"]." required>\n"; 
				echo "    \n"; 
				echo "  </div>\n"; 
				echo "</div>\n"; 
				echo "\n"; 
				echo "<!-- Select Basic -->\n"; 
				echo "<div class=\"form-group\">\n"; 
				echo "  <label class=\"col-md-4 control-label\" for=\"selectbasic\">Pais</label>\n"; 
				echo "  <div class=\"col-md-4\">\n"; 
				echo "    <select id=\"pais\" name=\"pais\" class=\"form-control\" value=". $row["pais"]." required>\n"; 
				echo "		<option disabled selected> -- ". $row["pais"]." -- </option>\n";
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
				echo "<span class=\"input-group-addon\">". $row["pais"]."</span>\n";
				echo "  </div>\n"; 
				echo "</div>\n"; 
				echo "\n"; 
				echo "\n"; 
				echo "\n"; 
				echo "<!-- File Button --> \n"; 
				echo "<div class=\"form-group\">\n"; 
				echo "  <label class=\"col-md-4 control-label\" for=\"filebutton\">Logo de tu liga (Si es que hubiese).</label>\n"; 
				echo "  <div class=\"col-md-4\">\n"; 
				echo "    <input name=\"foto\" id=\"foto\" class=\"input-file\" type=\"file\">\n"; 
				echo "<span class=\"input-group-addon\">append</span>\n";
				echo "  </div>\n"; 
				echo "</div>\n"; 
				echo "\n"; 
				
				echo "\n"; 
				echo "<div class=\"col-md-4\">\n"; 
				echo "	<button type=\"submit\" class=\"btn btn-primary\">Actualizar</button>\n"; 
				echo "</div>\n"; 
				echo "\n"; 
				echo "</fieldset>\n"; 
				echo "</form>\n";
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();

	


		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		header("location: productos2.php");
	}

	//enctype="multipart/form-data"
require_once("includes/footer.php"); 
	
?>