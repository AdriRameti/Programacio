<?php
function encode($_POST['nombre']){
    require_once "JWT.php";
    $header = '{"typ":"JWT", "alg":"HS256"}';
    $secret = 'maytheforcebewithyou';

    $payload = '{
        "iat":time(), 
        "exp":time() + (60*60),
        "name":'.$_POST['nombre'].'
    }';

    $JWT = new JWT;
    $token = $JWT->encode($header, $payload, $secret);
}
   function decode($token){
    $json = $JWT->decode($token, $secret);
   }



    
