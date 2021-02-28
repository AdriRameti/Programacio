<?php
$path=$_SERVER['DOCUMENT_ROOT'] ."/Ejercicios_PHP";
include ($path  ."/modulo/shop/modelo/DAOshop.php");
switch ($_GET['op']){
    case "list":
        include("modulo/shop/vista/list_shop.html");
        break;
    
    case "Camiseta":
        try{

            $daoshop = new DAOshop();
            $rdo = $daoshop->select_Tshirts();
    
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

        break;
    case "Formal":
        try{

            $daoshop = new DAOshop();
            $rdo = $daoshop->select_Formal();
    
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
        break;
    case "Sudadera":
        try{

            $daoshop = new DAOshop();
            $rdo = $daoshop->select_Hoodies();
    
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
        break;
    case "Sneakers":
        try{

            $daoshop = new DAOshop();
            $rdo = $daoshop->select_Sneakers();
    
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
        break;
    case "Accesories": //Falta crear modulo accesories 
        try{

            $daoshop = new DAOshop();
            $rdo = $daoshop->select_Tshirts();
    
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
        break;
    case "Vaqueros":
        try{

            $daoshop = new DAOshop();
            $rdo = $daoshop->select_Jeans();
    
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
        break;
    case "Camisa":
        try{

            $daoshop = new DAOshop();
            $rdo = $daoshop->select_Shirt();
    
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
        break;
    case "Pantalon":
        try{

            $daoshop = new DAOshop();
            $rdo = $daoshop->select_Pants();
    
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
        break;
    case "Chaqueta":
        try{

            $daoshop = new DAOshop();
            $rdo = $daoshop->select_Jacket();
    
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
        break;
        case "details":

            try{
                $daoshop = new DAOshop();
                $rdo = $daoshop->show_details($_GET['codigo']);
              }catch (Exception $e){
                  echo json_encode("error");
                  exit;
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
            break;
        case "filters":
            $nombres=$_GET['nom'];
            $marca=$_GET['marcas'];
            $talla=$_GET['tallas'];
            try{    
                $daoshop = new DAOshop();
                $rdo = $daoshop->filters($nombres,$marca,$talla);
                // echo json_encode($rdo);
                // exit;
            }catch (Exception $e){
                echo json_encode("error");
                      exit;
            }
            if(!$rdo){
                echo json_encode('Error resultado');
                    exit;
            }else{
                $arry=array();
                foreach ($rdo as $value) {
                    array_push($arry, $value);
                }
                echo json_encode($arry);
            }
                break;
        case "search":
            try{
                $daoshop = new DAOshop();
                $rdo = $daoshop->search($_GET['consulta'],$_GET['nom']);
            }catch (Exception $e){
                echo json_encode("error");
                exit;
            }
            if(!$rdo){
                echo json_encode("Error");
                exit;
            }else{
                // echo json_encode($_GET['nom']);
                // exit;
                $arry=array();
                foreach ($rdo as $value) {
                    array_push($arry, $value);
                }
                echo json_encode($arry);
                }
        break;
        case "views":
            $daoshop = new DAOshop();
            $rdo = $daoshop->views_up($_GET['codigo']);
            break;
}
