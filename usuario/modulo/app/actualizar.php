<?php

// peticion get para traer información del crud

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $usuario = unserialize(base64_decode($_GET['objeto']));
    $numid = $usuario["numid"];
    $nombre = $usuario["nombre"];
    $apellido = $usuario["apellido"];
    $mail = $usuario["mail"];
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    require_once '././modulo/modelo/usuariodao.php';
    $dao = new UsuarioDao();
    if (isset($_POST['boton'])) {

        if ($_POST['boton'] == 'guardar') {


            if (isset($_POST['numid']) & isset($_POST['nombre']) & isset($_POST['apellido']) & isset($_POST['mail'])) {

                $numid = htmlspecialchars($_POST['numid']);
                $nombre = htmlspecialchars($_POST['nombre']);
                $apellido = htmlspecialchars($_POST['apellido']);
                $mail = htmlspecialchars($_POST['mail']);

                if (empty($numid) | empty($nombre) | empty($apellido) |  empty($mail)) {
                    $mensaje = "Campo Vacio";
                } else {

                    $mensaje = $dao->actualizarUsuario($numid, $nombre, $apellido, $mail);
                }
            }
        } else if ($_POST['boton'] == 'limpiar') {

            $numid = "";
            $nombre = "";
            $apellido = "";
            $mensaje = "";
        }
    }
} // metodo post

// peticion post para actualizar el registro


require_once 'vistaactualizar.php';
