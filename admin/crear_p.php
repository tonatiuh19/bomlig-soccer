<?php

session_start();

	if($_SERVER['REQUEST_METHOD']=="POST"){

		$nombre			= $_POST['nombre'];
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
								$sql = "INSERT INTO equipos( nombre, escudo, id_usuario)VALUES ('$nombre','$file_name', '$id_usuario')";

								if ($conn->query($sql) === TRUE) {

								  echo ("<SCRIPT LANGUAGE='JavaScript'>
								    window.alert('Nuevo Equipo Guardado!')
								    window.location.href='equipos.php';
								    </SCRIPT>");
								} else {
								    echo "Error: " . $sql . "<br>" . $conn->error;
								}

								$conn->close();

							}
						} else {
							echo ("<SCRIPT LANGUAGE='JavaScript'>
								window.alert('Algo anda mal!')
								window.location.href='crear_equipo.php';
								</SCRIPT>");
						}

					}else {
						echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('El archivo es demasiado grande!')
							window.location.href='crear_equipo.php';
							</SCRIPT>");
					}
				}else {
					echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Algo anda mal!')
						window.location.href='crear_equipo.php';
						</SCRIPT>");
				}
			}else {
			  $sql = "INSERT INTO equipos( nombre, escudo, id_usuario)VALUES ('$nombre','$file_name', '$id_usuario')";
			}


			if ($conn->query($sql) === TRUE) {

				echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Nuevo Equipo Guardado!')
					window.location.href='equipos.php';
					</SCRIPT>");
			} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();

		}










		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		header("location: productos2.php");
	}

	//enctype="multipart/form-data"


?>
