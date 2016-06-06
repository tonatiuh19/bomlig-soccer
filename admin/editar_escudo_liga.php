<?php

session_start();
require_once("cn2.php");
	if($_SERVER['REQUEST_METHOD']=="POST"){


		$liga			= $_POST['equipo'];
		$actual			= $_SESSION['usuario'];
		

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
						
						
							
							$file_destination = 'users/'.$actual.'/'.$liga.'/'.$file_name;
							if (move_uploaded_file($file_tmp, $file_destination)) {
								$sql = "UPDATE ligas SET logo='$file_name' WHERE id_liga='$liga' ";
								$result = $conn->query($sql);

								if ($conn->query($sql) === TRUE) {
									echo "<form name=\"myform\" method=\"post\" action=\"admin_league.php\">\n"; 
									echo "<input type=\"hidden\" name=\"iddeequipo\" value=\"".$liga."\">\n"; 
									echo "<script language=\"JavaScript\">document.myform.submit();</script></form>\n";
								} else {
								    echo "Error: " . $sql . "<br>" . $conn->error;
								}

								

							}
						 else {
							echo ("<SCRIPT LANGUAGE='JavaScript'>
								window.alert('Algo anda mal!')
								window.location.href='ligas.php';
								</SCRIPT>");
						}

					}else {
						echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('El archivo es demasiado grande!')
							window.location.href='ligas.php';
							</SCRIPT>");
					}
				}else {
					echo ("<SCRIPT LANGUAGE='JavaScript'>
						window.alert('Algo anda mal!')
						window.location.href='ligas.php';
						</SCRIPT>");
				}
			}else {
				
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


		


		






		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']);

	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					
					window.location.href='equipos.php';
					</SCRIPT>");
	}

	//enctype="multipart/form-data"


?>
