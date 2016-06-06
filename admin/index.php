<?php session_start(); include_once("includes/header.php");
include_once("cn2.php");
  $actual = $_SESSION['usuario'];
  $actual2 = $_SESSION['liga'];

echo "<div class=\"container\">\n"; 
echo "    <div class=\"row\">\n"; 
echo "        <div class=\"col-sm-5\">"; 
echo "<div class=\"panel panel-primary\">\n"; 
echo "  <div class=\"panel-heading\"><span class=\"fa fa-calendar fa-lg\"> Proximos Compromisos: </span></div>\n"; 
echo "  <div class=\"panel-body\">"; 
echo "<div class=\"container\">\n"; 
echo "    <div class=\"row\">\n"; 
echo "        <div class=\"col-sm-2\"><b>Proximo Partido</b></div>\n"; 
echo "        <div class=\"col-sm-1\"><b>Equipo</b></div>\n"; 
echo "        <div class=\"col-sm-1\"><b>Lugar</b></div>\n"; 
echo "    </div>\n"; 
echo "</div>\n"; 
echo "</div>\n"; 
echo "</div>\n";
echo "</div>\n";
//echo "</div>\n";

echo "        <div class=\"col-sm-5\">"; 
echo "<div class=\"panel panel-primary\">\n"; 
echo "  <div class=\"panel-heading\"><span class=\"fa fa-rss fa-lg\"> Noticias Importantes: </span></div>\n"; 
echo "  <div class=\"panel-body\">Panel Content</div>\n"; 
echo "</div>\n";
echo "</div>\n";
//echo "</div>\n"; 

echo "        <div class=\"col-sm-5\">"; 
echo "<div class=\"jumbotron\">\n"; 
echo "  <h2>Jugador de la Semana</h2> \n"; 
echo "<img src=\"default.png\" class=\"img-responsive\" alt=\"Cinque Terre\">\n";
echo "</div>\n";
echo "</div>\n";
//echo "</div>\n"; 

echo "        <div class=\"col-sm-5\">"; 
echo "<div class=\"panel panel-primary\">\n"; 
echo "  <div class=\"panel-heading\"><span class=\"fa fa-bolt fa-lg\"> Atajos: </span></div>\n"; 
echo "  <div class=\"panel-body\">"; 
echo "<div class=\"container\">\n"; 
echo "    <div class=\"row\">\n"; 
echo "        <div class=\"col-sm-1\"><b>Equipo</b></div>\n"; 
echo "        <div class=\"col-sm-1\"><a href=\"#\" class=\"btn btn-info btn-sm\" role=\"button\">Link Button</a></div>\n"; 
echo "        <div class=\"col-sm-1\"><a href=\"#\" class=\"btn btn-info btn-sm\" role=\"button\">Link Button</a></div>\n"; 
echo "    </div>\n"; 
echo "</div>\n"; 
echo "</div>\n"; 
echo "</div>\n";
echo "</div>\n";
//echo "</div>\n"; 

echo "    </div>\n"; 
echo "</div>\n";

 include_once("includes/footer.php");?>
