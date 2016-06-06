<?php
session_start();
include_once("cn2.php");
if($_SERVER['REQUEST_METHOD']=="POST"){


  $posicion			= $_POST['pos'];
  $actual       = $_SESSION['usuario'];
  $jugador = 1;

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
          $new = TRUE;
          if ( $new ) {
            '<p>Directory created</p>';
            $file_destination = 'users/'.$actual.'/'.$file_name;
            if (move_uploaded_file($file_tmp, $file_destination)) {

              $sql = "UPDATE usuarios SET posicion='$posicion', foto='$file_name', jugador='$jugador' WHERE id_usuario='$actual'";

              if ($conn->query($sql) === TRUE) {

                echo ("<SCRIPT LANGUAGE='JavaScript'>
                  window.alert('Perfil Guardado!')
                  window.location.href='index.php';
                  </SCRIPT>");
              } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
              }

              $conn->close();

            }
          } else {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
              window.alert('Algo anda mal!')
              window.location.href='index.php';
              </SCRIPT>");
          }

        }else {
          echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('El archivo es demasiado grande!')
            window.location.href='index.php';
            </SCRIPT>");
        }
      }else {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
          window.alert('Algo anda mal!')
          window.location.href='index.php';
          </SCRIPT>");
      }
    }else {
      $sql = "UPDATE usuarios SET posicion='$posicion', jugador='$jugador' WHERE id_usuario='$actual'";
    }


    if ($conn->query($sql) === TRUE) {

      echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Perfil Guardado!')
        window.location.href='productos2.php';
        </SCRIPT>");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

  }


}else{
  header("location: index.php");
}


 ?>
