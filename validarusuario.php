<?php
include('db.php');
if (isset($_REQUEST['login'])) {

    $name = trim($_POST['correo']);
    $pass = trim($_POST['pass']);


    $conex = mysqli_connect("localhost", "root", "", "crud_php");
    $query = "SELECT * FROM  cuentas_de_administradores WHERE correo = '$name' AND password  = '$pass' ";
    $res = mysqli_query($conex, $query);
    $filas = mysqli_num_rows($res);
    if ($filas > 0) {
        session_start();
        $_SESSION['nombre'] = $name;
        $query = " INSERT INTO registro_ingresos_usuarios(nombre) VALUES ('$name')";
        $result = mysqli_query($conn, $query);
        header('Location:registro.php');


    } else {
        echo '<script type="text/javascript">
    alert("Error al ingresar correo o contraseña");
    window.location.href="index.php";
    </script>';



    }
}

?>