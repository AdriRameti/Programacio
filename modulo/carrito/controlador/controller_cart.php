<?php
$path=$_SERVER['DOCUMENT_ROOT'] ."/Ejercicios_PHP";
include ($path  ."/modulo/carrito/modelo/DAOcart.php"); 
switch ($_GET['op']){
    case 'showCart':
        try{
            $daocart = new DAOcart();
            $rdo = $daocart -> showCart($_GET['user']);
        }catch (Exception $e){
            echo json_encode('Error en la busqueda cart');
            exit;
        }
        if (!$rdo){
            echo json_encode('Error en el resultado cart');
            exit;
        }else{
            $arry = array();
            foreach ($rdo as $value){
                array_push($arry,$value);
            }
            echo json_encode($arry);
        }
        break;
    case 'insertItems':
        $user = $_GET['usuario'];
        $cod = $_GET['codArticulo'];
        try{
            $daocart = new DAOcart();
            $rdo = $daocart ->validaExixtsItems($user,$cod);
            // echo json_encode($rdo);
            // exit;
        }catch(Exception $e){
            echo json_encode('Error validar');
            exit;
        }
        if (!$rdo || mysqli_num_rows($rdo)==0){
            try{
                $daocart = new DAOcart();
                $rdo = $daocart -> insertItems($_GET['usuario'],$_GET['codArticulo']);
            }catch(Exception $e){
                echo json_encode('Error al insertar los items al carrito');
                exit;
            }
    
            if(!$rdo){
                echo json_encode('Error al introducir');
                exit;
            }else{
                echo json_encode('Item introducido correctamente');
                exit;
            }
        }else{
            echo json_encode('Producto ya agregado');
        }
        
        break;
}