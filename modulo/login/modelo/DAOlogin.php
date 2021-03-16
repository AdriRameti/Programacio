<?php
$path=$_SERVER['DOCUMENT_ROOT']  ."/Ejercicios_PHP";
include ($path ."/modelo/connect.php");
class DAOlogin{
    function comprobarUser(){
        $sql="SELECT count(*) AS usuario from usuario";
        $conexion= connect::con();
        $res= mysqli_query($conexion,$sql);
        connect::close($conexion);
        return $res;
    }
    function insert_usuarios($email,$nombre,$contrase){
        $nombre=$nombre;
        $email=$email;
        $passw=$contrase;
        $tipo='Cliente';
        $safe_passw = password_hash($passw,PASSWORD_DEFAULT);
        $hashavatar= md5( strtolower( trim( $email ) ) );
        $avatar ="https://www.gravatar.com/avatar/$hashavatar?s=40&d=identicon";
        $sql="INSERT INTO usuario (correo,contrasenya,avatar,tipo,nombre) VALUES ('$email','$safe_passw','$avatar','$tipo','$nombre')";
        // die ($sql);
        $conexion= connect::con();
        $res= mysqli_query($conexion,$sql);
        connect::close($conexion);
        return $res;
    }
}