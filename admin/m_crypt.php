<?php
    	
    	$mensaje = "Fernando Angeles";
		
		echo "Mensaje original: ".$mensaje."<br>";
		
		$key		= "guanajuato";
		
		$cypher		= MCRYPT_RIJNDAEL_256;
		
		$mode		= MCRYPT_MODE_CBC;
		
		$iv			= mcrypt_create_iv(mcrypt_get_iv_size($cypher, $mode), MCRYPT_RAND);
		
		$encriptar	= mcrypt_encrypt($cypher, $key, $mensaje, $mode, $iv);

		echo "Mensaje encriptado: ".$encriptar."<br>";

		$desen = mcrypt_decrypt($cypher, $key, $encriptar, $mode, $iv);


		echo "Mensaje desencriptado: ".$desen."<br>";

    
    ?>