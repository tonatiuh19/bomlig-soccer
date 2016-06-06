<?php  //Start the Session


		session_start();
		require_once("admin/cn2.php");

		if (isset($_POST['email']) and isset($_POST['pwd'])){
			$username = $_POST['email'];
			$password = $_POST['pwd'];
			$sql = "SELECT id_usuario, nombre, apellido, liga, torneo, equipo, jugador, pais, email, foto, pwd, idioma FROM `usuarios` WHERE email='$username' and pwd='$password'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
					$_SESSION["usuario"] =	$row["id_usuario"];
					$_SESSION["nombre"] = $row["nombre"];
					$_SESSION["apellido"] = $row["apellido"];
					$_SESSION["liga"] = $row["liga"];
					$_SESSION["equipo"] = $row["equipo"];
					$_SESSION["jugador"] = $row["jugador"];
					$_SESSION["pais"] = $row["pais"];
					$_SESSION["email"] = $row["email"];
					$_SESSION["foto"] = $row["foto"];
					$_SESSION["pwd"] = $row["pwd"];
					$_SESSION["idioma"] = $row["idioma"];
					}
			} else {
					echo "0 results";
			}
			$conn->close();
		}
		if (isset($_SESSION['usuario'])){
			;
			echo "Hai " . $_SESSION["nombre"] ." ".$_SESSION["apellido"] ."";
			echo "This is the Members Area";
			echo "<a href='logout.php'>Logout</a>";
			header("location: admin/index.php");
		}else{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Usuario o Contraseña incorrectos!')
				window.location.href='inicio.php';
				</SCRIPT>");

		}






?>
