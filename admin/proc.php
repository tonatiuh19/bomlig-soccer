<?php
require_once("cn3.php");
session_start();
$actual = $_SESSION["usuario"];
$jugador = $_SESSION["jugador"];
//$numero = $_SESSION["numero"];

$q=$_POST['q'];
//$con=conexion();


$sql = "SELECT nombre, id_equipo, pais FROM equipos WHERE nombre LIKE '".$q."%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class=\"table\">\n"; 
	echo "  <tr>\n"; 
	echo "    <th ></th>\n";
	echo "    <th ></th>\n"; 
	echo "    <th ></th>\n"; 
	echo "  </tr>\n";
    while($row = $result->fetch_assoc()) {
        echo "  <tr>\n";
        echo "    <td ><big>  <img class=\"flag flag-".strtolower($row['pais'])."\" height=\"10\" width=\"10\" /></big></td>\n"; 
		echo "    <td >".$row["nombre"]."</td>\n";
		echo "<td>"; 
		//echo "<form action=\"solicitud_j.php\" method=\"post\" >";
            //echo "<input type=\"hidden\" name=\"numerodetable\" value=".$row['id_equipo'].">";
            
            //echo " <button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
		$sql2 = "SELECT id_equipo, noti FROM jugadores WHERE id_usuario='$actual' AND id_equipo=".$row["id_equipo"]." ";
		$result2 = $conn->query($sql2);

		if ($result2->num_rows > 0) {
		    // output data of each row
		    while($row2 = $result2->fetch_assoc()) {
		        
		        if ($row2['noti']==1) {
		        	echo "<span class=\"btn btn-warning btn-xs\">Solicitud enviada</span>";
		        }else{
		        	echo "<span class=\"btn btn-primary btn-xs\">Ya pertences a la plantilla</span>";
		        }
		        
		    }
		} else {
		    echo "<a href=\"meter2.php?varname=".$row['id_equipo']."\" class=\"btn btn-success btn-xs\">Solicitar Unirte</a>\n";


		}
            
          	
            //echo "</form>"; 
            echo "</td>";
		echo "  </tr>\n";
    }
    echo "</table>\n";
} else {
    echo "0 results";
}
$conn->close();





?>