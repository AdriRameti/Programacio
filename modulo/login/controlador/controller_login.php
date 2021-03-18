<?php
$path=$_SERVER['DOCUMENT_ROOT'] ."/Ejercicios_PHP";
include ($path  ."/modulo/login/modelo/DAOlogin.php"); 
include ($path ."/modelo/utils/middleware_jwt.php");
include ($path ."/modelo/clases/JWT.php");

switch ($_GET['op']){
    case 'Login':
        include ("modulo/login/vista/login.html");
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
    break;
    case 'register':
        if ($_POST){
            try{
                $daologin = new DAOlogin();
                $rdo = $daologin->valida_usuario($_POST['email']);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
            if ($rdo){
                $validar=1;
                echo json_encode($validar);
                exit();
            }else{
                try{
                    $daologin = new DAOlogin();
                    $rdo = $daologin->insert_usuarios($_POST['email'],$_POST['nombre'],$_POST['contrase']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                if (!$rdo){
                    echo json_encode("Error en el registro");
                    exit;
                }else{
                    echo json_encode('Usuario añadido');
                }
            }

            // }
        }
        break;
        case 'login':
            if ($_POST){
                try{
                    $daologin = new DAOlogin();
                    $rdo = $daologin->select_usuarios($_POST['email']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                if(!$rdo){
                    echo json_encode('No hay usuarios');
                    exit();
                }else{
                    // $valor = get_object_vars($rdo);
                    // echo json_encode($valor['contrasenya']);
                    // exit();
                    $valor = get_object_vars($rdo);
                    if(password_verify($_POST['contrase'],$valor['contrasenya'])){
                        $usuario=$valor['nombre'];
                        $token = encode($usuario);
                        echo json_encode($token);
                        // echo json_encode($valor['nombre']);
                    }else{
                        echo json_encode('Los datos no coinciden');
                    }
                }
            }
            
            break;
}