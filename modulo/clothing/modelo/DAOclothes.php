<?php
$path=$_SERVER['DOCUMENT_ROOT']  ."/Ejercicios_PHP";
include ($path ."/modelo/connect.php");

class DAOclothes{
    function insert_clothes($datos){
			// $data =  $datos;
			// die('<script>console.log('.json_encode($data).');</script>');
			$codigo=$datos['codigo'];
			$nombre=$datos['nombre'];
			$marca=$datos['marca'];
			$color=$datos['color'];
			$talla=$datos['talla'];
			$fechaEnv=$datos['fechaEnv'];
			


			$sql = " INSERT INTO ropa (codigo,nombre, marca,color, talla, fechaEnv)". " VALUES ('$codigo','$nombre', '$marca','$color', '$talla', '$fechaEnv')";
			$conexion = connect::con();
			mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $res = mysqli_query($conexion,$sql);
			connect::close($conexion);
			// 			$data =  $res;
			// die('<script>console.log('.json_encode($data).');</script>');
			return $res;
		}
		
		function select_all_clothes(){
			$sql = "SELECT * FROM ropa";
			
			$conexion = connect::con();
			$res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
		
		function select_clothes($codigo){
			$sql = "SELECT * FROM ropa WHERE codigo='$codigo'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_clothes($datos){
			// $data = ("Entra case update dao");
			// die('<script>console.log('.json_encode($data).');</script>');
			$codigo=$datos['codigo'];
			$nombre=$datos['nombre'];
			$marca=$datos['marca'];
			$color=$datos['color'];
			$talla=$datos['talla'];
			$fechaEnv=$datos['fechaEnv'];

        	$sql = " UPDATE ropa SET nombre='$nombre', marca='$marca',color='$color', talla='$talla', fechaEnv='$fechaEnv' WHERE codigo='$codigo'";

			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_clothes($codigo){
			$sql = "DELETE FROM ropa WHERE codigo='$codigo'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		
	
    }
}