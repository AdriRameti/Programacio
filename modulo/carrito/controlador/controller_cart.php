<?php
$path=$_SERVER['DOCUMENT_ROOT'] ."/Ejercicios_PHP";
include ($path  ."/modulo/carrito/modelo/DAOcart.php"); 
switch ($_GET['op']){
    case "list_cart":
        include("modulo/carrito/vista/list_cart.html");
        break;
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
    case 'upadate_cantity':
        try{
            $daocart = new DAOcart();
            $rdo = $daocart ->upadate_cantity($_GET['codProd']);
        }catch(Exception $e){
            echo json_encode('Error aumentar cantidad');
            exit;
        }
        if(!$rdo){
            echo json_encode('Error al realizar la actualizacion');
            exit;
        }else{
            echo json_encode('Cantidad actualizada correctamente');
            exit;
        }  
        break;
    case 'less_cantity':
        try{
            $daocart = new DAOcart();
             $rdo = $daocart ->validateCantity($_GET['codProd']);
        }catch(Exception $e){
            echo json_encode('Error validar');
            exit;
        }
        $valor = get_object_vars($rdo);
        if($valor['cantidad']==0 || $valor['cantidad']==null)  {
            echo json_encode('0');
        }else{
        try{
            $daocart = new DAOcart();
             $rdo = $daocart ->less_cantity($_GET['codProd']);
        }catch(Exception $e){
            echo json_encode('Error disminuir cantidad');
            exit;
        }
        if(!$rdo){
            echo json_encode('Error al realizar la actualizacion');
            exit;
        }else{
            echo json_encode('Cantidad actualizada correctamente');
            exit;
        }  
        }

        break;
        case 'sup_item':
            try{
                $daocart = new DAOcart();
                 $rdo = $daocart ->sup_item($_GET['codProd']);
            }catch(Exception $e){
                echo json_encode('Error validar');
                exit;
            }
            if(!$rdo){
                echo json_encode('Error al realizar la eliminación');
                exit;
            }else{
                echo json_encode('Articulo eliminado correctamente');
                exit;
            }  
        break;
}