<?php

require_once '././modulo/modelo/usuariodao.php';
$dao = new UsuarioDao();
$usuarios = $dao->listausuarios();
$tam = sizeof($usuarios);
require_once 'vistausuarios.php';
