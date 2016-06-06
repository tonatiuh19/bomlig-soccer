<?php include_once("includes/header.php");

require_once("cn2.php");


 $actual = $_SESSION['usuario'];
 $liga = $_SESSION['liga'];

 

 

 $sql = "SELECT id_liga FROM ligas WHERE id_liga=(SELECT id_liga FROM equipos WHERE id_equipo=(SELECT id_equipo FROM jugadores WHERE id_usuario='$actual')) OR id_usuario='$actual';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class=\"row\">\n"; 
echo "            <div class=\"col-lg-12\">\n"; 
echo "                <h2 class=\"page-header\">Mis ligas</h2>\n"; 
echo "            </div>\n"; 
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sql3 = "SELECT nombre, pais, logo, id_liga FROM ligas WHERE id_liga=".$row['id_liga']."";
        $result3 = $conn->query($sql3);

        if ($result3->num_rows > 0) {
            // output data of each row
            while($row3 = $result3->fetch_assoc()) {
                echo "            <div class=\"col-lg-4 col-sm-6 text-center thumbnail panel-primary\">\n";
                if ($row3['logo']) {
                     echo "<td> <img src=".'users/'.$actual.'/'.$row3['nombre'].'/'.$row3['logo']." height=\"200\" width=\"200\"></td>";
                }else{
                     echo "<img class=\"img-responsive img-center\" src=\"default.png\" height=\"200\" width=\"200\"> ";
                }
                echo "                <h3>". $row3["nombre"]."\n"; 
                echo "    <div class=\"row\">\n"; 
                echo "        <div class=\"col-sm-4\">"; 
                if ($liga >= 1) {
                   echo "<form action=\"editar.php\" method=\"post\" >";
                    echo "<input type=\"hidden\" name=\"numerodeliga\" value=".$row3['id_liga'].">";
                    echo " <button class=\"btn btn-warning \"><span class=\"glyphicon glyphicon-pencil\"> Editar</span></button>";
                    echo "</form>";}
                echo "</div>\n";
                 
                echo "        <div class=\"col-sm-4\">"; 
                echo "<form action=\"tabla.php\" method=\"post\">";
                    echo "<input type=\"hidden\" name=\"numerodeliga\" value=".$row3['id_liga'].">";
                    echo " <button class=\"btn btn-primary \"><span class=\"glyphicon glyphicon-list-alt\"> Tabla</span></button>";
                echo "</form>";

                echo "</div>\n"; 
                
                echo "        <div class=\"col-sm-4\">";
                if ($liga >= 1) {
                echo "<form action=\"eliminar.php\" method=\"post\" onsubmit=\"return confirm('¿Estas Seguro?');\">";
                    echo "<input type=\"hidden\" name=\"numerodeliga\" value=".$row3['id_liga'].">";
                    echo " <button class=\"btn btn-danger \"><span class=\"glyphicon glyphicon-trash\"></span></button>";
                    echo "</form>"; }
                echo "</div>\n"; 
                
                echo "    </div>\n";           
                        echo "            </div>\n"; 
                        echo "<p> </p>";
            }
        } else {
            echo "<div class=\"jumbotron\">\n"; 
            echo "<span class=\"fa fa-exclamation-triangle fa-5x\"></span>";
            echo "  <h1>¡Aun no perteneces a ninguna Liga!</h1>\n"; 
            echo "  <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Unete</a>\n"; 
            echo "  <a class=\"btn btn-warning btn-lg\" href=\"#\" role=\"button\">Crea una</a></p>\n"; 
            echo "</div>\n";
        }
        
    }
} else {
    echo "<div class=\"jumbotron\">\n"; 
            echo "<span class=\"fa fa-exclamation-triangle fa-5x\"></span>";
            echo "  <h1>¡Aun no perteneces a ninguna Liga!</h1>\n"; 
            echo "  <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Unete</a>\n"; 
            echo "  <a class=\"btn btn-warning btn-lg\" href=\"#\" role=\"button\">Crea una</a></p>\n"; 
            echo "</div>\n";
}






                            
                               
   

$conn->close();




include_once("includes/footer.php");?>