<?php
include 'usuariodao.php';
$dao=new UsuarioDao();
//echo $mensaje=$dao->insertarUsuario("900","Juan","Lopez");
//echo $mensaje=$dao->eliminarUsuario("900");
echo $mensaje=$dao->eliminarUsuarios();
echo "<br>";

$usuarios=$dao->listausuarios();
$tam=sizeof($usuarios);
if($tam==0){
    echo "Sin Usuarios";
}
else{
echo "<br>";

foreach($usuarios as $usuario){

    echo "***************************************"."<br>".
        "Numid: ".$usuario["numid"]."<br>".   
         "Nombre: ".$usuario["nombre"]."<br>".
         "Apellido: ".$usuario["apellido"]."<br>".
         "***************************************"."<br>";
}
}