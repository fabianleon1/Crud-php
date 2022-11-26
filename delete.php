<?php



require('db.php');


if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = "DELETE FROM usuarios WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        Die("Query failed");
    } else {
        echo '<script type="text/javascript">
    alert("Registro eliminado");
    window.location.href="registro.php";
    </script>';
    }

}


?>