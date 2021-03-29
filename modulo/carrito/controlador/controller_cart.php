<?php
$path=$_SERVER['DOCUMENT_ROOT'] ."/Ejercicios_PHP";
include ($path  ."/modulo/carrito/modelo/DAOcart.php"); 
switch ($_GET['op']){
    case 'showCart':
        try{
            $daocart = new DAOcart();
            $rdo = $daocart -> showCart($_GET['user']);
        }catch (exception(e)){
            echo json_encode('Error en la busqueda cart');
        }
        if (!$rdo){
            echo json_encode('Error en el resultado cart');
        }else{
            $arry = array();
            foreach ($rdo as $value){
                array_push($arry,$value);
            }
            echo json_encode($arry);
        }
        break;
}