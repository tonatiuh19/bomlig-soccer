<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bienvenido</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
                <div class="container">
                  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                      <div class="container">
                          <!-- Brand and toggle get grouped for better mobile display -->
                          <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand" href="index.php"><img src="fonts/img/logo2.png" alt="gOmlig" ></a>
                          </div>
                          <!-- Collect the nav links, forms, and other content for toggling -->

                          <!-- /.navbar-collapse -->
                      </div>
                      <!-- /.container -->
                  </nav>
                    <div class="row">
                        <div class="col-sm-5">

                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Entrar</h3>
	                            		<p>Ingresa tu Email y Contraseña:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form  action="login.php" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Email</label>
				                        	<input type="text" name="email" placeholder="Email" class="form-username form-control" id="email">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Contraseña</label>
				                        	<input type="password" name="pwd" placeholder="Contraseña" class="form-password form-control" id="pwd">
				                        </div>
				                        <button type="submit" class="btn">Entrar</button>
				                    </form>
			                    </div>
		                    </div>

		                	<div class="social-login">
	                        	<h3>...or login with:</h3>
	                        	<div class="social-login-buttons">
		                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
		                        		<i class="fa fa-facebook"></i> Facebook
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
		                        		<i class="fa fa-twitter"></i> Twitter
		                        	</a>
		                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
		                        		<i class="fa fa-google-plus"></i> Google Plus
		                        	</a>
	                        	</div>
	                        </div>

                        </div>

                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>

                        <div class="col-sm-6">

                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Abre una Cuenta</h3>
	                            		<p>Es gratis y siempre lo sera</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="admin/nuevo_usuario.php" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="col-md-4 control-label" for="selectbasic">Nombre</label>
				                        	<input type="text" name="nombre" placeholder="Escribe tu nombre" class="form-first-name form-control" id="nombre">
				                        </div>
				                        <div class="form-group">
				                        	<label class="col-md-4 control-label" for="selectbasic">Apellido</label>
				                        	<input type="text" name="apellido" placeholder="Escribe tu Apellido" class="form-last-name form-control" id="apellido">
				                        </div>
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="selectbasic">Pais</label>
                                  <div class="col-md-4">
                                    <select id="pais" name="pais" class="form-control" required="true">
                                		<option value="AF">Afganistán</option>
                                		<option value="AL">Albania</option>
                                		<option value="DE">Alemania</option>
                                		<option value="AD">Andorra</option>
                                		<option value="AO">Angola</option>
                                		<option value="AI">Anguilla</option>
                                		<option value="AQ">Antártida</option>
                                		<option value="AG">Antigua y Barbuda</option>
                                		<option value="AN">Antillas Holandesas</option>
                                		<option value="SA">Arabia Saudí</option>
                                		<option value="DZ">Argelia</option>
                                		<option value="AR">Argentina</option>
                                		<option value="AM">Armenia</option>
                                		<option value="AW">Aruba</option>
                                		<option value="AU">Australia</option>
                                		<option value="AT">Austria</option>
                                		<option value="AZ">Azerbaiyán</option>
                                		<option value="BS">Bahamas</option>
                                		<option value="BH">Bahrein</option>
                                		<option value="BD">Bangladesh</option>
                                		<option value="BB">Barbados</option>
                                		<option value="BE">Bélgica</option>
                                		<option value="BZ">Belice</option>
                                		<option value="BJ">Benin</option>
                                		<option value="BM">Bermudas</option>
                                		<option value="BY">Bielorrusia</option>
                                		<option value="MM">Birmania</option>
                                		<option value="BO">Bolivia</option>
                                		<option value="BA">Bosnia y Herzegovina</option>
                                		<option value="BW">Botswana</option>
                                		<option value="BR">Brasil</option>
                                		<option value="BN">Brunei</option>
                                		<option value="BG">Bulgaria</option>
                                		<option value="BF">Burkina Faso</option>
                                		<option value="BI">Burundi</option>
                                		<option value="BT">Bután</option>
                                		<option value="CV">Cabo Verde</option>
                                		<option value="KH">Camboya</option>
                                		<option value="CM">Camerún</option>
                                		<option value="CA">Canadá</option>
                                		<option value="TD">Chad</option>
                                		<option value="CL">Chile</option>
                                		<option value="CN">China</option>
                                		<option value="CY">Chipre</option>
                                		<option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                		<option value="CO">Colombia</option>
                                		<option value="KM">Comores</option>
                                		<option value="CG">Congo</option>
                                		<option value="CD">Congo, República Democrática del</option>
                                		<option value="KR">Corea</option>
                                		<option value="KP">Corea del Norte</option>
                                		<option value="CI">Costa de Marfíl</option>
                                		<option value="CR">Costa Rica</option>
                                		<option value="HR">Croacia (Hrvatska)</option>
                                		<option value="CU">Cuba</option>
                                		<option value="DK">Dinamarca</option>
                                		<option value="DJ">Djibouti</option>
                                		<option value="DM">Dominica</option>
                                		<option value="EC">Ecuador</option>
                                		<option value="EG">Egipto</option>
                                		<option value="SV">El Salvador</option>
                                		<option value="AE">Emiratos Árabes Unidos</option>
                                		<option value="ER">Eritrea</option>
                                		<option value="SI">Eslovenia</option>
                                		<option value="ES">España</option>
                                		<option value="US">Estados Unidos</option>
                                		<option value="EE">Estonia</option>
                                		<option value="ET">Etiopía</option>
                                		<option value="FJ">Fiji</option>
                                		<option value="PH">Filipinas</option>
                                		<option value="FI">Finlandia</option>
                                		<option value="FR">Francia</option>
                                		<option value="GA">Gabón</option>
                                		<option value="GM">Gambia</option>
                                		<option value="GE">Georgia</option>
                                		<option value="GH">Ghana</option>
                                		<option value="GI">Gibraltar</option>
                                		<option value="GD">Granada</option>
                                		<option value="GR">Grecia</option>
                                		<option value="GL">Groenlandia</option>
                                		<option value="GP">Guadalupe</option>
                                		<option value="GU">Guam</option>
                                		<option value="GT">Guatemala</option>
                                		<option value="GY">Guayana</option>
                                		<option value="GF">Guayana Francesa</option>
                                		<option value="GN">Guinea</option>
                                		<option value="GQ">Guinea Ecuatorial</option>
                                		<option value="GW">Guinea-Bissau</option>
                                		<option value="HT">Haití</option>
                                		<option value="HN">Honduras</option>
                                		<option value="HU">Hungría</option>
                                		<option value="IN">India</option>
                                		<option value="ID">Indonesia</option>
                                		<option value="IQ">Irak</option>
                                		<option value="IR">Irán</option>
                                		<option value="IE">Irlanda</option>
                                		<option value="BV">Isla Bouvet</option>
                                		<option value="CX">Isla de Christmas</option>
                                		<option value="IS">Islandia</option>
                                		<option value="KY">Islas Caimán</option>
                                		<option value="CK">Islas Cook</option>
                                		<option value="CC">Islas de Cocos o Keeling</option>
                                		<option value="FO">Islas Faroe</option>
                                		<option value="HM">Islas Heard y McDonald</option>
                                		<option value="FK">Islas Malvinas</option>
                                		<option value="MP">Islas Marianas del Norte</option>
                                		<option value="MH">Islas Marshall</option>
                                		<option value="UM">Islas menores de Estados Unidos</option>
                                		<option value="PW">Islas Palau</option>
                                		<option value="SB">Islas Salomón</option>
                                		<option value="SJ">Islas Svalbard y Jan Mayen</option>
                                		<option value="TK">Islas Tokelau</option>
                                		<option value="TC">Islas Turks y Caicos</option>
                                		<option value="VI">Islas Vírgenes (EEUU)</option>
                                		<option value="VG">Islas Vírgenes (Reino Unido)</option>
                                		<option value="WF">Islas Wallis y Futuna</option>
                                		<option value="IL">Israel</option>
                                		<option value="IT">Italia</option>
                                		<option value="JM">Jamaica</option>
                                		<option value="JP">Japón</option>
                                		<option value="JO">Jordania</option>
                                		<option value="KZ">Kazajistán</option>
                                		<option value="KE">Kenia</option>
                                		<option value="KG">Kirguizistán</option>
                                		<option value="KI">Kiribati</option>
                                		<option value="KW">Kuwait</option>
                                		<option value="LA">Laos</option>
                                		<option value="LS">Lesotho</option>
                                		<option value="LV">Letonia</option>
                                		<option value="LB">Líbano</option>
                                		<option value="LR">Liberia</option>
                                		<option value="LY">Libia</option>
                                		<option value="LI">Liechtenstein</option>
                                		<option value="LT">Lituania</option>
                                		<option value="LU">Luxemburgo</option>
                                		<option value="MK">Macedonia, Ex-República Yugoslava de</option>
                                		<option value="MG">Madagascar</option>
                                		<option value="MY">Malasia</option>
                                		<option value="MW">Malawi</option>
                                		<option value="MV">Maldivas</option>
                                		<option value="ML">Malí</option>
                                		<option value="MT">Malta</option>
                                		<option value="MA">Marruecos</option>
                                		<option value="MQ">Martinica</option>
                                		<option value="MU">Mauricio</option>
                                		<option value="MR">Mauritania</option>
                                		<option value="YT">Mayotte</option>
                                		<option value="MX" selected>México</option>
                                		<option value="FM">Micronesia</option>
                                		<option value="MD">Moldavia</option>
                                		<option value="MC">Mónaco</option>
                                		<option value="MN">Mongolia</option>
                                		<option value="MS">Montserrat</option>
                                		<option value="MZ">Mozambique</option>
                                		<option value="NA">Namibia</option>
                                		<option value="NR">Nauru</option>
                                		<option value="NP">Nepal</option>
                                		<option value="NI">Nicaragua</option>
                                		<option value="NE">Níger</option>
                                		<option value="NG">Nigeria</option>
                                		<option value="NU">Niue</option>
                                		<option value="NF">Norfolk</option>
                                		<option value="NO">Noruega</option>
                                		<option value="NC">Nueva Caledonia</option>
                                		<option value="NZ">Nueva Zelanda</option>
                                		<option value="OM">Omán</option>
                                		<option value="NL">Países Bajos</option>
                                		<option value="PA">Panamá</option>
                                		<option value="PG">Papúa Nueva Guinea</option>
                                		<option value="PK">Paquistán</option>
                                		<option value="PY">Paraguay</option>
                                		<option value="PE">Perú</option>
                                		<option value="PN">Pitcairn</option>
                                		<option value="PF">Polinesia Francesa</option>
                                		<option value="PL">Polonia</option>
                                		<option value="PT">Portugal</option>
                                		<option value="PR">Puerto Rico</option>
                                		<option value="QA">Qatar</option>
                                		<option value="UK">Reino Unido</option>
                                		<option value="CF">República Centroafricana</option>
                                		<option value="CZ">República Checa</option>
                                		<option value="ZA">República de Sudáfrica</option>
                                		<option value="DO">República Dominicana</option>
                                		<option value="SK">República Eslovaca</option>
                                		<option value="RE">Reunión</option>
                                		<option value="RW">Ruanda</option>
                                		<option value="RO">Rumania</option>
                                		<option value="RU">Rusia</option>
                                		<option value="EH">Sahara Occidental</option>
                                		<option value="KN">Saint Kitts y Nevis</option>
                                		<option value="WS">Samoa</option>
                                		<option value="AS">Samoa Americana</option>
                                		<option value="SM">San Marino</option>
                                		<option value="VC">San Vicente y Granadinas</option>
                                		<option value="SH">Santa Helena</option>
                                		<option value="LC">Santa Lucía</option>
                                		<option value="ST">Santo Tomé y Príncipe</option>
                                		<option value="SN">Senegal</option>
                                		<option value="SC">Seychelles</option>
                                		<option value="SL">Sierra Leona</option>
                                		<option value="SG">Singapur</option>
                                		<option value="SY">Siria</option>
                                		<option value="SO">Somalia</option>
                                		<option value="LK">Sri Lanka</option>
                                		<option value="PM">St Pierre y Miquelon</option>
                                		<option value="SZ">Suazilandia</option>
                                		<option value="SD">Sudán</option>
                                		<option value="SE">Suecia</option>
                                		<option value="CH">Suiza</option>
                                		<option value="SR">Surinam</option>
                                		<option value="TH">Tailandia</option>
                                		<option value="TW">Taiwán</option>
                                		<option value="TZ">Tanzania</option>
                                		<option value="TJ">Tayikistán</option>
                                		<option value="TF">Territorios franceses del Sur</option>
                                		<option value="TP">Timor Oriental</option>
                                		<option value="TG">Togo</option>
                                		<option value="TO">Tonga</option>
                                		<option value="TT">Trinidad y Tobago</option>
                                		<option value="TN">Túnez</option>
                                		<option value="TM">Turkmenistán</option>
                                		<option value="TR">Turquía</option>
                                		<option value="TV">Tuvalu</option>
                                		<option value="UA">Ucrania</option>
                                		<option value="UG">Uganda</option>
                                		<option value="UY">Uruguay</option>
                                		<option value="UZ">Uzbekistán</option>
                                		<option value="VU">Vanuatu</option>
                                		<option value="VE">Venezuela</option>
                                		<option value="VN">Vietnam</option>
                                		<option value="YE">Yemen</option>
                                		<option value="YU">Yugoslavia</option>
                                		<option value="ZM">Zambia</option>
                                		<option value="ZW">Zimbabue</option>
                                	</select>
                                  </div>
                                </div><br>

				                        <div class="form-group"><br>

				                        	<label class="col-md-4 control-label" for="selectbasic">Email</label>
				                        	<input type="text" name="email" placeholder="Escribe tu correo" class="form-email form-control" id="email">
				                        </div>
                                <div class="form-group">
				                        	<label class="col-md-4 control-label" for="selectbasic">Contraseña</label>
				                        	<input type="password" name="pass" placeholder="Escribe una contraseña" class="form-email form-control" id="pass">
				                        </div>
                                <div class="form-group">
				                        	<input type="password" name="pass2" placeholder="Escribela una vez mas" class="form-email form-control" id="pass2">
				                        </div>

				                        <button type="submit" class="btn">Abir mi cuenta</button>
				                    </form>
			                    </div>
                        	</div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">

        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>

        			</div>

        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
