<?php
$path=$_SERVER['DOCUMENT_ROOT']  ."/Ejercicios_PHP";
include ($path ."/modelo/connect.php");

class DAOsneakers{
    function insert_sneakers($datos){
			$codS=$datos['codS'];
			$marca=$datos['marca'];
			$modelo=$datos['modelo'];
			$talla=$datos['talla'];
			$fechaE=$datos['fechaE'];
			


			$sql = " INSERT INTO sneakers (codS,marca, modelo, talla, fechaE)". " VALUES ('$codS','$marca', '$modelo', '$talla', '$fechaE')";
			$conexion = connect::con();
			mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $res = mysqli_query($conexion,$sql);
			connect::close($conexion);
			return $res;
		}
		
		function select_all_sneakers(){
			$sql = "SELECT * FROM sneakers";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
		
		function select_sneakers($codS){
			$sql = "SELECT * FROM sneakers WHERE codS='$codS'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            connect::close($conexion);
            return $res;
		}
		
		function update_sneakers($datos){
			$codS=$datos['codS'];
			$marca=$datos['marca'];
			$modelo=$datos['modelo'];
			$talla=$datos['talla'];
			$fechaE=$datos['fechaE'];

        	$sql = " UPDATE sneakers SET marca='$marca', modelo='$modelo', talla='$talla', fechaE='$fechaE' WHERE codigo='$codS'";

			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_sneakers($codS){
			$sql = "DELETE FROM sneakers WHERE codS='$codS'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		
	
    }
}