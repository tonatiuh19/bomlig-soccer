
<?php include_once("includes/header.php");


$liga = $_SESSION['liga'];
require_once("cn2.php");
if($_SERVER['REQUEST_METHOD']=="POST"){


		$numerodeliga			= $_POST['numerodeliga'];


$actual = $_SESSION['usuario'];
$sql = "SELECT id_tabla, id_liga, id_torneo, id_equipo, jj, jg, je, jp, gf, gc, dif, pts, confirmado FROM tablas WHERE id_liga='$numerodeliga' ORDER BY pts DESC";
$result = $conn->query($sql);
$espacio = " ";
echo "<div class=\"row\">\n"; 
echo "        <div class=\"col-sm-4\"><a href=\"productos.php\" class=\"btn btn-success btn-sm\" role=\"button\"><i class=\"fa fa-angle-left\"> Regresar</i></a></div>\n"; 
echo "        <div class=\"col-sm-4\" align=\"center\">"; 
if ($liga >= 1) {
	echo "<a href=\"productos.php\" class=\"btn btn-warning btn-sm\" role=\"button\"><i class=\"fa fa-plus-circle\"> Añadir jornada</i></a>".$espacio."<a href=\"productos.php\" class=\"btn btn-warning btn-sm\" role=\"button\"><i class=\"fa fa-plus-square\"> Añadir encuentro</i></a>";
}
 
echo "</div>\n"; 
echo "        <div class=\"col-sm-4\" align=\"center\">"; 
if ($liga >= 1) {
	echo "<a href=\"productos.php\" class=\"btn btn-primary btn-sm\" role=\"button\"><i class=\"fa fa-plus-square\"> Añadir equipo</i></a>"; 
}

echo "</div>\n"; 
echo "    </div>\n";
echo "\n";

if ($result->num_rows > 0) {
		$sql2 = "SELECT nombre, pais, logo FROM ligas WHERE id_liga='$numerodeliga'";
		$result2 = $conn->query($sql2);

		if ($result2->num_rows > 0) {
		    // output data of each row
		    while($row2= $result2->fetch_assoc()) {
		    	


		    	echo "<div class=\"row\">\n"; 
				echo "        <div class=\"col-sm-9\" ><h2> <img src=".'users/'.$actual.'/'.$row2['nombre'].'/'.$row2['logo']." height=\"50\" width=\"50\"> </img><big>".$row2['nombre']."</big></h2></div>\n"; 
				echo "        <div class=\"col-sm-3\" align=\"right\"><big>  <img class=\"flag flag-".strtolower($row2['pais'])."\" height=\"10\" width=\"10\" /></big></div>\n"; 
				echo "    </div>\n";
		    	
		    	

		

		    	
		    }
		} else {
		    echo "0 results";
		}

	 echo "<table class=\"table\">";
                echo "<thead >";
                echo "<tr>";
                    
                     echo "<th align=\"center\">Posicion</th>";
                    echo "<th></th>";
                    echo "<th>Nombre</th>";
                    echo "<th>JJ</th>";
                    echo "<th>JG</th>";
                    echo "<th>JE</th>";
                    echo "<th>JP</th>";
                    echo "<th>GF</th>";
                    echo "<th>GC</th>";
                    echo "<th>DIF</th>";
                    echo "<th>Puntos</th>";
                    if ($liga >= 1) {
                    	echo "<th>Editar</th>";
                    }
                    
                    

                       
                    
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                $num=0;
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
    	
    	$num = $num +1;

         echo "<tr >"; 
                            	
    							echo "<td align=\"center\">".$num."</td> "; 
                                echo "<td> "; 
                                $sql4 = "SELECT escudo, nombre FROM equipos WHERE id_equipo=".$row['id_equipo']."";
								$result4 = $conn->query($sql4);

								if ($result4->num_rows > 0) {
								    // output data of each row
								    while($row4 = $result4->fetch_assoc()) {
								    	if ($row4['escudo']) {
								    		echo "<img src=".'users/'.$actual.'/'.$row4['nombre'].'/'.$row4['escudo']." height=\"10\" width=\"10\"></img>";
								    	}else{
								    		echo "<img src=\"default.png\" height=\"20\" width=\"20\"></img>";

								    	}
								        
								    }
								} else {
								    echo "<img src=\"default2.png\" height=\"100\" width=\"100\"></img>";
								}
							
                               echo " </td>";
                            
                            echo "<td>";
                            $sql5 = "SELECT nombre FROM equipos WHERE id_equipo=".$row['id_equipo']."";
								$result5 = $conn->query($sql5);

								if ($result5->num_rows > 0) {
								    // output data of each row
								    while($row5 = $result5->fetch_assoc()) {
								        echo $row5['nombre'];
								    }
								} else {
								    echo "";
								}

                            echo "</td>";
                            echo "<td>".$row['jj']."</td>";
                            echo "<td>".$row['jg']."</td>";
                            echo "<td>".$row['je']."</td>";
                            echo "<td>".$row['jp']."</td>";
                            echo "<td>".$row['gf']."</td>";
                            echo "<td>".$row['gc']."</td>";
                            echo "<td>".$row['dif']."</td>";
                            echo "<td>".$row['pts']."</td>";
                            if ($liga >= 1) {
                            	echo "<td>";
                            echo "<form action=\"eliminar.php\" method=\"post\" onsubmit=\"return confirm('¿Estas Seguro?');\">";
            echo "<input type=\"hidden\" name=\"numerodetable\" value=".$row['id_tabla'].">";
            echo " <button class=\"btn btn-primary btn-xs\"><span class=\"glyphicon glyphicon-pencil\"></span></button>";
            echo "</form>"; echo "</td>";
                            }
                            
                            

                  
                                echo "</tr>";
                    
                

    }

    echo "</tbody>";

            echo"</table>";


} else {
   			echo "<div class=\"jumbotron\">\n"; 
    		echo "<span class=\"fa fa-exclamation-triangle fa-5x\"></span>";
			echo "  <h1>¡Esta liga no tiene equipos!</h1>\n"; 
			echo "  <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Añadelos ahora</a>\n"; 
			echo "  <a class=\"btn btn-warning btn-lg\" href=\"#\" role=\"button\">Crea uno</a></p>\n"; 
			echo "</div>\n";
}

$conn->close();


}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
		    
		    window.location.href='productos.php';
		    </SCRIPT>");
}

include_once("includes/footer.php");

?>