<?php

	$hostname_encuesta = "localhost";
	$database_encuesta = "fut";
	$username_encuesta = "root";
	$password_encuesta = "";
	$cn_encuesta = mysql_connect($hostname_encuesta, $username_encuesta, $password_encuesta) or trigger_error(mysql_error(),E_USER_ERROR);

		if($cn_encuesta){
			mysql_select_db($database_encuesta);
			mysql_set_charset('utf8');

		}
?>
