<?php
$path=$_SERVER['DOCUMENT_ROOT'] ."/Ejercicios_PHP";
include ($path  ."/modulo/login/modelo/DAOlogin.php"); 
switch ($_GET['op']){
    case 'Login':
        include("modulo/login/vista/login.html");
        break;
    case 'showLogin':
        try{
            $daologin = new DAOlogin();
            $rdo = $daologin->comprobarUser();
        }catch(Exception $e){
            $callback = 'index.php?page=503';
            die('<script>window.location.href="'.$callback .'";</script>');
        }
        if(!$rdo){
            echo json_encode("Error");
            exit;
    
        }else{
            $arry=array();

            foreach ($rdo as $value) {
                array_push($arry, $value);
            }

            echo json_encode($arry);
    
            
        }
}