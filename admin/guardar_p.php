<?php

session_start();
	

	if($_SERVER['REQUEST_METHOD']=="POST"){


		$tipo			= $_POST['tipo'];
		$nombre			= $_POST['nombre'];
		$pais			= $_POST['pais'];
		$id_usuario		= $_SESSION['usuario'];


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
						$new = mkdir($cur . '/users'.'/'.$id_usuario.'/'.$nombre, 0777);
						if ( $new ) {
							'<p>Directory created</p>';
							$file_destination = 'users/'.$id_usuario.'/'.$nombre.'/'.$file_name;
							if (move_uploaded_file($file_tmp, $file_destination)) {
								$sql = "INSERT INTO ligas( tipo, nombre, pais, id_usuario, logo)VALUES ('$tipo','$nombre','$pais','$id_usuario','$file_name')";

								if ($conn->query($sql) === TRUE) {

								  echo ("<SCRIPT LANGUAGE='JavaScript'>
								    window.alert('Nueva Liga Guardada!')
								    window.location.href='productos.php';
								    </SCRIPT>");
								} else {
								    echo "Error: " . $sql . "<br>" . $conn->error;
								}

								$conn->close();

							}
						} else {
							echo ("<SCRIPT LANGUAGE='JavaScript'>
								window.alert('Algo anda mal!')
								window.location.href='nuevo_producto.php';
								</SCRIPT>");
						}

					}else {
						echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('El archivo es demasiado grande!')
							window.location.href='nuevo_producto.php';
							</SCRIPT>");
					}
				}else {
					echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Algo anda mal!')
						window.location.href='nuevo_producto.php';
						</SCRIPT>");
				}
			}else {
				$sql = "INSERT INTO ligas( tipo, nombre, pais, id_usuario, logo)VALUES ('$tipo','$nombre','$pais','$id_usuario')";
			}


			if ($conn->query($sql) === TRUE) {

				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Nueva Liga Guardada!')
					window.location.href='productos.php';
					</SCRIPT>");
			} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();

		}










		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		header("location: productos.php");
	}

	//enctype="multipart/form-data"


?>
