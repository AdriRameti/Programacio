<?php
$path=$_SERVER['DOCUMENT_ROOT']  ."/Ejercicios_PHP";
include ($path ."/modelo/connect.php");
class DAOlogin{
    function comprobarUser(){
        $sql="SELECT * from usuario";
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
    function valida_usuario($email){
        $sql = "SELECT * FROM usuario WHERE correo='$email'";
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql)->fetch_object();
        connect::close($conexion);
        return $res;
    }
    function select_usuarios($email){
        $sql = "SELECT * FROM usuario WHERE correo='$email'";
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql)->fetch_object();
        connect::close($conexion);
        return $res;
    }
    function select_usuario_nombre($nombre){
        $sql = "SELECT nombre,avatar,tipo FROM usuario WHERE nombre LIKE '$nombre%' OR nombre='$nombre'";
        // die ($sql);
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql)->fetch_object();
        connect::close($conexion);
        return $res;
    }
}