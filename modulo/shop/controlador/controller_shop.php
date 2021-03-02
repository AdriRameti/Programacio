<?php
$path=$_SERVER['DOCUMENT_ROOT'] ."/Ejercicios_PHP";
include ($path  ."/modulo/shop/modelo/DAOshop.php");
switch ($_GET['op']){
    case "list":
        include("modulo/shop/vista/list_shop.html");
        break;
        case "Shop":
            try{
    
                $daoshop = new DAOshop();
                $rdo = $daoshop->shop($_GET['nom'] ,$_GET['offset']);
               
        
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
    
            // break;
   
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
            $offset=$_GET['offset'];
            try{    
                $daoshop = new DAOshop();
                $rdo = $daoshop->filters($nombres,$marca,$talla,$offset);
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
        case "countProds":
            try{
                $daoshop = new DAOshop();
                $rdo = $daoshop->countProd($_GET['nom']);
            }catch (Exception $e){
                echo json_encode("error");
                exit;
            }
            if(!$rdo){
                echo json_encode("Error");
                exit;
            }else{                                                                                  
                // echo json_encode($rdo);
                // exit;
                $arry=array();
                foreach ($rdo as $value) {
                    array_push($arry, $value);
                }
                echo json_encode($arry);
                }   
            break;
            case "countProdsFilters":
                $nombres=$_GET['nom'];
                $marca=$_GET['marcas'];
                $talla=$_GET['tallas'];
                try{
                    $daoshop = new DAOshop();
                    $rdo = $daoshop->countProd($nombres,$marca,$talla);
                }catch (Exception $e){
                    echo json_encode("error");
                    exit;
                }
                if(!$rdo){
                    echo json_encode("Error");
                    exit;
                }else{                                                                                  
                    // echo json_encode($rdo);
                    // exit;
                    $arry=array();
                    foreach ($rdo as $value) {
                        array_push($arry, $value);
                    }
                    echo json_encode($arry);
                    }   
                break;
                case "countProdsSearch":
                    try{
                        $daoshop = new DAOshop();
                        $rdo = $daoshop->countSearch($_GET['nom'],$_GET['consulta']);
                    }catch (Exception $e){
                        echo json_encode("error");
                        exit;
                    }
                    if(!$rdo){
                        echo json_encode("Error");
                        exit;
                    }else{                                                                                  
                        // echo json_encode($rdo);
                        // exit;
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
                $rdo = $daoshop->search($_GET['consulta'],$_GET['nom'],$_GET['offset']);
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
            try{
                $daoshop = new DAOshop();
                $rdo = $daoshop->views_up($_GET['codigo']);
            }catch (Exception $e){
                echo json_encode("error");
                exit;
            }
            if(!$rdo){
                echo json_encode("Error");
                exit;
            }else{
                echo json_encode('Views Update');
                exit;
                }
            break;
}
