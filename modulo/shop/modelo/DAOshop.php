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
function select_Tshirts(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre='Camiseta'"; //añadir preu
        
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
    }

    function select_Hoodies(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre='Sudadera'";
        
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
    }
    function select_Jeans(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre='Vaqueros'";
        
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
    }
    function select_Pants(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre='Pantalon'";
        
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
    }
    function select_Jacket(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre='Chaqueta'";
        
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
        }
    function select_Shirt(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM ropa WHERE nombre='Camisa'";
            
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
        }
    function select_Sneakers(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM sneakers WHERE nombre='Sneakers'";
            
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
        }
    function select_Formal(){
        $sql = "SELECT codigo,nombre,marca,img,precio FROM sneakers WHERE nombre='Formal'";
                
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
        }
    }
    