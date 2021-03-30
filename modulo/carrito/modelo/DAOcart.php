<?php
$path=$_SERVER['DOCUMENT_ROOT']  ."/Ejercicios_PHP";
include ($path ."/modelo/connect.php");
class DAOcart{
function showCart($usuario){
    $sql="SELECT * FROM carrito WHERE codUser='$usuario'";
    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql);
    connect::close($conexion);
    return $res;
}
function insertItems($usuario,$codArticulo){
    $sql="INSERT INTO carrito (codArticulo,codUser,cantidad) VALUES ($codArticulo,'$usuario','1')";
    $conexion = connect::con();
    $res = mysqli_query($conexion,$sql);
    connect::close($conexion);
    return $res;
}
function validaExixtsItems($usuario,$codArticulo){
    $sql="SELECT * FROM carrito WHERE  codUser='$usuario' AND codArticulo=$codArticulo ";
    $conexion = connect::con();
    $res = mysqli_query($conexion,$sql);
    connect::close($conexion);
    return $res;
}
}