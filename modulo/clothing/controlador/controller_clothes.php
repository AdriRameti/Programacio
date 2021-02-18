<?php
$path=$_SERVER['DOCUMENT_ROOT'] ."/Ejercicios_PHP";
include ($path  ."/modulo/clothing/modelo/DAOclothes.php"); 

switch ($_GET["op"]){
  //---------------------------LIST----------------------------------------------------------
 case "list_clothes":
  //echo '<script language="javascript">alert("Entra controler");</script>';
  try{
    $daoclothes = new DAOclothes();
    $rdo = $daoclothes->select_all_clothes();
    // $data = $rdo;
    // die('<script>console.log('.json_encode( $data ) .');</script>');
  }catch (Exception $e){
    $callback = 'index.php?page=503';
    die('<script>window.location.href="'.$callback .'";</script>');
  }

  if(!$rdo){
  $callback = 'index.php?page=503';
  die('<script>window.location.href="'.$callback .'";</script>');
  }else{
    include("modulo/clothing/vista/list_clothes.php");
  }
  break;
  //-----------------------------------CREATE-------------------------------------------------
    case "create_clothes":
      $error_codigo = "";
      include ("modulo/clothing/modelo/validaphp.php");

      $check=true;
      if ($_POST){
        $check=validatephp();
        if($check){
          $_SESSION['codigo']=$_POST;
          try{
            $daoclothes = new DAOclothes();
            $rdo = $daoclothes->insert_clothes($_POST);
          }catch (Exception $e){
            $callback = 'index.php?page=503';
            // throw $e;
            die('<script>window.location.href="'.$callback .'";</script>');
        }
        if($rdo){
          echo '<script language="javascript">alert("Registrado en la base de datos correctamente")</script>';
          $callback = 'index.php?page=controller_clothes&op=list_clothes';
          die('<script>window.location.href="'.$callback .'";</script>');
        }else{
          $callback = 'index.php?page=503';
          die('<script>window.location.href="'.$callback .'";</script>');
        }
        }
      }
      include 'modulo/clothing/vista/create_clothes.php';
        break;
    //------------------------------READ--------------------------------------------------------
    case "read_clothes":
      try{
        $daoclothes = new DAOclothes();
        $rdo = $daoclothes->select_clothes($_GET['id']);
        $codigo=get_object_vars($rdo);
        // $data = $codigo;
        // die('<script>console.log('.json_encode( $data ) .');</script>');
      }catch (Exception $e){
        $callback = 'index.php?page=503';
        die('<script>window.location.href="'.$callback .'";</script>');
      } 
       if(!$rdo){
         $callback = 'index.php?page=503';
        die('<script>window.location.href="'.$callback .'";</script>');
      }else{
        include("modulo/clothing/vista/read_clothes.php");
        }
       break;
    //-----------------------------UPDATE-------------------------------------------------------
    case "update_clothes":
      $error_codigo = "";
      include("modulo/clothing/modelo/validaphp.php");
            
      $check = false;
      
      if ($_POST){
          $check=validateupdPHP();
        // $data = $check;
        // die('<script>console.log('.json_encode( $data ) .');</script>');
          if ($check==false){
              $_SESSION['codigo']=$_POST;
              try{
              $daoclothes = new DAOclothes();
              $rdo = $daoclothes->update_clothes($_POST);
              }catch (Exception $e){
                  $callback = 'index.php?page=503';
            die('<script>window.location.href="'.$callback .'";</script>');
              }
        //  $data = $rdo;
        // die('<script>console.log('.json_encode( $data ) .');</script>');
          if($rdo){
            echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
            $callback = 'index.php?page=controller_clothes&op=list_clothes';
            die('<script>window.location.href="'.$callback .'";</script>');
          }else{
            $callback = 'index.php?page=503';
            die('<script>window.location.href="'.$callback .'";</script>');
          }
          }
      }
      
      try{
          $daoclothes = new DAOclothes();
        $rdo = $daoclothes->select_clothes($_GET['id']);
        $codigo=get_object_vars($rdo);
      }catch (Exception $e){
          $callback = 'index.php?page=503';
          die('<script>window.location.href="'.$callback .'";</script>');
      }
      
      if(!$rdo){
         $callback = 'index.php?page=503';
        die('<script>window.location.href="'.$callback .'";</script>');
      }else{
        include("modulo/clothing/vista/update_clothes.php");
      }
      break;
    //-----------------------------DELETE-------------------------------------------------------
    case "delete_clothes":
      if (isset($_POST['delete_clothes'])){
        try{
            $daoclothes = new DAOclothes();
          $rdo = $daoclothes->delete_clothes($_GET['id']);
        }catch (Exception $e){
            $callback = 'index.php?page=503';
      die('<script>window.location.href="'.$callback .'";</script>');
        }
      
      if($rdo){
      echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
      $callback = 'index.php?page=controller_clothes&op=list_clothes';
      die('<script>window.location.href="'.$callback .'";</script>');
    }else{
      $callback = 'index.php?page=503';
      die('<script>window.location.href="'.$callback .'";</script>');
    }
    }
    
    include("modulo/clothing/vista/delete_clothes.php");
       break;
////////////READ MODAL//////////////////////////////////
    case "read_modal":
        //        $data = $_GET['modal'];
        // die('<script>console.log('.json_encode( $data ) .');</script>');
    try{
      $daoclothes = new DAOclothes();
      $rdo = $daoclothes->select_clothes($_GET['modal']);
    }catch (Exception $e){
        echo json_encode("error");
        exit;
    }
    if(!$rdo){
      echo json_encode("error");
        exit;
    }else{
    $codigo=get_object_vars($rdo);
        echo json_encode($codigo);
        //echo json_encode("error");
        exit;
    }  
      break;
      default;
      include("vistas/incluir/error404.php");
      break;
}