<?php


require('db.php');

if (isset($_POST['exportar'])) {

   $archivo = $_POST['archivo'];
   $query = " SELECT nombre,dni,email  FROM usuarios
    INTO OUTFILE 'C:/Users/fabia/Downloads/$archivo.csv'     
    FIELDS TERMINATED BY ','    
    OPTIONALLY ENCLOSED BY ','    
    LINES TERMINATED BY '\r\n';    ";

   $result = mysqli_query($conn, $query);
   if (!$result) {
      echo '<script type="text/javascript">
        alert("Algo salió mal");
        window.location.href="registro.php";
        </script>';
   } else {
      echo '<script type="text/javascript">
        alert("Exportado: Revisa C:/Users/fabia/Downloads");
        window.location.href="registro.php";
        </script>';
   }

} else {
   echo "no exportado";
}




?>