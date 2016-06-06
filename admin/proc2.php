<?php
require_once("cn3.php");
session_start();
$actual = $_SESSION["usuario"];
$equipo = $_SESSION["equipo"];
//$numero = $_SESSION["numero"];

$q=$_POST['q'];
//$con=conexion();


$sql = "SELECT nombre, id_liga, pais FROM ligas WHERE nombre LIKE '".$q."%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class=\"table\">\n"; 
	echo "  <tr>\n"; 
	echo "    <th ></th>\n";
	echo "    <th ></th>\n"; 
	echo "    <th ></th>\n"; 
	echo "  </tr>\n";
    while($row = $result->fetch_assoc()) {
    	if ($row["id_liga"]=='56') {
    		# code...
    	}else{
        echo "  <tr>\n";
        echo "    <td ><big>  <img class=\"flag flag-".strtolower($row['pais'])."\" height=\"10\" width=\"10\" /></big></td>\n"; 
		echo "    <td >".$row["nombre"]."</td>\n";
		echo "<td>"; 
		//echo "<form action=\"solicitud_j.php\" method=\"post\" >";
            //echo "<input type=\"hidden\" name=\"numerodetable\" value=".$row['id_equipo'].">";
            
            //echo " <button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
		$sql2 = "SELECT id_equipo, confirmado, id_liga FROM tablas WHERE id_equipo='$equipo' AND id_liga=".$row["id_liga"]."";
		$result2 = $conn->query($sql2);

		if ($result2->num_rows > 0) {
		    // output data of each row
		    while($row2 = $result2->fetch_assoc()) {

		       
		        if ($row2['confirmado']=='2') {
		        	echo "<span class=\"btn btn-warning btn-xs\">Solicitud enviada</span>";
		        }else if($row2['confirmado']=='1'){
		        	echo "<span class=\"btn btn-primary btn-xs\">El equipo es miembro</span>";
		        }
		        
		    }
		} else {
		    echo "<a href=\"meter3.php?varname=".$row["id_liga"]."\" class=\"btn btn-success btn-xs\">Solicitar Unirte</a>\n";


		}
            
          	
            //echo "</form>"; 
            echo "</td>";
		echo "  </tr>\n";}
    }
    echo "</table>\n";
} else {
    echo "0 results";
}
$conn->close();





?>