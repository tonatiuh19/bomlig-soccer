<?php require_once("includes/header.php");


if($_SERVER['REQUEST_METHOD']=="POST"){

	$pwd			= $_POST['pwd'];

	if ($pwd==$_SESSION['pwd']) {
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					
					window.location.href='editar_usuario.php';
					</SCRIPT>");
	}else{
		echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Esta no es tu contraseña')
					window.location.href='usuarios.php';
					</SCRIPT>");
	}



}


	require_once("includes/footer.php");
?>