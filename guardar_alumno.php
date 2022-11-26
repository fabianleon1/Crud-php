<?php

include("db.php");

if (isset($_POST['guardar_alumno'])) {

  $nombre = $_POST['alumno'];
  $dni = $_POST['dni'];
  $email = $_POST['email'];

  $query = " INSERT INTO usuarios(nombre,dni,email) VALUES ('$nombre', '$dni' ,'$email')";

  $result = mysqli_query($conn, $query);
  if (!$result) {

    echo'<script type="text/javascript">
    alert("Algo salió mal");
    window.location.href="registro.php";
    </script>'; 

  } else {
    echo'<script type="text/javascript">
    alert("Registro Guardado");
    window.location.href="registro.php";
    </script>';
  }

}






?>