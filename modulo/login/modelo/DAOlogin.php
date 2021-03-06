<?php
$path=$_SERVER['DOCUMENT_ROOT']  ."/Ejercicios_PHP";
include ($path ."/modelo/connect.php");
class DAOlogin{
    function comprobarUser(){
        $sql="SELECT count(*) AS usuarios from usuario";
        $conexion= connect::con();
        $res= mysqli_query($conexion,$sql);
        connect::close($conexion);
        return $res;
    }
}