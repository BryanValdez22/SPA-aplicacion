<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Entrada de Datos de Usuario</title>
</head>

<body>

    <div class="container">
        <div class="jumbotron">
            <center>
                <h2>Actualizar Usuario</h2>
            </center>
            <br>
            <?php
            if (empty($mensaje) == false) {

                echo "<div class='alert alert-warning alert-dismissible fade show'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Mensaje</strong> " . $mensaje . "</div>";
            }
            ?>


            <form action="?accion=actualizar" method="post">

                <label>Numero Identificacion</label>
                <input type="text" name="numid" class="form-control" readonly value="<?php if (isset($numid)) {
                                                                                            echo $numid;
                                                                                        } ?>">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" value="<?php if (isset($nombre)) {
                                                                                    echo $nombre;
                                                                                } ?>">
                <label>Apellido</label>
                <input type="text" name="apellido" class="form-control" value="<?php if (isset($apellido)) {
                                                                                    echo $apellido;
                                                                                } ?>">
                <label>Mail</label>
                <input type="text" name="mail" class="form-control" value="<?php if (isset($mail)) {
                                                                                echo $mail;
                                                                            } ?>">
                <br>
                <center>
                    <button type="submit" name="boton" value="guardar" class="btn btn-primary" onclick="javascript:return asegurar();">
                        Editar
                    </button>
                    <button type="submit" name="boton" value="limpiar" class="btn btn-warning">
                        Limpiar
                    </button>
                </center>
            </form>
        </div>

        <!-- <center><a href="index.php">Mostrar Usuarios</a></center> -->
    </div>
    <script>
        function asegurar() {
            rc = confirm("¿Seguro que desea Actualizar?");
            return rc;
        }
    </script>

</body>

</html>