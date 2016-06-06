<?php 
require_once("cn2.php");

$var_value = $_GET['varname'];
echo "<form name=\"myform\" method=\"post\" action=\"insidein.php\">\n"; 
echo "<input type=\"hidden\" name=\"equipo\" value=\"".$var_value."\">\n"; 
echo "<script language=\"JavaScript\">document.myform.submit();</script></form>\n";


					
					
					
					

$conn->close(); 

?>


