<?php
echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n"; 
echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">\n"; 
echo "<head>\n"; 
echo "  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />\n"; 
echo "  <title>Crash cell test</title>\n"; 
echo "  <style type=\"text/css\" >\n"; 
echo "      .table {\n"; 
echo "          display: table;\n"; 
echo "      }\n"; 
echo "      .tr {\n"; 
echo "          display: table-row;\n"; 
echo "      }\n"; 
echo "      .highlight {\n"; 
echo "          background-color: greenyellow;\n"; 
echo "          display: table-cell;\n"; 
echo "      }\n"; 
echo "  </style>\n"; 
echo "</head>\n"; 
echo "<body>\n"; 
echo "\n"; 
echo "    <!-- NO MORE CRASH HERE -->\n"; 
echo "    <p>Here is <span class=\"table\"><span class=\"tr\"><span class=\"highlight\">a span</span></span></span> with no padding.</p>\n"; 
echo "\n"; 
echo "</body>\n"; 
echo "</html>\n";
?>