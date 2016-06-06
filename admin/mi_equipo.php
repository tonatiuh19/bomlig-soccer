<?php include_once("includes/header.php");

require_once("cn2.php");
if($_SERVER['REQUEST_METHOD']=="POST"){


        $numerodeequipo           = $_POST['numerodeequipo'];
      $numerodeliga           = $_POST['numerodeliga'];
      $actual = $_SESSION['usuario'];

    $sql = "SELECT id_equipo, nombre, puntos, situacion, id_liga, escudo FROM equipos WHERE id_equipo='$numerodeequipo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            echo "            <div class=\"row\">\n"; 
            echo "                <div class=\"col-lg-12\">\n"; 
            echo "                    <legend><b>" . $row["nombre"]. "</b></legend>\n"; 
            echo "                </div>\n"; 
            echo "                <!-- /.col-lg-12 -->\n"; 
            echo "            </div>\n"; 
            echo "            <div class=\"row\">\n"; 
            echo "                <div class=\"col-lg-3 col-md-6\">\n"; 
            echo "                    <div class=\"panel panel-primary\">\n"; 
            echo "                        <div class=\"panel-heading\">\n"; 
            echo "                            <div class=\"row\">\n"; 
            echo "                                <div class=\"col-xs-3\">\n"; 
            echo "                                    <i class=\"fa fa-trophy fa-5x\"></i>\n"; 
            echo "                                </div>\n"; 
            echo "                                <div class=\"col-xs-9 text-right\">\n"; 
            echo "                                    <div class=\"huge\"><h2>" . $row["puntos"]. "</h2></div>\n"; 
            echo "                                </div>\n"; 
            echo "                            </div>\n"; 
            echo "                        </div>\n"; 
            echo "                            <div class=\"panel-footer\">\n"; 
            echo "                                <span class=\"pull-left\"><h4>Puntos</h4></span>\n"; 
            echo "                                <div class=\"clearfix\"></div>\n"; 
            echo "                            </div>\n"; 
            echo "                    </div>\n"; 
            echo "                </div>\n"; 
            echo "                <div class=\"col-lg-3 col-md-6\">\n"; 
            echo "                    <div class=\"panel panel-warning\">\n"; 
            echo "                        <div class=\"panel-heading\">\n"; 
            echo "                            <div class=\"row\">\n"; 
            echo "                                <div class=\"col-xs-3\">\n"; 
            echo "                                    <i class=\"fa fa-calendar fa-5x\"></i>\n"; 
            echo "                                </div>\n"; 
            echo "                                <div class=\"col-xs-9 text-right\">\n"; 
            echo "                                    <div class=\"huge\"><h2>" . $row["puntos"]. "</h2></div>\n"; 
            echo "                                </div>\n"; 
            echo "                            </div>\n"; 
            echo "                        </div>\n"; 
            echo "                            <div class=\"panel-footer\">\n"; 
            echo "                                <span class=\"pull-left\"><h4>Posicion</h4></span>\n"; 
            echo "                                <div class=\"clearfix\"></div>\n"; 
            echo "                            </div>\n"; 
            echo "                    </div>\n"; 
            echo "                </div>\n"; 
            echo "                <div class=\"col-lg-3 col-md-6\">\n"; 
            echo "                    <div class=\"panel panel-danger\">\n"; 
            echo "                        <div class=\"panel-heading\">\n"; 
            echo "                            <div class=\"row\">\n"; 
            echo "                                <div class=\"col-xs-3\">\n"; 
            echo "                                    <i class=\"fa fa-hand-o-right fa-5x\"></i>\n"; 
            echo "                                </div>\n"; 
            echo "                                <div class=\"col-xs-9 text-right\">\n"; 
            echo "                                    <div class=\"huge\"><h4>";
                                                if ($row["situacion"] == 1) {
                                                    echo "Para Jugar";
                                                }elseif ($row["situacion"] == 2) {
                                                    echo "Tu equipo descansa";
                                                }elseif ($row["situacion"] == 3) {
                                                    echo "Equipo Suspendido";
                                                }
            

            echo "</h4></div>\n"; 
            echo "                                </div>\n"; 
            echo "                            </div>\n"; 
            echo "                        </div>\n"; 
            echo "                            <div class=\"panel-footer\">\n"; 
            echo "                                <span class=\"pull-left\"><h4>Situacion</h4></span>\n"; 
            echo "                                <div class=\"clearfix\"></div>\n"; 
            echo "                            </div>\n"; 
            echo "                    </div>\n"; 
            echo "                </div>\n"; 
            echo "                <div class=\"col-lg-3 col-md-6\">\n"; 
            echo "                    <div class=\"panel panel-success\">\n"; 
            echo "                        <div class=\"panel-heading\">\n"; 
            echo "                            <div class=\"row\">\n"; 
            echo "                                <div class=\"col-xs-3\">\n"; 
            echo "                                    <i class=\"fa fa-bullhorn fa-5x\"></i>\n"; 
            echo "                                </div>\n"; 
            echo "                                <div class=\"col-xs-9 text-right\">\n"; 
            echo "                                    <div class=\"huge\"><h2>" . $row["puntos"]. "</h2></div>\n"; 
            echo "                                </div>\n"; 
            echo "                            </div>\n"; 
            echo "                        </div>\n"; 
            echo "                            <div class=\"panel-footer\">\n"; 
            echo "                                <span class=\"pull-left\"><h4>Juegos Jugados</h4></span>\n"; 
            echo "                                <div class=\"clearfix\"></div>\n"; 
            echo "                            </div>\n"; 
            echo "                    </div>\n"; 
            echo "                </div>\n"; 
           
            echo "            </div>\n"; 
            echo "<div class=\"row\">\n"; 
            echo "        <div class=\"col-sm-8\">";
            $sql2 = "SELECT  situacion, score, id_usuario, id_equipo, posicion FROM jugadores WHERE id_equipo='$numerodeequipo';";
            $result2 = $conn->query($sql2);
            echo "<h3>Plantilla</h3>";
            if ($result2->num_rows > 0) {
                echo "<table class=\"table\">";
                            echo "<thead>";
                            echo "<tr>";

                                echo "<th></th>";
                                echo "<th>Nombre</th>";
                                echo "<th>Posicion</th>";
                                echo "<th>Situacion</th>";
                                echo "<th>Goles</th>";
                                

                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";

                // output data of each row
                while($row2 = $result2->fetch_assoc()) {
                    echo "<tr>";
                    $sql3 = "SELECT nombre, apellido, pais, foto, id_usuario FROM usuarios WHERE id_usuario=".$row2['id_usuario']."";
                    $result3 = $conn->query($sql3);

                    if ($result3->num_rows > 0) {
                        // output data of each row
                        while($row3 = $result3->fetch_assoc()) {
                             if ($row3['foto']) {
                                            echo "<td> <img src=".'users/'.$row3['id_usuario'].'/'.$row3['foto']." height=\"42\" width=\"42\"></td>";
                                        }else{
                                             echo "<td><img src=\"default.png\"> </td>";
                                        }

                                        echo "<td>".$row3['nombre']." ".$row3['apellido']."</td>";
                        }
                    } else {
                        echo "0 results";
                    }
                                       
                                        echo "<td>".$row2['posicion']."</td>";
                                        echo "<td>".$row2['score']."</td>";
                                            echo "</tr>";

                            echo "</tbody";
                        echo"</table>";


                }
            } else {
                echo "<p><div class=\"alert alert-danger\">¡Todavia no hay jugadores!</div></p>";;
            }


            echo " </div>\n"; 
            echo "        <div class=\"col-sm-4\">";
             
            echo "    </div>\n";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    
        

    
       


    


        //move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

    }else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
            
            window.location.href='equipos.php';
            </SCRIPT>");
    }


 include_once("includes/footer.php");?>
