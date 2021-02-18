<?php
$path=$_SERVER['DOCUMENT_ROOT'] ."/Ejercicios_PHP";
include ($path  ."/modulo/sneakers/modelo/DAOsneakers.php"); 

switch ($_GET["op"]){
  //---------------------------LIST----------------------------------------------------------
 case "list_sneakers":
  //echo '<script language="javascript">alert("Entra controler");</script>';
  try{
    $daosneakers = new DAOsneakers();
    $rdo = $daosneakers->select_all_sneakers();
  }catch (Exception $e){
    $callback = 'index.php?page=503';
    die('<script>window.location.href="'.$callback .'";</script>');
  }

  if(!$rdo){
  $callback = 'index.php?page=503';
  die('<script>window.location.href="'.$callback .'";</script>');
  }else{
    include("modulo/sneakers/vista/list_sneakers.php");
  }
  break;
  //-----------------------------------CREATE-------------------------------------------------
    case "create_sneakers":
      $error_codigo = "";
      include ("modulo/sneakers/modelo/validaS.php");

      $check=true;
      if ($_POST){
        $check=validatephpS();
        if($check){
          $_SESSION['codS']=$_POST;
          try{
            $daosneakers = new DAOsneakers();
            $rdo = $daosneakers->insert_sneakers($_POST);
          }catch (Exception $e){
            $callback = 'index.php?page=503';
            throw $e;
            die('<script>window.location.href="'.$callback .'";</script>');
        }
        if($rdo){
          echo '<script language="javascript">alert("Registrado en la base de datos correctamente")</script>';
          $callback = 'index.php?page=controller_sneakers&op=list_sneakers';
          die('<script>window.location.href="'.$callback .'";</script>');
        }else{
          $callback = 'index.php?page=503';
          die('<script>window.location.href="'.$callback .'";</script>');
        }
        }
      }
      include 'modulo/sneakers/vista/create_sneakers.php';
        break;
    //------------------------------READ--------------------------------------------------------
    case "read_sneakers":
      try{
        $daosneakers = new DAOsneakers();
        $rdo = $daosneakers->select_sneakers($_GET['id']);
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
        include("modulo/sneakers/vista/read_sneakers.php");
        }
       break;
    //-----------------------------UPDATE-------------------------------------------------------
    case "update_sneakers":
      $error_codigo = "";
      include("modulo/sneakers/modelo/validaphp.php");
            
      $check = false;
      
      if ($_POST){
          $check=validateupdPHP();
        // $data = $check;
        // die('<script>console.log('.json_encode( $data ) .');</script>');
          if ($check==false){
              $_SESSION['codigo']=$_POST;
              try{
              $daosneakers = new DAOsneakers();
              $rdo = $daosneakers->update_sneakers($_POST);
              }catch (Exception $e){
                  $callback = 'index.php?page=503';
            die('<script>window.location.href="'.$callback .'";</script>');
              }
        //  $data = $rdo;
        // die('<script>console.log('.json_encode( $data ) .');</script>');
          if($rdo){
            echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
            $callback = 'index.php?page=controller_sneakers&op=list_sneakers';
            die('<script>window.location.href="'.$callback .'";</script>');
          }else{
            $callback = 'index.php?page=503';
            die('<script>window.location.href="'.$callback .'";</script>');
          }
          }
      }
      
      try{
          $daosneakers = new DAOsneakers();
        $rdo = $daosneakers->select_sneakers($_GET['id']);
        $codigo=get_object_vars($rdo);
      }catch (Exception $e){
          $callback = 'index.php?page=503';
          die('<script>window.location.href="'.$callback .'";</script>');
      }
      
      if(!$rdo){
         $callback = 'index.php?page=503';
        die('<script>window.location.href="'.$callback .'";</script>');
      }else{
        include("modulo/sneakers/vista/update_sneakers.php");
      }
      break;
    //-----------------------------DELETE-------------------------------------------------------
    case "delete_sneakers":
      if (isset($_POST['delete_sneakers'])){
        try{
            $daosneakers = new DAOsneakers();
          $rdo = $daosneakers->delete_sneakers($_GET['id']);
        }catch (Exception $e){
            $callback = 'index.php?page=503';
      die('<script>window.location.href="'.$callback .'";</script>');
        }
      
      if($rdo){
      echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
      $callback = 'index.php?page=controller_sneakers&op=list_sneakers';
      die('<script>window.location.href="'.$callback .'";</script>');
    }else{
      $callback = 'index.php?page=503';
      die('<script>window.location.href="'.$callback .'";</script>');
    }
    }
    
    include("modulo/sneakers/vista/delete_sneakers.php");
       break;
  ///////Read modal///////////////////////////////////////////////////////////////////////////////
    case "read_modal":
        //        $data = $_GET['modal'];
        // die('<script>console.log('.json_encode( $data ) .');</script>');
    try{
      $daosneakers = new DAOsneakers();
      $rdo = $daosneakers->select_sneakers($_GET['modal']);
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