<?php

if (isset($_SESSION['rol'])) {
    if ($_SESSION["rol"] == 2) {

        if (isset($_GET['accion'])) {

            if ($_GET['accion'] == "mostrar") {
                require_once '././modulo/app/mostrar.php';
            } elseif ($_GET['accion'] == "guardar") {
                require_once '././modulo/app/guardarusuario.php';
            } elseif ($_GET['accion'] == "eliminar") {
                require_once '././modulo/app/eliminar.php';
            } else if ($_GET['accion'] == "actualizar") {
                require_once '././modulo/app/actualizar.php';
            } else if ($_GET['accion'] == "inicio") {
                require_once '././modulo/app/bienvenida.php';
            } else {
                require_once '././modulo/app/page404.php';
            }
        } else {
            require_once '././modulo/app/bienvenida.php';
        }
    } else {
        header("location:/spasena/");
    }
} else {
    header("location:/spasena/");
}
