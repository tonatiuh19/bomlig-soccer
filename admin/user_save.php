<?php

session_start();
	if($_SERVER['REQUEST_METHOD']=="POST"){


		$nombre			= $_POST['nombre'];
		$apellido			= $_POST['apellido'];
		$email			= $_POST['email'];
		$pwd		= $_POST['pwd'];
		 $pdw		= $_POST['pdw'];
		$pais		= $_POST['pais'];
		$idioma		= $_POST['idioma'];
		$id_usuario		= $_SESSION['usuario'];

		if ($pwd==$pdw) {
			require_once("cn2.php");
		if (isset($_FILES['foto'])) {
			$file = $_FILES['foto'];
			$file_name = $file['name'];
			$file_tmp = $file['tmp_name'];
			$file_size = $file['size'];
			$file_error = $file['error'];

			$file_ext = explode('.', $file_name);
			$file_ext = strtolower(end($file_ext));

			$allowed = array('jpg', 'png');
			if (in_array($file_ext, $allowed)) {
				if ($file_error === 0) {
					if ($file_size <= 3145728) {
					$cur = getcwd();
						
						
							
							$file_destination = 'users/'.$id_usuario.'/'.$file_name;
							if (move_uploaded_file($file_tmp, $file_destination)) {
								$sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', pais='$pais', email='$email', pwd='$pwd', foto='$file_name', idioma='$idioma' WHERE id_usuario='$id_usuario' ";

								if ($conn->query($sql) === TRUE) {
									session_unset();
									session_destroy();

								  
								  echo "<form name=\"myForm\" action=\"auto.php\" method=\"POST\">\n"; 
									echo "<input type=\"hidden\" name=\"usuario\" value=".$id_usuario.">\n"; 
									echo "</form>\n";
									echo ("<SCRIPT LANGUAGE='JavaScript'>
								    document.myForm.submit();
								     window.alert('Perfil Actualizado correctamente')
								    </SCRIPT>");
								} else {
								    echo "Error: " . $sql . "<br>" . $conn->error;
								}

								$conn->close();

							}
						 else {
							echo ("<SCRIPT LANGUAGE='JavaScript'>
								window.alert('Algo anda mal!')
								window.location.href='usuarios.php';
								</SCRIPT>");
						}

					}else {
						echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('El archivo es demasiado grande!')
							window.location.href='usuarios.php';
							</SCRIPT>");
					}
				}else {
					echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Algo anda mal!')
						window.location.href='nuevo_producto.php';
						</SCRIPT>");
				}
			}else {
				$sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', pais='$pais', email='$email', pwd='$pwd', idioma='$idioma' WHERE id_usuario='$id_usuario' ";

								if ($conn->query($sql) === TRUE) {
									
									session_unset();
									session_destroy();

								  
								  echo "<form name=\"myForm\" action=\"auto.php\" method=\"POST\">\n"; 
									echo "<input type=\"hidden\" name=\"usuario\" value=".$id_usuario.">\n"; 
									echo "</form>\n";
									echo ("<SCRIPT LANGUAGE='JavaScript'>
								    document.myForm.submit();
								     window.alert('Perfil Actualizado correctamente')
								    </SCRIPT>");
								} else {
								    echo "Error: " . $sql . "<br>" . $conn->error;
								}

								$conn->close();
			}

		}/*$sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', pais='$pais', email='$email', pwd='$pwd', idioma='$idioma' WHERE id_usuario='$id_usuario' ";

			if ($conn->query($sql) === TRUE) {

				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Hecho!')
					window.location.href='usuarios.php';
					</SCRIPT>");
			} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
			}*/

$conn->close();


		}else{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('¡Las contraseñas no coinciden!')
					window.location.href='editar_usuario.php';
					</SCRIPT>");
		}


		






		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		header("location: usuarios.php");
	}

	//enctype="multipart/form-data"


?>
