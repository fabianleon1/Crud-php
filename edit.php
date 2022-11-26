<?php



include('db.php');


if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $query = "SELECT * FROM usuarios WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $dni = $row['dni'];
        $email = $row['email'];

    } else {
        echo "No puedes editar";
    }

}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];

    $query = "UPDATE usuarios set nombre='$nombre', dni='$dni', email='$email' WHERE id=$id";

    $result = mysqli_query($conn, $query);
    if (!$result) {

    } else {
        echo '<script type="text/javascript">
    alert("Registro Existente Guardado");
    window.location.href="registro.php";
    </script>';
    }

}

?>

<?php include('includes/header.php') ?>

<form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="" viewBox="0 0 24 24"
        style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
        <path
            d="M12 2A10.13 10.13 0 0 0 2 12a10 10 0 0 0 4 7.92V20h.1a9.7 9.7 0 0 0 11.8 0h.1v-.08A10 10 0 0 0 22 12 10.13 10.13 0 0 0 12 2zM8.07 18.93A3 3 0 0 1 11 16.57h2a3 3 0 0 1 2.93 2.36 7.75 7.75 0 0 1-7.86 0zm9.54-1.29A5 5 0 0 0 13 14.57h-2a5 5 0 0 0-4.61 3.07A8 8 0 0 1 4 12a8.1 8.1 0 0 1 8-8 8.1 8.1 0 0 1 8 8 8 8 0 0 1-2.39 5.64z">
        </path>
        <path
            d="M12 6a3.91 3.91 0 0 0-4 4 3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4zm0 6a1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2 1.91 1.91 0 0 1-2 2z">
        </path>
    </svg>

    <div class="form-group">

        <label for="exampleInputPassword1" require>Alumno</label>
        <input type="text" class="form-control" name="nombre" id="alumno" placeholder="Nombre del alumno"
            value="<?php echo $nombre; ?>">
    </div>

    <div class=" form-group">
        <label for="exampleInputPassword1">DNI</label>
        <input type="text" class="form-control" name="dni" id="dni" placeholder="DNI" value="<?php echo $dni; ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email"
            value="<?php echo $email; ?>">
    </div>
    <br>
    <div> <button type=" submit" class="btn btn-success" name="update">Guardar</button>
        <a href="registro.php" <button type=" submit" class="btn btn-danger" name="guardar_alumno"
            value="">Cancelar</button></a>
    </div>


</form>