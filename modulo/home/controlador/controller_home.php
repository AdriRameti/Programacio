<?php
$path=$_SERVER['DOCUMENT_ROOT'] ."/Ejercicios_PHP";
include ($path  ."/modulo/home/modelo/DAOhome.php"); 
switch ($_GET['pr']){
    case "Categ":
    try{

        $daohome = new DAOhome();
        $rdo = $daohome->select_all_categories();

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
    case "Slider":
        try{
            $daohome = new DAOhome();
            $rdo = $daohome->select_slider();
        }catch(Exception $e){
            $callback = 'index.php?page=503';
        die('<script>window.location.href="'.$callback .'";</script>');
        }
        if(!$rdo){
            echo json_encode("Error");
            exit;
        }else{

            echo json_encode($rdo);
        }
        break;
    
}
