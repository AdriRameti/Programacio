<?php
function validate_clothes($codigo){
        $sql = "SELECT * FROM ropa WHERE codigo='$codigo'";
        
        $conexion = connect::con();
        $res = mysqli_query($conexion, $sql)->fetch_object();
        connect::close($conexion);
    // $data = $res;
    // die('<script>console.log('.json_encode($data).');</script>');
        if ($res) {
            return false;
        } else {
            return true; 
        }
    }
function validatephp(){
      
    $check=true;
    $v_codigo=$_POST['codigo'];
    $r_codigo=validate_clothes($v_codigo);

    // $data = $r_codigo;
    // die('<script>console.log('.json_encode($data).');</script>');
    if($r_codigo==false){
        $error_codigo = " * El articulo creado ya existe";
        $check=false;
    }else{
        $error_codigo = "";
    }
    return $check;
}
function validateupdPHP(){
    $check=false;
    $v_codigo=$_POST['codigo'];
    $r_codigo=validate_clothes($v_codigo);

    // $data = $r_codigo;
    // die('<script>console.log('.json_encode($data).');</script>');
    if($r_codigo==true){
        $error_codigo = " * No se puede cambiar el codigo del artículo";
        $check=true;
    }else{
        $error_codigo = "";
    }
    return $check;

}

