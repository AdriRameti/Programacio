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
function filters($nom,$marcas1,$tallas1){
    if ($nom=="Tshirt"){
        $nombre='Camiseta';
    }else if($nom=="Formal"){
        $nombre='Formal';
    } else if($nom=="Hoodies"){
        $nombre='Sudadera';
    }else if($nom=="Sneakers"){
        $nombre='Sneakers';
    }else if($nom=="Accesories"){
        $nombre='Accesories';
    }else if($nom=="Jeans"){
        $nombre='Vaqueros';
    }else if($nom=="Shirt"){
        $nombre='Camisa';
    }else if($nom=="Pants"){
        $nombre='Pantalon';
    }else if($nom=="Jacket"){
        $nombre='Chaqueta';
    }
    $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre=$nombre AND (marca=$marcas1 OR talla=$tallas1) by visitas DESC";
    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql);
    connect::close($conexion);
    return $res;
}
function search($consulta,$nom){
    $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre=$nom AND (nombre LIKE '%$consulta%' OR marca LIKE '%$consulta%') order by visitas DESC";;
    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql);
    connect::close($conexion);
    return $res;
}
function select_Tshirts(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre='Camiseta' order by visitas DESC"; 
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
    }

    function select_Hoodies(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre='Sudadera'order by visitas DESC";
        
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
    }
    function select_Jeans(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre='Vaqueros' order by visitas DESC";
        
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
    }
    function select_Pants(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre='Pantalon'order by visitas DESC";
        
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
    }
    function select_Jacket(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre='Chaqueta'order by visitas DESC";
        
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
        }
    function select_Shirt(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre='Camisa'order by visitas DESC";
            
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
        }
    function select_Sneakers(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM sneakers WHERE nombre='Sneakers'order by visitas DESC";
            
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
        }
    function select_Formal(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM sneakers WHERE nombre='Formal'order by visitas DESC";
                
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
        }
    }
    