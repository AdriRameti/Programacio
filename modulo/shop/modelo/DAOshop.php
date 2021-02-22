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
function filters($filterArray){
    $valor1="";
    $valor2="";
    // $valor3="";
    // $valor4="";
    $valor5="";
    foreach ($filterArray as $valor){
    if ($valor=='Nike'){
        $valor1="Nike";
    }else if($valor=='Adidas'){
        $valor1="Adidas";
    }else if($valor=='Carhartt'){
        $valor1="Carhartt";
    }else if($valor=='Bape'){
        $valor1="Bape";
    }else if($valor=='Supreme'){
        $valor1="Supreme";
    }else if($valor=='Guess'){
        $valor1="Guess";
    }else if($valor=='Obey'){
        $valor1="Obey";
    }else if($valor=='The North Face'){
        $valor1="The North Face";
    }else if($valor=='Polo Ralph Lauren'){
        $valor2="Polo Ralph Lauren";
    }else if($valor=='S'){
        $valor2="Nike";
    }else if($valor=='M'){
        $valor2="S";
    }else if($valor=='L'){
        $valor2="L";
    }else if($valor=='XL'){
        $valor2="XL";
    }if ($valor=="Tshirt"){
        $valor5="Tshirt";
    }else if($valor=="Formal"){
        $valor5="Formal";
    } else if($valor=="Hoodies"){
        $valor5="Hoodies";
    }else if($valor=="Sneakers"){
        $valor5="Sneakers";
    }else if($valor=="Accesories"){
        $valor5="Accesories";
    }else if($valor=="Jeans"){
        $valor5="Jeans";
    }else if($valor=="Shirt"){
        $valor5="Shirt";
    }else if($valor=="Pants"){
        $valor5="Pants";
    }else if($valor=="Jacket"){
        $valor5="Jacket";
    }
    }
    $sql= "SELECT codigo,img,nombre,precio FROM ropa WHERE nombre=$valor5 OR marca=$valor1 OR talla=$valor2";
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
    