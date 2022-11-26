<?php include('db.php'); ?>

<?php include("includes/header.php") ?>

<!-- <?php



session_start();

echo $_SESSION['nombre'];


?>
 -->
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <div class="container">
        <header>

            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="registro.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Cuentas de usuario</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Bienvenido <?php echo $_SESSION['nombre'];?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Salir <?php session_destroy();?> </a>
                            </li>

                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>

        </header>

        <!--formulario -->
        <div class="container justify-content-center">


            <form action="guardar_alumno.php" method="POST" autocomplete="off">
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
                    <input type="text" class="form-control" name="alumno" id="alumno" placeholder="Nombre del alumno"
                        required>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">DNI</label>
                    <input type="text" class="form-control" name="dni" id="dni" placeholder="DNI" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="guardar_alumno"
                    value="guardar_alumno">Guardar</button>
            </form>
        </div>


        <!--tabla para usuarios -->
        <br>

        <br>
        <br>
        <table class="table table-dark">
            <form action="exportar.php" method="POST">

                <label for="name">Nombre del archivo : </label>

                <input type="text" id="archivo" name="archivo" required minlength="1" maxlength="20" size="20 ">
                <button type="submit" class="btn btn-primary" name="exportar" value="exportar">Exportar</button>
            </form>
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Fecha de creación</th>
                    <th scope="col">Acciones</th>


                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM  usuarios";
                $result_task = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($result_task)) { ?>

                <tr>
                    <td>
                        <?php echo $row['nombre']; ?>
                    </td>
                    <td>
                        <?php echo $row['dni']; ?>
                    </td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                    <td>
                        <?php echo $row['fecha_creacion']; ?>
                    </td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id'] ?>">
                            <button type="button" class="btn btn-success">Editar</button>
                        </a>
                        <a href="delete.php?id=<?php echo $row['id'] ?>">
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </a>


                    </td>

                </tr>

                <?php } ?>



            </tbody>
        </table>
    </div>


</body>

</html>