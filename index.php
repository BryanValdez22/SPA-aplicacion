<?php
if (isset($_POST['usuario']) & isset($_POST['password'])) {
    $user = $_POST['usuario'];
    $pass = $_POST['password'];
    $opcion = $_POST['opcion'];
    if (($user == "admin") & ($pass == "123456") & ($opcion == 1)) {

        session_start();
        session_regenerate_id();
        $_SESSION['usuario'] = $user;
        $_SESSION['rol'] = 1;
        header("location:./admin");
    } else if (($user == "user") & ($pass == "123456") & ($opcion == 2)) {

        session_start();
        session_regenerate_id();
        $_SESSION['usuario'] = $user;
        $_SESSION['rol'] = 2;
        header("location:./usuario");
    } else {
        $mensaje = "Usuario invalido o no Existe";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada del Sistema</title>
    <link rel="stylesheet" href="css/styl.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <br><br>
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="card bg-primary text-white">
                    <center>
                        <h3>Entrada al Sistema</h3>
                    </center>
                </div>
                <?php
                if (empty($mensaje) == false) {

                    echo "<div class='alert alert-warning alert-dismissible fade show'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Mensaje</strong> " . $mensaje . "</div>";
                }
                ?>

                <form action="index.php" method="post">
                    <br>
                    <label for="">Usuario</label>
                    <input type="text" name="usuario" class="form-control">

                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                    <br>
                    <select name="opcion" class="form-control">
                        <option value="0">Seleccione un Rol</option>
                        <option value="1">Administrador</option>
                        <option value="2">Usuario</option>
                    </select>
                    <br>
                    <center>
                        <button type="submit" class="btn btn-primary shadow">Entrar</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</body>

</html>