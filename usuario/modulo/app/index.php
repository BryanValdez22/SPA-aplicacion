<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Administrador de Usuarios</title>
</head>

<body>
    <header>
        <center>
            <h2>
                Usuario: <?php session_start();
                            echo $_SESSION['usuario']; ?>
            </h2>
            <a href="../logout.php">Salir</a>
        </center>
        <?php

        if (isset($_GET['accion'])) {

            if ($_GET['accion'] == "actualizar") {
                $accion = "mostrar";
            } else {
                $accion = $_GET['accion'];
            }
        } else {
            $accion = "inicio";
        }

        require_once 'header.php';
        ?>
    </header>

    <div class="container">

        <?php
        require_once '././modulo/ruta/routing.php';
        ?>

    </div>

</body>

</html>