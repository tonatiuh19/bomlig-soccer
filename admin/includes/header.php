<?php

if(!isset($_SESSION)){
session_start();
}

    if(empty($_SESSION['usuario'])){
        header("location:../index.php");
    }

    require_once("../admin/cn2.php");

$actual = $_SESSION['usuario'];
echo "<!DOCTYPE html>\n"; 
echo "<html lang=\"es\">\n"; 
echo "    <head>\n"; 
echo "        <meta charset=\"utf-8\">\n"; 
echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n"; 
echo "        <meta name=\"description\" content=\"\">\n"; 
echo "        <meta name=\"author\" content=\"\">\n"; 

echo "        <title>gOmlig</title>\n"; 
echo "        <!-- Bootstrap core CSS -->\n"; 
echo "        <link href=\"css/bootstrap.css\" rel=\"stylesheet\">\n"; 
echo "        <link href=\"css/flags.css\" rel=\"stylesheet\">\n"; 
echo "\n"; 
echo "        <!-- Add custom CSS here -->\n"; 
echo "        <link href=\"css/sb-admin.css\" rel=\"stylesheet\">\n"; 
echo "        <link rel=\"stylesheet\" href=\"font-awesome/css/font-awesome.min.css\">\n"; 
echo "\n"; 
echo "        <!-- Page Specific CSS -->\n"; 
echo "        <link rel=\"stylesheet\" href=\"http://cdn.oesmith.co.uk/morris-0.4.3.min.css\">\n"; 
echo "    </head>\n"; 
echo "    <body>\n"; 
echo "\n"; 
echo "        <div id=\"wrapper\">\n"; 
echo "            <!-- Sidebar -->\n"; 
echo "            <nav class=\"navbar navbar-inverse navbar-fixed-top navbar-default sidebar navbar-static-top\" role=\"navigation\">\n"; 
echo "                <!-- Brand and toggle get grouped for better mobile display -->\n"; 
echo "                <div class=\"navbar-header\">\n"; 
echo "                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">\n"; 
echo "                        <span class=\"sr-only\"></span>\n"; 
echo "                        <span class=\"icon-bar\"></span>\n"; 
echo "                        <span class=\"icon-bar\"></span>\n"; 
echo "                        <span class=\"icon-bar\"></span>\n"; 
echo "                    </button>\n"; 
echo "                    <a class=\"navbar-brand\" href=\"index.php\">\n"; 
echo "                        <img src=\"../fonts/img/logo.png\" alt=\"Ug Logo\" id=\"logo\">\n"; 
echo "                    </a>\n"; 
echo "                </div>\n"; 
echo "\n"; 
echo "                <!-- Collect the nav links, forms, and other content for toggling -->\n"; 
echo "                 \n"; 
echo "                <div class=\"collapse navbar-collapse navbar-ex1-collapse sidebar\">\n"; 
echo "                    <ul class=\"sidebar nav navbar-nav side-nav\" >\n"; 
echo "                        <li class=\"\"><a href=\"index.php\"><i class=\"fa fa-home\"></i> Inicio</a></li>\n"; 
echo "                        <li class=\"\"><a href=\"ligas.php\"><i class=\"fa fa-trophy\"></i> Mis Ligas</a></li>\n"; 
echo "                        <li class=\"\"><a href=\"equipos.php\"><i class=\"fa fa-flag-checkered\"></i> Mis Equipos</a></li>\n"; 
echo "                        <li class=\"\"><a href=\"usuarios.php\"><i class=\"fa fa-user\"></i> Mi Perfil</a></li>\n"; 

echo "                        \n"; 
echo "                    </ul>\n"; 
echo "\n"; 
echo "                    <ul class=\"nav navbar-nav navbar-right navbar-user navbar-top-links  hidden-xs \">\n"; 

echo "                      <li class=\"dropdown\">\n"; 
$sqlq = "SELECT id_liga FROM ligas WHERE id_usuario='$actual'";
$resultq = $conn->query($sqlq);
$contador2=0;
if ($resultq->num_rows > 0) {
 echo "   <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">\n"; 
echo "                              <i>\n"; 
echo "                                  <button type=\"button\" class=\"btn btn-primary btn-xs active\"><span class=\"fa fa-trophy fa-lg\"></span><big>";
    while($rowq = $resultq->fetch_assoc()) {
        $sqlw = "SELECT id_liga, confirmado FROM tablas WHERE confirmado='2' AND id_liga=".$rowq["id_liga"]."";
		$resultw = $conn->query($sqlw);

		if ($resultw->num_rows > 0) {
		    // output data of each row
		    while($roww = $resultw->fetch_assoc()) {
		        $contador2 = $contador2 + 1;
		    }
		} else {
		    echo "";
		}

    }
    if ($contador2=='0') {
    	echo " <span class=\"label label-primary\">";
    }else{
    	echo " <span class=\"label label-success\">";
    }
    echo $contador2;
    echo "                            </span></big></button>\n"; 
	echo "                              </i>\n";
	echo "                            </a>\n"; 
} else {
    echo "";
}

echo "                            <ul class=\"dropdown-menu dropdown-messages\">\n"; 
$sqlx = "SELECT id_liga, nombre FROM ligas WHERE id_usuario='$actual' ";
$resultx = $conn->query($sqlx);

if ($resultx->num_rows > 0) {
    // output data of each row
    while($rowx = $resultx->fetch_assoc()) {
    	
        $sqll = "SELECT id_liga, id_equipo, confirmado FROM tablas WHERE confirmado='2' AND id_liga=".$rowx["id_liga"]."";
		$resultl = $conn->query($sqll);

		if ($resultl->num_rows > 0) {
		    // output data of each row
		    while($rowl = $resultl->fetch_assoc()) {
		    	echo "                                <li class=\"divider\"></li>\n"; 
		        echo "                                <li>\n"; 
				echo "                                    <a href=\"#\">\n"; 
				echo "                                        <div>\n"; 
				echo "                                            <strong>";
				$sqlb = "SELECT nombre, pais FROM equipos WHERE id_equipo=".$rowl["id_equipo"]."";
				$resultb = $conn->query($sqlb);

				if ($resultb->num_rows > 0) {
				    // output data of each row
				    while($rowb = $resultb->fetch_assoc()) {
				        echo $rowb["nombre"];
				    }
				} else {
				    echo "";
				}
				

				echo "</strong>\n"; 
				echo "                                            <span class=\"pull-right text-muted\">\n"; 
				echo "                                                <em>".$rowx["nombre"]."</em>\n"; 
				echo "                                            </span>\n"; 
				echo "                                        </div>\n"; 
				echo "                                        <div>";
				
				echo "<div align=\"center \">";
				echo "<form action=\"ver_equipo.php\" method=\"post\" >";
				echo "<input type=\"hidden\" name=\"liga\" value=".$rowx['id_liga'].">";
	            echo "<input type=\"hidden\" name=\"equipo\" value=".$rowl['id_equipo'].">"; 
				echo " <button class=\"btn btn-primary btn-xs\">Ver Plantilla</button>"; 
				echo "</form>"; 
				echo "</div>\n";

			
				echo "</div>\n";
				echo "&nbsp;";
				echo "                                        <div align=\"center \">";
				echo "<form action=\"aceptar_liga.php\" method=\"post\" >";
				echo "<input type=\"hidden\" name=\"numerodeequipo\" value=".$rowl['id_equipo'].">";
				echo "<input type=\"hidden\" name=\"numerodeliga\" value=".$rowx['id_liga'].">";
				echo " <button class=\"btn btn-success btn-sm pull-right\">Aceptar Solicitud</button>";
				echo "</form>";
				echo "</div>\n"; 
				echo "                                    </a>\n"; 
				echo "                                </li>\n"; 
				
		    }
		} else {
		    echo "";
		}
    }
} else {
    echo "0 results";
}


echo "                            </ul>\n"; 
echo "                            <!-- /.dropdown-messages -->\n"; 
echo "                        </li>\n"; 

echo "                      <li class=\"dropdown\">\n"; 

$sql = "SELECT id_equipo FROM equipos WHERE id_usuario='$actual'";
$result = $conn->query($sql);
$contador = 0;
if ($result->num_rows > 0) {
	echo "                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">\n"; 
    echo "                              <i>\n"; 
	echo "                                  <button type=\"button\" class=\"btn btn-primary btn-xs active\"><span class=\"fa fa-flag-checkered fa-lg\"></span><big> "; 
	 
    while($row = $result->fetch_assoc()) {
        $sql2 = "SELECT id_jugador, noti, id_usuario FROM jugadores WHERE noti='1' AND id_equipo=" . $row["id_equipo"]. "";
		$result2 = $conn->query($sql2);

		if ($result2->num_rows > 0) {
		    // output data of each row
		    while($row2 = $result2->fetch_assoc()) {
		        $contador = $contador + 1;
		    }

		} else {
		    echo "";
		}
    }
    if ($contador=='0') {
    	echo "<span class=\"label label-primary\">";
    }else{
    	echo "<span class=\"label label-success\">";
    }
    echo $contador;

	echo "</span></big></button>\n"; 
	echo "                              </i>\n";
	echo "                            </a>\n";
} else {
    echo "";
}



echo "                            <ul class=\"dropdown-menu dropdown-messages\">\n";
$sql3 = "SELECT id_equipo FROM equipos WHERE id_usuario='$actual'";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
    // output data of each row
    while($row3 = $result3->fetch_assoc()) {
       	$sql4 = "SELECT id_jugador, noti, id_usuario, id_equipo, numero, posicion FROM jugadores WHERE noti='1' AND id_equipo=" . $row3["id_equipo"]. "";
		$result4 = $conn->query($sql4);

		if ($result4->num_rows > 0) {
		    // output data of each row
		    while($row4 = $result4->fetch_assoc()) {
		        echo "                                <li>\n"; 
				echo "                                    <a href=\"#\">\n"; 
				echo "                                        <div>\n"; 
				echo "                                            <div class=\"pull-left \"><strong>";
				$sql5 = "SELECT nombre, apellido, pais FROM usuarios WHERE id_usuario=" . $row4["id_usuario"]. "";
				$result5 = $conn->query($sql5);

				if ($result5->num_rows > 0) {
				    // output data of each row
				    while($row5 = $result5->fetch_assoc()) {
				    	echo "<img class=\"flag flag-".strtolower($row5["pais"])."\" height=\"100\" width=\"100\" />";
				        echo " " . $row5["nombre"]. " " . $row5["apellido"]. "";
				    }
				} else {
				    echo "0 results";
				} 

				echo "</strong></div>\n"; 
				echo "                                            <span class=\"pull-right text-muted\">\n"; 
				echo "                                                <b>Posicion: </b>" . $row4["posicion"]. " <b>Numero: </b>" . $row4["numero"]. " \n"; 
				echo "                                            </span>\n"; 
				echo "                                        </div>\n"; 
				echo "                                        <p class=\"pull-left \">"; 
				$sql6 = "SELECT nombre FROM equipos WHERE id_equipo=" . $row4["id_equipo"]. "";
				$result6 = $conn->query($sql6);

				if ($result6->num_rows > 0) {
				    // output data of each row
				    while($row6 = $result6->fetch_assoc()) {

				    	echo "<span class=\"badge\"><strong>".$row6["nombre"]."</strong></span>\n";
				        
				    }
				} else {
				    echo "0 results";
				}

				echo "</p>\n";
				echo "<br>\n";
				echo "<div class=\"pull-right \" align=\"center \">\n";
				echo "<form action=\"aceptar_equipo.php\" method=\"post\" >";
            echo "<input type=\"hidden\" name=\"jugador\" value=".$row4['id_jugador'].">"; 
			echo " <button class=\"btn btn-success btn-xs\">Aceptar Solicitud</button>"; 
			echo "</form>";
			echo "<p>\n";
				echo "<div class=\"divider\">\n";

			echo "</div>\n";
			echo "</p>\n";
			echo "</div>\n";
			echo "<br>\n";
			echo "<br>\n";
			
				 
				echo "                                    </a>\n"; 
				echo "                                </li>\n";

		    }
		} else {
		    echo "";
		}
    }
} else {
    echo "";
} 
 




echo "                            </ul>\n"; 
echo "                            <!-- /.dropdown-messages -->\n"; 
echo "                        </li>\n"; 

echo "                      \n"; 
echo "\n"; 
echo "                   \n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "\n"; 
echo "                        <li class=\"dropdown\">\n"; 
echo "                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">\n"; 
echo "                        <i class=\"fa fa-user fa-fw\"></i>";echo $_SESSION["nombre"]; echo " "; echo $_SESSION["apellido"];echo " ";
echo "<i class=\"fa fa-caret-down\"></i>\n"; 
echo "                    </a>\n"; 
echo "                    <ul class=\"dropdown-menu dropdown-messages\">\n"; 
echo "                        <li>\n"; 
echo "                            <a class=\"fa fa-power-off text-center alert-danger\" href=\"includes/fin.php\">\n"; 
echo "                                     Salir   \n"; 
echo "                            </a>\n"; 
echo "                        </li>\n"; 
echo "                        \n"; 
echo "                        \n"; 
echo "                       \n"; 
echo "                    </ul>\n"; 
echo "                    <!-- /.dropdown-messages -->\n"; 
echo "                </li>\n"; 
echo "                    </ul>\n"; 
echo "                </div><!-- /.navbar-collapse -->\n"; 
echo "            </nav>\n"; 
echo "            <div id=\"page-wrapper\">\n";
?>