<?php

if($_SERVER['REQUEST_METHOD']=='GET'){

    $numid=base64_decode($_GET['numid']);
    require_once '././modulo/modelo/usuariodao.php';
    $dao=new UsuarioDao();
    $dao->eliminarUsuario($numid);    
    header("location:/spasena/usuario/mostrar");

}
  