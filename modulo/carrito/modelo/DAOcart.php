<?php
$path=$_SERVER['DOCUMENT_ROOT']  ."/Ejercicios_PHP";
include ($path ."/modelo/connect.php");
class DAOcart{
function showCart($usuario){
    
    $sql="SELECT r.codigo,r.img,r.precio,l.cantidad, (r.precio*l.cantidad) as subtotal from ropa r inner join liniafact l ON r.codigo=l.codProd;";
    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql);
    connect::close($conexion);
    return $res;
}
function insertItems($usuario,$codArticulo){
    $sql="INSERT INTO liniafact (codProd,codUser,cantidad) VALUES ($codArticulo,'$usuario','1')";
    $conexion = connect::con();
    $res = mysqli_query($conexion,$sql);
    connect::close($conexion);
    return $res;
}
function validaExixtsItems($usuario,$codArticulo){
    $sql="SELECT * FROM liniafact WHERE  codUser='$usuario' AND codProd=$codArticulo ";
    $conexion = connect::con();
    $res = mysqli_query($conexion,$sql);
    connect::close($conexion);
    return $res;
}
function upadate_cantity($codProd){
    $sql="UPDATE liniafact SET cantidad=cantidad + 1 WHERE codProd=$codProd";
    $conexion = connect::con();
    $res = mysqli_query($conexion,$sql);
    connect::close($conexion);
    return $res;
}
function validateCantity($codProd){
    $sql="SELECT cantidad FROM liniafact where codProd=$codProd";
    $conexion = connect::con();
    $res = mysqli_query($conexion,$sql)->fetch_object();
    connect::close($conexion);
    return $res;
}
function less_cantity($codProd){
    $sql="UPDATE liniafact SET cantidad=cantidad -1 WHERE codProd=$codProd";
    $conexion = connect::con();
    $res = mysqli_query($conexion,$sql);
    connect::close($conexion);
    return $res;
}
function sup_item($codProd){
    $sql="DELETE FROM liniafact WHERE codProd=$codProd";
    $conexion = connect::con();
    $res = mysqli_query($conexion,$sql);
    connect::close($conexion);
    return $res;
}
}