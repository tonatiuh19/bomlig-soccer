<?php require_once("includes/header.php");


echo "<form class=\"form-horizontal\" action=\"confirm.php\" method=\"POST\">\n"; 
echo "<fieldset>\n"; 
echo "\n"; 
echo "<!-- Form Name -->\n"; 
echo "<legend>Edita tu perfil</legend>\n"; 
echo "\n"; 
echo "<!-- Password input-->\n"; 
echo "<div class=\"form-group\">\n"; 
echo "  <label class=\"col-md-4 control-label\" for=\"passwordinput\">Para editar tu perfil vuelve a escribir tu contraseña</label>\n"; 
echo "  <div class=\"col-md-4\">\n"; 
echo "    <input id=\"pwd\" name=\"pwd\" type=\"password\" placeholder=\"\" class=\"form-control input-md\" required=\"\">\n"; 
echo "    \n"; 
echo "  </div>\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "<!-- Button -->\n"; 
echo "<div class=\"form-group\">\n"; 
echo "  <label class=\"col-md-4 control-label\" for=\"singlebutton\"></label>\n"; 
echo "  <div class=\"col-md-4\">\n"; 
echo "    <button id=\"singlebutton\" name=\"singlebutton\" type=\"submit\" class=\"btn btn-primary\">Continuar</button>\n"; 
echo "  </div>\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "</fieldset>\n"; 
echo "</form>\n";


	require_once("includes/footer.php");
?>