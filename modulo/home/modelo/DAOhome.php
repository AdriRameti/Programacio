<?php
$path=$_SERVER['DOCUMENT_ROOT']  ."/Ejercicios_PHP";
include ($path ."/modelo/connect.php");
class DAOhome{
    function select_all_categories(){
        $sql = "SELECT * FROM categories;";

        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);

        connect::close($conexion);
        return $res;
    }
    function select_slider(){
        $sql = "SELECT img FROM categories;";

        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql)->fetch_all();

        connect::close($conexion);
        return $res;
        // return json_encode($res);
    }
    function buscarHome($valor2){
        $sql = "SELECT * FROM categories WHERE nombre LIKE '%$valor2%'";
        // die($sql);
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql);
        connect::close($conexion);
        return $res;
    }
}
