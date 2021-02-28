<?php
$path=$_SERVER['DOCUMENT_ROOT']  ."/Ejercicios_PHP";
include ($path ."/modelo/connect.php");
class DAOshop{
function show_details($codigo){
        $sql = "SELECT r.marca,r.descripcion,r.precio,d.talla1,d.talla2,d.talla3,d.talla4,d.descriptotal,i.img1,i.img2,i.img3,i.img4 FROM imagenes i INNER JOIN ropa r INNER JOIN details d where i.codigo=$codigo AND d.codigo=$codigo AND r.codigo=$codigo AND i.codigo=r.codigo AND i.codigo=d.codigo AND r.codigo=d.codigo"; 
        
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
}
function views_up($codigo){
    $sql= "UPDATE ropa SET visitas=visitas + 1 where codigo=$codigo";
    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql);
    connect::close($conexion);
    return $res;
}
function shop($nom){

    $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre='$nom' order by visitas DESC"; 
    // die($sql);
    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql);
    connect::close($conexion);
    return $res;
}
function filters($nombres,$marca,$talla){

    $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre='$nombres' AND (marca='$marca' OR talla='$talla') order by visitas DESC";
    // die($sql);
    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql);
    connect::close($conexion);
    return $res;
}
function search($consulta,$nom){
    $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre='$nom' AND (nombre LIKE '%$consulta%' OR marca LIKE '%$consulta%') order by visitas DESC";
    // die($sql);
    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql);
    connect::close($conexion);
    return $res;
}
    }
    