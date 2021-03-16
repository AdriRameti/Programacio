<?php
function validate_register($email){
    $sql = "SELECT * FROM usuario WHERE correo='$email'";
        
    $conexion = connect::con();
    $res = mysqli_query($conexion, $sql)->fetch_object();
    connect::close($conexion);
    return $res;
}
function validaRegister(){
    $check = true;
    $v_email=$_POST['email'];
    $r_email=validate_register($v_email);
    if($r_email==false){
        $error_codigo = " * El articulo creado ya existe";
        $check=false;
    }else{
        $error_codigo = "";
    }
    return $check;

}
