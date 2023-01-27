<?php
require_once '../conexion/conexion.php';

class CredencialDao extends Conexion
{
    public function insertarCredencial($user, $pass, $rol, $usuario)
    {
        $mensaje = "";

        try {

            $conexion = Conexion::conectar();
            $sql = "insert into credencial values(:user,:pass,:rol,:usuario);";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':user', $user);
            $stmt->bindParam(':pass', $pass);
            $stmt->bindParam(':rol', $rol);
            $stmt->bindParam(':usuario', $usuario);
            $stmt->execute();
            $mensaje = "Guardo Usuario con Exito!!";
        } catch (PDOException $e) {

            if ($e->errorInfo[1] == 1062) {
                $mensaje = "Usuario del Sistema Existe";
            } else {
                echo $e->errorInfo[1];
            }
        }
        return $mensaje;
    }

    public function auntenticacion($user,$rol){

        $conexion=Conexion::conectar();
        $sql="select * from vistacredencial where user=:user and idrol=:rol";
        $stmt=$conexion->prepare($sql);
        $stmt->bindParam(':user',$user);
        $stmt->bindParam(':rol',$rol);
        $stmt->execute();
        $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;
        return $array;

    }
}
