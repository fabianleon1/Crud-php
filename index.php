<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de inventarios</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <h1>Hola</h1>

    <main>
        <form id="login_form" class="form_class" action="validarusuario.php" method="post">
            <div class="form_div">
                <label>Login:</label>
                <input class="field_class" id="exampleInputEmail1" name="correo" placeholder="Inserta Correo" autofocus>
                <label>Password:</label>
                <input id="pass" class="field_class" type="password" class="form-control" id="exampleInputPassword1"
                    name="pass" required placeholder="Inserta contraseña">
                <button type="submit" class="btn btn-primary" name="login" value="login">Entrar</button>
            </div>
            <div class="info_div">
                <p>No se encuentra registrado? <a href="register/reg-form.php">Registrese</a></p>
            </div>
        </form>
    </main>
    <footer>
        <p>Desarrollado por <a href="#">Fabian Leon</a></p>
    </footer>


</body>

</html>