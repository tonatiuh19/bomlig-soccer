<?php
session_start();
require_once("cn2.php");
if ($_POST['pass']!= $_POST['pass2'])
 {
   echo ("<SCRIPT LANGUAGE='JavaScript'>
     window.alert('Las contraseñas no coinciden, intentalo de nuevo!')
     window.location.href='../inicio2.php';
     </SCRIPT>");;
 }else {
   if($_SERVER['REQUEST_METHOD']=="POST"){
 		$nombre			= $_POST['nombre'];
    $apellido			= $_POST['apellido'];
 		$pass			= $_POST['pass'];
 		$pais			= $_POST['pais'];
     $email		= $_POST['email'];


     $sql = "SELECT * FROM usuarios WHERE email = '$email'";
     $result = $conn->query($sql);

     if ($result->num_rows == 0) {
       $sql2 = "INSERT INTO usuarios (nombre, apellido, email, pwd, pais)
        VALUES ('$nombre','$apellido','$email','$pass','$pais')";

        if ($conn->query($sql2) === TRUE) {
          $sql3 = "SELECT id_usuario, nombre, apellido FROM usuarios WHERE email = '$email'";
          $result2 = $conn->query($sql3);

          if ($result2->num_rows > 0) {
            // output data of each row
            while($row = $result2->fetch_assoc()) {
              $_SESSION["usuario"] =	$row["id_usuario"];
              $_SESSION["nombre"] = $row["nombre"];
              $_SESSION["apellido"] = $row["apellido"];
              $cur = getcwd();
              echo $actual = $_SESSION['usuario'];
              $new2 = mkdir($cur . '/users'.'/'.$actual, 0777);
              if ( $new2 ) {
                '<p>Directory created</p>';}
            }
          } else {
            echo "0 results";
          }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
     } else {
       echo ("<SCRIPT LANGUAGE='JavaScript'>
         window.alert('Ya existe este perfil')
        window.location.href='../inicio2.php';
         </SCRIPT>");;
     }
     $conn->close();
     if (isset($_SESSION['usuario'])){
 		
      //header("location: index.php");
      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Bienvenido!')
      window.location.href='index.php';
        </SCRIPT>");;
 		}

     /**/

 		//move_uploaded_file($_FILES['foto']['tmp_name'],"../img_pro/".$_FILES['foto']['name']); window.location.href='productos2.php'

 	}else{
 		header("location: ../inicio2.php");
 	}
 }


	//enctype="multipart/form-data"


?>
