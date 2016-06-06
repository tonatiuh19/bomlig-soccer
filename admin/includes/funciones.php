<?php

		
	require_once("../cn.php");

	$sql_productos = "SELECT * FROM productos";
	$sql_usuarios = "SELECT * FROM usuarios";


	function get_productos(){
		

		$sql = "SELECT ligas.id_liga, ligas.nombre, ligas.tipo, ligas.jornadas, ligas.id_usuario FROM ligas ";
		
		

		$consulta = mysql_query($sql);


		if(mysql_num_rows($consulta)>0){

			while ($row = mysql_fetch_assoc($consulta)) {
				$datos[] = $row;
			}

		}else{
			$datos = NULL;
		}

		return $datos;
	}

	



	function usuarios(){
		
		$sql = "SELECT * FROM usuarios";
		
		$consulta = mysql_query($sql);

		$numero_registros = mysql_num_rows($consulta);

		if($numero_registros>0){

			while ($row = mysql_fetch_assoc($consulta)) {
				$datos[] = $row;
			}
			
		}else{

			$datos = NULL;
		}
		return $datos;
	}


	function guardar_p($tipo,$nombre,$pais,$id_usuario){

		// INSERT INTO NOMBRE_TABLA (CAMPO1, COMP2,COMP3) VALUES ('valores','valores','valores','valores','valores','valores');

		$sql = "INSERT INTO ligas( tipo, nombre, pais, id_usuario)VALUES ('$tipo','$nombre','$pais','$id_usuario')";

		$consulta = mysql_query($sql);

		if($consulta == TRUE){
			return mysql_insert_id();
		}else{
			return FALSE;
		}

	}

	/*function img($nombre_img, $id_producto){

		$sql = "INSERT INTO img (img, idproducto) VALUES ('$nombre_img',$id_producto)";
	
		
		$consulta = mysql_query($sql);

		if($consulta==TRUE){
			return TRUE;
		}else{
			return FALSE;
		}
	}*/


	/*

		mysql_query(query);
		mysql_fetch_assoc(result);
		mysql_fetch_array(result);
		mysql_real_escape_string(unescaped_string);
		mysql_insert_id();
		mysql_num_rows(result);
		
		*/











?>