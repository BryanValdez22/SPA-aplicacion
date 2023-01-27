<?php 
require_once 'credencialdao.php';
$dao=new CredencialDao();
// echo $mensaje=$dao->insertarCredencial('joseadmin','123456',1,'102');
$password="123456";
$array=$dao->auntenticacion("joseadmin",1);
echo var_dump($array);