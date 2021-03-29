<?php
$path=$_SERVER['DOCUMENT_ROOT']  ."/Ejercicios_PHP";
include ($path ."/modelo/connect.php");
class DAOcart{
function showCart(){
    $sql="";
    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql);
    connect::close($conexion);
    return $res;
}
}