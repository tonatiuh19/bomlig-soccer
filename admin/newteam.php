<?php

session_start();
	

	if($_SERVER['REQUEST_METHOD']=="POST"){


		$nombre_equipo	= $_POST['nombre'];
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
		if ($file_error=='4') {
			$cur = getcwd();
					$sql = "INSERT INTO equipos( nombre, id_usuario, pais)VALUES ('$nombre_equipo','$id_usuario','$pais')";

					if ($conn->query($sql) === TRUE) {

						$sql = "SELECT id_equipo FROM equipos WHERE nombre='$nombre_equipo'";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        $new = mkdir($cur . '/users'.'/'.$id_usuario.'/'.$row["id_equipo"], 0777);
								if ( $new ) {
									
									
										echo ("<SCRIPT LANGUAGE='JavaScript'>
										window.alert('Nuevo equipo creado! (Sin escudo)')
										window.location.href='equipos.php';
										</SCRIPT>");

									
								} else {
									echo ("<SCRIPT LANGUAGE='JavaScript'>
										window.alert('Algo anda mal!')
										window.location.href='equipos.php';
										</SCRIPT>");
								}
						    }
						} else {
						    echo "0 results";
						}
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}
		}else{
			if (in_array($file_ext, $allowed)) {
				if ($file_error === 0) {
					if ($file_size <= 3145728) {
					$cur = getcwd();
					$sql = "INSERT INTO equipos( nombre, id_usuario, pais, escudo)VALUES ('$nombre_equipo','$id_usuario','$pais','$file_name')";

					if ($conn->query($sql) === TRUE) {

						$sql = "SELECT id_equipo FROM equipos WHERE nombre='$nombre_equipo'";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        $new = mkdir($cur . '/users'.'/'.$id_usuario.'/'.$row["id_equipo"], 0777);
								if ( $new ) {
									'<p>Directory created</p>';
									$file_destination = 'users/'.$id_usuario.'/'.$row["id_equipo"].'/'.$file_name;
									if (move_uploaded_file($file_tmp, $file_destination)) {
										echo ("<SCRIPT LANGUAGE='JavaScript'>
										window.alert('Nuevo equipo creado!')
										window.location.href='equipos.php';
										</SCRIPT>");

									}
								} else {
									echo ("<SCRIPT LANGUAGE='JavaScript'>
										window.alert('Algo anda mal!')
										window.location.href='equipos.php';
										</SCRIPT>");
								}
						    }
						} else {
						    echo "0 results";
						}
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

					


						

					}else {
						echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('El archivo es demasiado grande!')
							window.location.href='equipos.php';
							</SCRIPT>");
					}
				}else {
					echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Algo anda mal!')
						window.location.href='equipos.php';
						</SCRIPT>");
				}
			}else {
				echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('El archivo no es compatible')
						window.location.href='equipos.php';
						</SCRIPT>");
			}

			}
			

		
		}

		








		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
						
						window.location.href='equipos.php';
						</SCRIPT>");
	}

	//enctype="multipart/form-data"


?>
